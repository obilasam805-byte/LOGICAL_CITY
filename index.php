<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = ltrim($uri, '/');
$file = __DIR__ . '/frontend/' . $path;

if ($path !== '' && file_exists($file) && !is_dir($file)) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if ($ext === 'php') {
        require $file;
        exit;
    }

    // MIME types for static files
    $mimeTypes = [
        'css'   => 'text/css',
        'js'    => 'application/javascript',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'gif'   => 'image/gif',
        'webp'  => 'image/webp',
        'svg'   => 'image/svg+xml',
        'ico'   => 'image/x-icon',
        'mp4'   => 'video/mp4',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'pdf'   => 'application/pdf',
    ];

    $mime = $mimeTypes[$ext] ?? 'application/octet-stream';
    header('Content-Type: ' . $mime);

    // Important for video/large files
    if ($ext === 'mp4') {
        header('Content-Length: ' . filesize($file));
        header('Accept-Ranges: bytes');
    }

    readfile($file);
    exit;
}

// Default: serve index
require __DIR__ . '/frontend/index.php';