<?php declare(strict_types=1);

namespace PhpForEveryone\Order\Value;

/**
 * Class Money
 * @package PhpForEveryone\OrderItem\Value
 */
final class Money
{
    /** @var int $amount */
    private $amount;

    /**
     * Money constructor.
     * @param $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}