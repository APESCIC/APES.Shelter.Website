# Herd profile

This website is served locally by Laravel Herd. The values below are in `profile.json`, which `scripts/herd-setup.ps1` and `scripts/preview.ps1` read.

| Item | Value |
| --- | --- |
| Site | `http://apes-shelter-website.test`, a Herd link (`herd link apes-shelter-website`) to this clone |
| Document root | `public/`, as on Cloudron |
| Web server | Herd's nginx on port 80, through [`LocalValetDriver.php`](../../LocalValetDriver.php) |
| PHP | Herd's PHP 8.4, isolated to this site (`herd isolate 8.4`), as on Cloudron. Only `.php` files go through PHP |
| Database | None. There is no demo seeder, because the site stores no records |
| Live reload | Browsersync on `http://localhost:3102` (UI on 3112), proxying `http://apes-shelter-website.test` and reloading on any change under `public/` |
| Node | Herd's Node 22, for Browsersync only. The deployed site needs no Node |

## Why the local driver

Cloudron serves the site with Apache, which reads `public/.htaccess`. Herd runs nginx, which ignores it. `LocalValetDriver.php` in the repository root reads `public/.htaccess` on every request and applies the same `RewriteRule ... [R=301]` redirects, `DirectoryIndex`, `Options -Indexes` (403 for a folder with no index page) and `ErrorDocument 404` page. Edit `.htaccess` only; the driver picks up the change on the next request. The driver is outside `public/`, so it is never deployed.

`php_value` lines in `.htaccess` don't apply under Herd: keep them inside `<IfModule php_module>` for Cloudron, and put any local equivalent in `public/.user.ini`.

## Set up

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts\herd-setup.ps1
```

It is safe to run twice and only touches this site: it links the clone in Herd, isolates it to PHP 8.4, runs `npm ci` if `node_modules/` is missing, and checks the site serves this clone.

## Daily loop

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts\preview.ps1
```

It pulls the latest changes, checks Herd serves `http://apes-shelter-website.test/VERSION` from this checkout, and starts Browsersync. Open `http://localhost:3102`.
