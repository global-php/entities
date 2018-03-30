<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Flag\FlagInterface;

trait FlagTrait
{

    /**
     * Unique array of "flags" of the entity
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
     * @param string $flagType
     * @return FlagInterface
     */
    public function getEntityFlagByType($flagType)
    {
        foreach ($this->flags as $flag) {
            if (get_class($flag) === $flagType) {
                return $flag;
            }
        }

        $flag = new $flagType();
        $this->flags[] = $flag;

        return $flag;
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
        $exists = false;
        foreach ($this->flags as $key => $existingFlag) {
            if (get_class($existingFlag) === get_class($flag)) {
                $this->flags[$key] = $flag;
                $exists = true;
            }
        }

        if (!$exists) {
            $this->flags[] = $flag;
        }
    }

}