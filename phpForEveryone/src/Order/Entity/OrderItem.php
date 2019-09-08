<?php declare(strict_types=1);

namespace PhpForEveryone\Order\Entity;

use PhpForEveryone\Order\Value\Money;

/**
 * Class OrderItem
 * @package PhpForEveryone\CustomerRegister\Entity
 */
final class OrderItem
{
    /** @var Money $money */
    private $money;

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
