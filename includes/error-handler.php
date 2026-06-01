<?php
// Global error handling for Unireach Consultancy pages.
if (!defined('UNIREACH_ERROR_HANDLER_INIT')) {
    define('UNIREACH_ERROR_HANDLER_INIT', true);

    ob_start();

    function unireach_render_error_page(int $statusCode, string $title, string $message, ?string $details = null): void
    {
        if (!headers_sent()) {
            http_response_code($statusCode);
            header('Content-Type: text/html; charset=UTF-8');
        }

        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        $error_code = $statusCode;
        $error_title = $title;
        $error_message = $message;
        $error_details = $details;

        include __DIR__ . '/../error.php';
        exit;
    }

    function unireach_format_error_details(int $errno, string $errstr, string $errfile, int $errline): string
    {
        return sprintf(
            "%s in %s on line %d",
            $errstr,
            $errfile,
            $errline
        );
    }

    function unireach_handle_php_error(int $errno, string $errstr, string $errfile, int $errline): bool
    {
        if (!(error_reporting() & $errno)) {
            return false;
        }

        $details = unireach_format_error_details($errno, $errstr, $errfile, $errline);
        error_log("[Unireach Error] $details");
        unireach_render_error_page(
            500,
            'Unexpected Error',
            'An internal issue occurred while loading this page. Our team is working on it.',
            $details
        );
        return true;
    }

    function unireach_handle_php_exception(Throwable $exception): void
    {
        $details = sprintf("%s in %s on line %d", $exception->getMessage(), $exception->getFile(), $exception->getLine());
        error_log("[Unireach Exception] $details");
        unireach_render_error_page(
            500,
            'Unexpected Error',
            'An internal issue occurred while loading this page. Our team is working on it.',
            $details
        );
    }

    function unireach_handle_php_shutdown(): void
    {
        $error = error_get_last();
        if ($error !== null && in_array($error['type'], [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE_ERROR], true)) {
            $details = sprintf("%s in %s on line %d", $error['message'], $error['file'], $error['line']);
            error_log("[Unireach Fatal] $details");
            unireach_render_error_page(
                500,
                'Unexpected Error',
                'An internal issue occurred while loading this page. Our team is working on it.',
                $details
            );
        }
    }

    set_error_handler('unireach_handle_php_error');
    set_exception_handler('unireach_handle_php_exception');
    register_shutdown_function('unireach_handle_php_shutdown');
}
