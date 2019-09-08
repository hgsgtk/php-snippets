<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use phpunitSample\CustomerRegister;
use phpunitSample\Client\Client;
use phpunitSample\Entity\Customer;

final class CustomerRegisterTest extends TestCase
{
    /**
     * @see CustomerRegister::execute()
     * @throws \ReflectionException
     */
    public function testRegister()
    {
        // 前準備
        $mock = $this->getMockBuilder(Client::class)
            ->setMethods(['send'])
            ->getMock();
        $mock->expects($this->once())
            ->method('send')
            ->with($this->equalTo('顧客ID: 1の顧客を登録しました。'))
            ->will($this->returnValue(null));
        $register = new CustomerRegister($mock);

        // 実行
        $customer = new Customer(1);
        $actual = $register->execute($customer);
        $this->assertTrue($actual);
    }
}
