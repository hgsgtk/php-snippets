<?php
declare(strict_types=1);

final class Order
{
    private string $invisibleStatus = 'unshipping';

    public function __construct(
        public string $orderId,
    ) {
    }

    public function getInvisibleStatus(): string
    {
        return $this->invisibleStatus;
    }
}

$o = new Order('xxxxx');
echo "id: {$o->orderId}'s status is '{$o->getInvisibleStatus()}'\n";
