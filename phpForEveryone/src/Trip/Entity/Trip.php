<?php declare(strict_types=1);


namespace PhpForEveryone\Trip\Entity;

use PhpForEveryone\Trip\Value\TripStatus;

/**
 * Class Trip
 * @package PhpForEveryone\Trip\Entity
 */
final class Trip
{
    private const CANCELABLE_STATUS = [
        TripStatus::REQUEST,
        TripStatus::UNDER_CONSTRUCTION,
    ];

    /** @var int $customerId */
    private $customerId;
    /** @var TripStatus $status */
    private $status;

    /**
     * Trip constructor.
     * @param $customerId
     * @param $status
     */
    public function __construct(int $customerId, TripStatus $status)
    {
        $this->customerId = $customerId;
        $this->status = $status;
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
