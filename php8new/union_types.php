<?php
declare(strict_types=1);

final class Number
{
    public function __construct(
        private int|float $number,
    ) {}
}

$n = new Number(1);
var_dump($n);
$n = new Number(0.5);
var_dump($n);
// new Number('1'); TypeError

