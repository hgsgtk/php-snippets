<?php declare(strict_types=1);


namespace PhpForEveryone\Trip\Entity;


final class Customer
{
    /** @var int $id */
    private $id;
    /** @var bool $ban */
    private $ban = false;

    /**
     * Customer constructor.
     * @param int $id
     * @param array $statuses
     * - bool ban
     */
    public function __construct(int $id, array $statuses)
    {
        $this->id = $id;
        $this->ban = $statuses['ban'] ?? false;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isBan(): bool
    {
        return $this->ban;
    }
}
