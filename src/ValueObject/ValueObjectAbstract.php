<?php

namespace GlobalPhp\Entities\ValueObject;

abstract class ValueObjectAbstract
{

    /**
     * @var mixed
     */
    protected $value;

    /**
     * ValueObjectAbstract constructor
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return static
     */
    public function withValue($value)
    {
        $newValueObject = clone $this;
        $newValueObject->value = $value;
        return $newValueObject;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }

}