<?php declare(strict_types=1);

namespace Tests\Order\Entity;

use PHPUnit\Framework\TestCase;
use PhpForEveryone\Order\Entity\Order;
use PhpForEveryone\Order\Entity\OrderItem;
use PhpForEveryone\Order\Value\OrderStatus;
use PhpForEveryone\Order\Value\Money;

/**
 * Class OrderTest
 * @package Tests\Order\Entity
 */
final class OrderTest extends TestCase
{
    public function testGetTotalAmount()
    {
        $order = new Order(
            [
                new OrderItem(new Money(1000)),
                new OrderItem(new Money(1300)),
            ],
            OrderStatus::CANCELED(),
        );
        $this->assertSame(2300, $order->getTotalAmount());
    }


    /**
     * @dataProvider providerCancelable
     *
     * @param OrderStatus $status
     * @param bool $expected
     *
     * @see Order::cancelable()
     */
    public function testCancelable(OrderStatus $status, bool $expected)
    {
        $order = new Order([new OrderItem(new Money(1000))], $status);
        $this->assertSame($expected, $order->cancelable());
    }

    public function providerCancelable(): array
    {
        return [
            'キャンセル可能なステータス' => [
                'status' => OrderStatus::ORDERED(),
                'expected' => true,
            ],
            'キャンセル不可能なステータス' => [
                'status' => OrderStatus::CANCELED(),
                'expected' => false,
            ],
        ];
    }
}