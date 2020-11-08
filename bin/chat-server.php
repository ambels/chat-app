<?php

require __DIR__ . '/vendor/autoload.php';
require_once 'Chat.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8099,
    '127.0.0.1'
);

$server->run();
