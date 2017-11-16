<?php

namespace GlobalPhp\Entities\Flag;

interface FlagInterface
{

    /**
     * @return int
     */
    public function getValue();

    /**
     * @param int $value
     */
    public function setValue(int $value);

}