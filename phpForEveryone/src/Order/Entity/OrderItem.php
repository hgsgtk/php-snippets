<?php declare(strict_types=1);

namespace PhpForEveryone\Order\Entity;

use PhpForEveryone\Order\Value\Money;

/**
 * Class OrderItem
 * @package PhpForEveryone\Order\Entity
 */
final class OrderItem
{
    /** @var Money $money */
    private Money $money;

    /**
     * OrderItem constructor.
     *
     * @param Money $money
     */
    public function __construct(Money $money)
    {
        $this->money = $money;
    }

    /**
     * @return Money
     */
    public function getMoney(): Money
    {
        return $this->money;
    }
}