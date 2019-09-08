<?php declare(strict_types=1);

namespace phpunitSample;

final class Counter
{
    /** @var int $count */
    private $count = 0;

    /**
     * @param int $num
     */
    public function add(int $num)
    {
        $this->count += $num;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}
