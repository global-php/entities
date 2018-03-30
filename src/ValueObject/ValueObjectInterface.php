<?php

namespace GlobalPhp\Entities\ValueObject;

interface ValueObjectInterface
{

    /**
     * @param mixed $value
     */
    public function __construct($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     * @return static
     */
    public function withValue($value);

    /**
     * @return string
     */
    public function __toString();

}