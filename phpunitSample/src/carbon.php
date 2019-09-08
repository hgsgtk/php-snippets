<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

echo "Now: %s", Carbon::now();
echo PHP_EOL;
