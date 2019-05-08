<?php
declare(strict_types=1);

namespace phpsnippets\tests;

use phpsnippets\src\EagerFlight;
use http\Exception\RuntimeException;
use PHPUnit\Framework\TestCase;

final class EagerTest extends TestCase
{
    /**
     * @return void
     *
     * @throws \PHPUnit\Exception
     */
    public function testEagerFlightMileage()
    {
        // Set up fixtures

        $Flight = new EagerFlight();

        $Flight->setNumber(1);
        $this->assertSame(1, $Flight->number);

        $Flight->setAirlineCode('code-xxx-01');
        $this->assertSame('code-xxx-01', $Flight->airline_code);

        $Flight->cancel();
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Failed to cancel Flight');
    }

    public function testConditional()
    {
        $Flight = new EagerFlight();

        $Flight->setNumber(1);
        if ($Flight->number === 1) {
            $this->assertTrue($Flight->cancel());
        } else if ($Flight->number === 2) {
            $this->assertTrue($Flight->cancel2());
        }

        if ($Flight->airline_code === 'special') {
            $this->assertSame(2, $Flight->number);
        }
    }
}