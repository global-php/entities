<?php

namespace GlobalPhp\Entities\Flag;

class NewFlag implements NewFlagInterface
{
    use FlagTrait;

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->value === NewFlagInterface::IS_NEW;
    }

    /**
     * @return bool
     */
    public function isNotNew()
    {
        return $this->value === NewFlagInterface::IS_NOT_NEW;
    }

}