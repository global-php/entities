<?php

namespace GlobalPhp\Entities\Flag;

class ActiveFlag implements ActiveFlagInterface
{
    use FlagTrait;

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->value === ActiveFlagInterface::IS_ACTIVE;
    }

    /**
     * @return bool
     */
    public function isNotActive()
    {
        return $this->value === ActiveFlagInterface::IS_NOT_ACTIVE;
    }

}