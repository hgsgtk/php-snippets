<?php declare(strict_types=1);


namespace PhpForEveryone\Trip\Value;

/**
 * Class Enum
 * @package PhpForEveryone\Trip\Value
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

    /**
     * @return mixed
     */
    final public function valueOf()
    {
        return $this->scalar;
    }

    /**
     * @return string
     */
    final public function __toString()
    {
        return (string)$this->scalar;
    }
}
