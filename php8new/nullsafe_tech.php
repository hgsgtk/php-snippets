<?php
declare(strict_types=1);

$a = null;
var_dump(${$a?->b});
// undefined variable '$' -> null
var_dump(${$a?->b}->c); // null->c
