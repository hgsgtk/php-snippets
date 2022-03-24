<?php

declare(strict_types=1);

namespace Tests;

use Hgsgtk\Websocket\Client;

final class ClientTest extends \PHPUnit\Framework\TestCase {
    public function testRun()
    {
        $client = new Client();
        $client->run();
    }
}
