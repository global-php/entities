<?php

namespace GlobalPhp\Entities\Flag;

interface DeletedFlagInterface extends FlagInterface
{

    /**#@+
     * Flag constants
     * @var integer
     */
    const IS_NOT_DELETED = 0;
    const IS_DELETED = 1;
    /**#@-*/

    /**
     * @return bool
     */
    public function isDeleted();

    /**
     * @return bool
     */
    public function isNotDeleted();

}