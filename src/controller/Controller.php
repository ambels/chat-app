<?php

declare(strict_types=1);

/**
 * Class that handles all the rendering of pages
 */
class Controller
{
    private static $documentRoot;

    public function __construct()
    {
        self::$documentRoot = $_SERVER['DOCUMENT_ROOT'];
    }

    /**
     * renders the homepage
     */
    public function homepage(): void
    {
        require self::$documentRoot . '/templates/homepage.php';
    }

    /**
     * renders the chat page
     */
    public function chat(): void
    {
        require self::$documentRoot . '/templates/chat.php';
    }

    /**
     * renders the 404 page
     */
    public function notFound(): void
    {
        header('HTTP/1.1 404 Not Found');
        require self::$documentRoot . '/templates/not_found.php';
    }
}
