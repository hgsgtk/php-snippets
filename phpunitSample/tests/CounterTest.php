<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use phpunitSample\Counter;

final class CounterTest extends TestCase
{
    /** @var Counter $counter */
    private $counter;

    protected function setUp(): void
    {
        parent::setUp();

        $this->counter = new Counter();
    }

    public function testAdd()
    {
        $this->counter->add(1);
        $this->assertSame(1, $this->counter->getCount());
    }

    public function testAdd1()
    {
        // 明示的にtearDownしなくても $this->counter に設定された
        // オブジェクトは片付けられている
        $this->counter->add(1);
        $this->assertSame(1, $this->counter->getCount());
    }

}
