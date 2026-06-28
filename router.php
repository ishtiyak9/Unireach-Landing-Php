<?php
// Normalized path resolution for Windows and Unix
$uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH);
$path = urldecode($path ?? '/');
$path = $path === '' ? '/' : $path;

// Define base directory
$baseDir = __DIR__;

require_once $baseDir . '/includes/error-handler.php';

// 1. Handle real files (CSS, JS, Images, or .php files if called directly)
$requestedFile = $baseDir . str_replace('/', DIRECTORY_SEPARATOR, $path);

if ($path !== '/' && file_exists($requestedFile) && !is_dir($requestedFile)) {
    return false; // Serve the file as is
}

// 2. Handle clean URLs (e.g., /privacy -> privacy.php)
$cleanPath = rtrim($path, '/');
if ($cleanPath === '') {
    $cleanPath = '/';
}

$routeMap = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/staffing' => 'staffing.php',
    '/concierge' => 'concierge.php',
    '/contact' => 'contact.php',
    '/connect' => 'connect.php',
    '/privacy' => 'privacy.php',
    '/faq' => 'faq.php',
    '/error' => 'error.php',
];

if (isset($routeMap[$cleanPath])) {
    $routeFile = $baseDir . DIRECTORY_SEPARATOR . $routeMap[$cleanPath];
    if (file_exists($routeFile)) {
        include $routeFile;
        exit;
    }
}

$phpFile = $baseDir . str_replace('/', DIRECTORY_SEPARATOR, $cleanPath) . '.php';

if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// 3. Route known error page if requested explicitly
if ($cleanPath === '/error' || $cleanPath === 'error' || $cleanPath === '/error.php' || $cleanPath === 'error.php') {
    include $baseDir . DIRECTORY_SEPARATOR . 'error.php';
    exit;
}

// 4. Fallback to branded 404 page
unireach_render_error_page(
    404,
    'Page Not Found',
    'The page you were looking for does not exist or may have moved. Let us guide you back to our services.'
);
