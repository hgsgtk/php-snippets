<?php declare(strict_types=1);


namespace PhpForEveryone\Trip\Repository;


use PhpForEveryone\Trip\Entity\Trip;

interface TripRepository
{
    /**
     * @param int $customerId
     * @return Trip[]
     */
    public function getByCustomerId(int $customerId): array;
}
