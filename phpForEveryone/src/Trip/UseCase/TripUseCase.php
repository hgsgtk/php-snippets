<?php declare(strict_types=1);


namespace PhpForEveryone\Trip\UseCase;


use PhpForEveryone\Trip\Repository\CustomerRepository;
use PhpForEveryone\Trip\Repository\TripRepository;

final class TripUseCase
{
    /** @var CustomerRepository $customerRepository */
    private $customerRepository;

    /** @var TripRepository $tripRepository */
    private $tripRepository;

    /**
     * TripUseCase constructor.
     * @param CustomerRepository $customerRepository
     * @param TripRepository $tripRepository
     */
    public function __construct(
        CustomerRepository $customerRepository,
        TripRepository $tripRepository
    )
    {
        $this->customerRepository = $customerRepository;
        $this->tripRepository = $tripRepository;
    }

    /**
     * @param string $customerCode
     * @return bool
     */
    public function isActive(string $customerCode): bool
    {
        $customer = $this->customerRepository->getByCode($customerCode);
        if (!$customer) {
            return false;
        }

        if ($customer->isBan()) {
            return false;
        }

        $trips = $this->tripRepository->getByCustomerId($customer->getId());
        if (count($trips) === 0) {
            return false;
        }

        return true;
    }
}
