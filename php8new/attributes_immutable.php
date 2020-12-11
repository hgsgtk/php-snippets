<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Immutable;

#[Immutable]
final class ValueObject
{
    public function __construct(
        private string $v
    ) {}

    public function changeV(string $v): void
    {
        $this->v = $v;
    }
}
