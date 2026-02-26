<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Remove leading slash
$path = ltrim($uri, '/');

// Full path to the file in frontend
$file = __DIR__ . '/frontend/' . $path;

// If it's a real file (image, css, js, php), serve it
if ($path !== '' && file_exists($file) && !is_dir($file)) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        require $file;
    } else {
        // Serve static files (images, css, js, etc.)
        $mime = mime_content_type($file);
        header('Content-Type: ' . $mime);
        readfile($file);
    }
    exit;
}

// Default: serve frontend/index.php
require __DIR__ . '/frontend/index.php';