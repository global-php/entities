<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Flag\FlagArray;

trait FlagTrait
{

    /**
     * Unique array of "flags" of the entity
     * @var FlagArray
     */
    private $flagArray;

    /**
     * @return FlagArray
     */
    public function getEntityFlags()
    {
        if (!$this->flagArray) {
            $this->flagArray = new FlagArray();
        }
        return $this->flagArray;
    }

    /**
     * @param FlagArray $flags
     */
    public function setEntityFlags(FlagArray $flags)
    {
        $this->flagArray = $flags;
    }

}