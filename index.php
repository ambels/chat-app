<?php

require 'src/controller/Controller.php';

$controller = new Controller();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri || '/index.php' === $uri) {
    $controller->homepage();
} elseif ('/index.php/chat' === $uri) {
    $controller->chat();
} else {
    $controller->notFound();
}
