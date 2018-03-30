<?php

namespace GlobalPhp\Entities\Flag;

interface NewFlagInterface extends FlagInterface
{

    /**#@+
     * Flag constants
     * @var integer
     */
    const IS_NOT_NEW = 0;
    const IS_NEW = 1;
    /**#@-*/

    /**
     * @return bool
     */
    public function isNew();

    /**
     * @return bool
     */
    public function isNotNew();

}