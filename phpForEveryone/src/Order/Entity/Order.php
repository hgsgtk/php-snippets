<?php declare(strict_types=1);

namespace PhpForEveryone\Order\Entity;

use PhpForEveryone\Order\Value\OrderStatus;

/**
 * Class CustomerRegister
 * @package PhpForEveryone\CustomerRegister\Entity
 */
final class Order
{
    private const CANCELABLE_STATUS = [
        OrderStatus::ORDERED,
        OrderStatus::SHIPPING,
    ];

    /** @var OrderItem[] $orderItems */
    private $orderItems;

    /** @var OrderStatus $status */
    private $status;

    /**
     * CustomerRegister constructor.
     * @param OrderItem[]
     * @param OrderStatus $status
     */
    public function __construct(array $orderItems, OrderStatus $status)
    {
        if (count($orderItems) === 0) {
            throw new \InvalidArgumentException();
        }
        $this->orderItems = $orderItems;
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        $amount = 0;
        foreach ($this->orderItems as $orderItem) {
            $amount += $orderItem->getMoney()->getAmount();
        }
        return $amount;
    }

    /**
     * @return bool
     */
    public function cancelable(): bool
    {
        if (in_array($this->status->valueOf(), self::CANCELABLE_STATUS, true)) {
            return true;
        }

        return false;
    }
}
