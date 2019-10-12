<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use ExceptionSample\UseCases\Sample;

try {
    (new Sample())->throwLogic();
} catch (\ExceptionSample\Exceptions\RuntimeException $e) {
    //
} catch (\ExceptionSample\Exceptions\BaseException $e) {
    echo 'hoge';
}
