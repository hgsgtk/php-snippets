<?php declare(strict_types=1);

namespace phpunitSample;

use \phpunitSample\Client\Client;
use phpunitSample\Entity\Customer;

/**
 * Class CustomerRegister
 * @package phpunitSample
 */
final class CustomerRegister
{
    /** @var Client $notifyClient */
    private $notifyClient;

    /**
     * CustomerRegister constructor.
     * @param $notifyClient
     */
    public function __construct(Client $notifyClient)
    {
        $this->notifyClient = $notifyClient;
    }

    /**
     * @param Customer $customer
     * @return bool
     */
    public function execute(Customer $customer): bool
    {
        // 顧客登録処理
        // ...
        // slack通知
        $msg = "顧客ID: {$customer->getId()}の顧客を登録しました。";
        $this->notifyClient->send($msg);
        return true;
    }
}
