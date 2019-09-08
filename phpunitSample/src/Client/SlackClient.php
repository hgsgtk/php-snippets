<?php declare(strict_types=1);


namespace phpunitSample\Client;


final class SlackClient implements Client
{
    /** @var $channel */
    private $channel;

    /**
     * SlackClient constructor.
     * @param $channel
     */
    public function __construct(string $channel)
    {
        $this->channel = $channel;
    }


    public function send(string $message): void
    {
        // TODO: Implement send() method.
    }
}
