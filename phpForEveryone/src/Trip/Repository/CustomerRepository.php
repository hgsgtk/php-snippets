<?php declare(strict_types=1);


namespace PhpForEveryone\Trip\Repository;


use PhpForEveryone\Trip\Entity\Customer;

/**
 * Interface CustomerRepository
 * @package PhpForEveryone\Trip\Repository
 */
interface CustomerRepository
{
    /**
     * @param string $code
     * @return Customer|null
     */
    public function getByCode(string $code): ?Customer;
}
