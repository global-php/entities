<?php

namespace GlobalPhp\Entities\Flag;

class DeletedFlag implements DeletedFlagInterface
{
    use FlagTrait;

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->value === DeletedFlagInterface::IS_DELETED;
    }

    /**
     * @return bool
     */
    public function isNotDeleted()
    {
        return $this->value === DeletedFlagInterface::IS_NOT_DELETED;
    }

}