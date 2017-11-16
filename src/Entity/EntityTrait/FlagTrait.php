<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Flag\FlagInterface;

trait FlagTrait
{

    /**
     * @var FlagInterface[]
     */
    private $flags = [];

    /**
     * @return FlagInterface[]
     */
    public function getEntityFlags()
    {
        return $this->flags;
    }

    /**
     * @param FlagInterface[] $flags
     */
    public function setEntityFlags(array $flags)
    {
        $this->flags = $flags;
    }

    /**
     * @param FlagInterface $flag
     */
    public function addEntityFlag(FlagInterface $flag)
    {
        $this->flags[] = $flag;
    }

}