<?php declare(strict_types=1);


namespace phpunitSample\Client;

/**
 * Interface Client
 * @package phpunitSample\Client
 */
interface Client
{
    /**
     * メッセージ送信
     *
     * @param string $message
     * @return bool
     */
    public function send(string $message): void;
}
