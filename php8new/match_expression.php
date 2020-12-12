<?php
declare(strict_types=1);

$v = 8.0;
echo match ($v) {
    '8.0' => 'Unexpected',
    8.0 => 'Expected',
};
