<?php

namespace GlobalPhp\Entities\Flag;

interface ActiveInterface extends FlagInterface
{

    /**#@+
     * Flag constants
     * @var integer
     */
    const IS_NOT_ACTIVE = 0;
    const IS_ACTIVE = 1;
    /**#@-*/

    /**
     * @return bool
     */
    public function isActive();

    /**
     * @return bool
     */
    public function isNotActive();

}