<?php

namespace GlobalPhp\Entities\Flag;

class Active implements ActiveInterface
{
    use FlagTrait;

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->value === ActiveInterface::IS_ACTIVE;
    }

    /**
     * @return bool
     */
    public function isNotActive()
    {
        return $this->value === ActiveInterface::IS_NOT_ACTIVE;
    }

}