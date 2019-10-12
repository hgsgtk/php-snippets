<?php declare(strict_types=1);

namespace ExceptionSample\UseCases;

use ExceptionSample\Exceptions\LogicException;

final class Sample
{
    public function throwLogic()
    {
        throw new LogicException();
    }
}
