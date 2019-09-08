<?php declare(strict_types=1);


namespace PhpForEveryone\Order\Value;

/**
 * Class OrderStatus
 * @package PhpForEveryone\CustomerRegister\Value
 */
final class OrderStatus extends Enum
{
    public const ORDERED = 1;
    public const SHIPPING = 2;
    public const DISPATCHED = 3;
    public const CANCELED = 4;
}
