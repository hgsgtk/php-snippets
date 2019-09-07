<?php declare(strict_types=1);


namespace PhpForEveryone\Order\Value;

/**
 * Class Enum
 * @package PhpForEveryone\Order\Value
 * @see https://qiita.com/Hiraku/items/71e385b56dcaa37629fe
 */
abstract class Enum
{
    /** @var $scalar */
    private $scalar;

    /**
     * Enum constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $ref = new \ReflectionObject($this);
        $consts = $ref->getConstants();
        if (!in_array($value, $consts, true)) {
            throw new \InvalidArgumentException;
        }

        $this->scalar = $value;
    }

    /**
     * @param $label
     * @param $args
     * @return mixed
     */
    final public static function __callStatic($label, $args)
    {
        $class = get_called_class();
        $const = constant("$class::$label");
        return new $class($const);
    }

    final public function valueOf()
    {
        return $this->scalar;
    }

    final public function __toString()
    {
        return (string)$this->scalar;
    }
}