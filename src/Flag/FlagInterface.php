<?php

namespace GlobalPhp\Entities\Flag;

interface FlagInterface
{

    /**
     * @param int $value
     */
    public function __construct($value);

    /**
     * @return int
     */
    public function getValue();

    /**
     * @param int $value
     */
    public function setValue($value);

}