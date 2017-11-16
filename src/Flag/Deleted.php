<?php

namespace GlobalPhp\Entities\Flag;

class Deleted implements DeletedInterface
{
    use FlagTrait;

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->value === DeletedInterface::IS_DELETED;
    }

    /**
     * @return bool
     */
    public function isNotDeleted()
    {
        return $this->value === DeletedInterface::IS_NOT_DELETED;
    }

}