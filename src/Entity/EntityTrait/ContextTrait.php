<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Context\ContextArray;

trait ContextTrait
{

    /**
     * Array of "contexts" of the entity
     * @var ContextArray
     */
    private $entityContextArray;

    /**
     * @return ContextArray
     */
    public function getEntityContexts()
    {
        if (!$this->entityContextArray) {
            $this->entityContextArray = new ContextArray([]);
        }
        return $this->entityContextArray;
    }

    /**
     * @param ContextArray $entityContexts
     */
    public function setEntityContexts(ContextArray $entityContexts)
    {
        $this->entityContextArray = $entityContexts;
    }

}