<?php

namespace GlobalPhp\Entities\ValueObject;

trait ValueObjectTrait
{

    /**
     * @var mixed
     */
    private $value;

    /**
     * ValueObject constructor
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
        return new static($value);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }

}