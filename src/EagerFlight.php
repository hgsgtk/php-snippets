<?php

namespace phpsnippets\src;

class EagerFlight
{
	public $number;
	public $airline_code;

	public function setNumber(int $number): void
	{
		$this->number = $number;
	}

	public function setAirlineCode(string $code): void
	{
		$this->airline_code = $code;
	}

    public function cancel(): bool
    {
        throw new \RuntimeException('Failed to cancel Flight');
	}
}
