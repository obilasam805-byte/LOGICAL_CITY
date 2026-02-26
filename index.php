<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files directly (images, css, js)
if ($uri !== '/' && file_exists(__DIR__ . '/frontend' . $uri)) {
    return false;
}

// Route to the requested PHP file
$file = __DIR__ . '/frontend' . $uri;

if (file_exists($file) && !is_dir($file)) {
    require $file;
} else {
    require __DIR__ . '/frontend/index.php';
}