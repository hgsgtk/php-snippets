<?php declare(strict_types=1);

namespace PhpForEveryone\Order\Entity;

/**
 * Class Order
 * @package PhpForEveryone\Order\Entity
 */
final class Order
{
    /** @var OrderItem[] $orderItems */
    private array $orderItems;

    /**
     * Order constructor.
     * @param OrderItem[]
     */
    public function __construct(array $orderItems)
    {
        if (count($orderItems) === 0) {
            throw new \InvalidArgumentException();
        }
        $this->orderItems = $orderItems;
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
}