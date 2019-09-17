<?php declare(strict_types=1);


namespace PhpForEveryone;


final class Response
{
    /** @var string $body */
    private $body;

    /**
     * Request constructor.
     * @param string $body
     */
    public function __construct(string $body)
    {
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        $response = $this->decodeJsonBody($this->body);
        return (int)$response['status'];
    }

    private function decodeJsonBody(string $body): array
    {
        $decodedBody = json_decode($body, true);
        if (is_null($body)) {
            throw new \RuntimeException();
        }
        return $decodedBody;
    }
}
