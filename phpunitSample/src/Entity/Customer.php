<?php declare(strict_types=1);


namespace phpunitSample\Entity;


use http\Exception\InvalidArgumentException;

final class Customer
{
    private $id;

    /**
     * Customer constructor.
     * @param $id
     */
    public function __construct(int $id)
    {
        if ($id <= 0) {
            throw new InvalidArgumentException();
        }
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
