<?php declare(strict_types=1);


namespace Tests;

use PHPUnit\Framework\TestCase;
use PhpForEveryone\Response;

final class ResponseTest extends TestCase
{
    public function testGetStatus()
    {
        $body = <<<EOF
{
    "status": 200
}
EOF;
        $response = new Response($body);
        $this->assertSame(200, $response->getStatus());
    }
}
