<#
.SYNOPSIS
    Sets up or repairs this website's Laravel Herd site. Safe to run twice; touches only this site.

.DESCRIPTION
    Reads docs/herd/profile.json, links this clone in Herd as <site>.test, isolates it to the profile's
    PHP version, runs npm ci when node_modules is missing, and checks that the site serves this clone.

    Exit codes: 0 ready, 1 blocked, 3 a decision or a click in Herd is needed.
#>
[CmdletBinding()]
param()

$ErrorActionPreference = 'Stop'
$repo = Split-Path -Parent $PSScriptRoot
$config = Get-Content (Join-Path $repo 'docs\herd\profile.json') -Raw | ConvertFrom-Json

function Write-Ok([string] $Message) { Write-Host "  ok   $Message" -ForegroundColor Green }
function Write-Warn([string] $Message) { Write-Host "  warn $Message" -ForegroundColor Yellow }
function Stop-Setup([int] $Code, [string] $Message) {
    Write-Host "  stop $Message" -ForegroundColor Red
    exit $Code
}

Write-Host "Herd set-up for $($config.appUrl)"

$env:Path = "$env:USERPROFILE\.config\herd\bin;C:\Program Files\nodejs;" + $env:Path
if (-not (Get-Command herd -ErrorAction SilentlyContinue)) { Stop-Setup 1 'Laravel Herd is not installed (https://herd.laravel.com/windows).' }

$status = (& herd status 2>&1 | Out-String)
if ($status -notmatch 'NGINX\s*\|\s*active') { Stop-Setup 3 'Herd is not running. Open Herd and start its services, then run this again.' }
if ($status -notmatch "PHP-$([regex]::Escape($config.php))\s*\|") { Stop-Setup 3 "Herd has no PHP $($config.php). Ask Bambie before running herd php:install $($config.php)." }
Write-Ok 'Herd is running'

Push-Location $repo
try {
    $link = (& herd links 2>&1 | Out-String) -split "`r?`n" | Where-Object { $_ -match "^\|\s*$([regex]::Escape($config.site))\s*\|" } | Select-Object -First 1
    if (-not $link) {
        & herd link $config.site "--isolate=$($config.php)" | Out-Null
        if ($LASTEXITCODE) { Stop-Setup 1 "herd link $($config.site) failed." }
        Write-Ok "Linked $($config.appUrl) to $repo"
    } else {
        $cells = $link -split '\|' | ForEach-Object { $_.Trim() }
        if ($cells[4].TrimEnd('\') -ne $repo.TrimEnd('\')) { Stop-Setup 1 "$($config.site) is linked to $($cells[4]), not this clone. Unlink it yourself; this script does not replace it." }
        Write-Ok "Linked $($config.appUrl)"
        if ($cells[5] -ne $config.php) {
            & herd isolate $config.php | Out-Null
            if ($LASTEXITCODE) { Stop-Setup 1 "herd isolate $($config.php) failed." }
        }
    }
    Write-Ok "PHP $($config.php)"

    if (-not (Test-Path 'node_modules')) {
        npm ci --no-audit --no-fund
        if ($LASTEXITCODE) { Stop-Setup 1 'npm ci failed.' }
        Write-Ok 'npm ci'
    } else {
        Write-Ok 'node_modules present'
    }
} finally {
    Pop-Location
}

try {
    $served = (Invoke-WebRequest -UseBasicParsing -TimeoutSec 15 "$($config.appUrl)/VERSION").Content
    if ($served -is [byte[]]) { $served = [Text.Encoding]::UTF8.GetString($served) }
    $served = "$served".Trim()
} catch {
    Stop-Setup 3 "$($config.appUrl) did not answer. Run herd status, restart Herd if needed, then run this again."
}
$expected = (Get-Content (Join-Path $repo 'public\VERSION') -Raw).Trim()
if ($served -ne $expected) { Stop-Setup 1 "$($config.appUrl)/VERSION is $served, not $expected from this clone." }
Write-Ok "$($config.appUrl) serves this clone (VERSION $served)"
Write-Host 'Ready. Run scripts\preview.ps1 for the live preview.'
exit 0
