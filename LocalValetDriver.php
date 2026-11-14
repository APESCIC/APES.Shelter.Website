<?php

use Valet\Drivers\BasicWithPublicValetDriver;

/*
 * Laravel Herd driver for the local preview. Herd runs nginx, which ignores public/.htaccess, so this driver
 * reads that file on every request and applies what Cloudron's Apache would: the RewriteRule redirects, the
 * DirectoryIndex and the ErrorDocument 404 page. Herd loads it from the repository root; it is not under
 * public/, so it is never deployed.
 */
class LocalValetDriver extends BasicWithPublicValetDriver
{
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return is_file($sitePath.'/public/.htaccess');
    }

    public function isStaticFile(string $sitePath, string $siteName, string $uri)
    {
        $this->redirectIfRuleMatches($sitePath, $uri);

        $path = $sitePath.'/public/'.trim($uri, '/');

        return $this->isActualFile($path) ? $path : false;
    }

    public function frontControllerPath(string $sitePath, string $siteName, string $uri): ?string
    {
        $this->redirectIfRuleMatches($sitePath, $uri);

        $public = $sitePath.'/public';
        $path = $public.'/'.trim($uri, '/');

        if (pathinfo($path, PATHINFO_EXTENSION) === 'php' && $this->isActualFile($path)) {
            $_SERVER['SCRIPT_FILENAME'] = $path;
            $_SERVER['SCRIPT_NAME'] = '/'.trim($uri, '/');
            $_SERVER['DOCUMENT_ROOT'] = $public;

            return $path;
        }

        $htaccess = $this->htaccess($sitePath);
        if (is_dir($path)) {
            foreach ($htaccess['index'] as $index) {
                if ($this->isActualFile($path.'/'.$index)) {
                    $this->sendHtml(200, $path.'/'.$index);
                }
            }
            if ($htaccess['noIndexes']) {
                http_response_code(403);
                header('Content-Type: text/plain; charset=utf-8');
                echo 'Forbidden';
                exit;
            }
        }

        $notFound = isset($htaccess['errors'][404]) ? $public.$htaccess['errors'][404] : null;
        if ($notFound !== null && $this->isActualFile($notFound)) {
            $this->sendHtml(404, $notFound);
        }

        return null;
    }

    private function redirectIfRuleMatches(string $sitePath, string $uri): void
    {
        $path = ltrim($uri, '/');

        foreach ($this->htaccess($sitePath)['redirects'] as [$pattern, $target, $status, $noEscape]) {
            if (! preg_match('#'.str_replace('#', '\#', $pattern).'#', $path)) {
                continue;
            }
            if (! $noEscape) {
                $target = str_replace(['#', ' '], ['%23', '%20'], $target);
            }
            $query = (string) ($_SERVER['QUERY_STRING'] ?? '');
            if ($query !== '' && ! str_contains($target, '?')) {
                $target .= '?'.$query;
            }
            http_response_code($status);
            header('Location: '.$target);
            exit;
        }
    }

    private function sendHtml(int $status, string $file): never
    {
        http_response_code($status);
        header('Content-Type: text/html; charset=utf-8');
        readfile($file);
        exit;
    }

    /**
     * @return array{redirects: list<array{string, string, int, bool}>, index: list<string>, errors: array<int, string>, noIndexes: bool}
     */
    private function htaccess(string $sitePath): array
    {
        $rules = ['redirects' => [], 'index' => ['index.html'], 'errors' => [], 'noIndexes' => false];
        $lines = @file($sitePath.'/public/.htaccess', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];

        foreach ($lines as $line) {
            $line = trim($line);
            if (preg_match('/^RewriteRule\s+(\S+)\s+(\S+)\s+\[([^\]]*)\]/i', $line, $match)
                && preg_match('/(?:^|,)R=(\d{3})(?:,|$)/i', $match[3], $status)) {
                $noEscape = (bool) preg_match('/(?:^|,)NE(?:,|$)/i', $match[3]);
                $rules['redirects'][] = [$match[1], $match[2], (int) $status[1], $noEscape];
            } elseif (preg_match('/^DirectoryIndex\s+(.+)$/i', $line, $match)) {
                $rules['index'] = preg_split('/\s+/', trim($match[1]));
            } elseif (preg_match('/^ErrorDocument\s+(\d{3})\s+(\/\S+)$/i', $line, $match)) {
                $rules['errors'][(int) $match[1]] = $match[2];
            } elseif (preg_match('/^Options\s.*-Indexes\b/i', $line)) {
                $rules['noIndexes'] = true;
            }
        }

        return $rules;
    }
}
