<?php

declare(strict_types=1);

namespace Hgsgtk\Websocket;

final class Client
{
    public function run() {
        $client = new \WebSocket\Client("ws://echo.websocket.org/");
        $client->text("Hello WebSocket.org!");
        echo $client->receive();
        $client->close();
        }
}
