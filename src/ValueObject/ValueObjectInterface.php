<?php

namespace GlobalPhp\Entities\ValueObject;

interface ValueObjectInterface
{

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