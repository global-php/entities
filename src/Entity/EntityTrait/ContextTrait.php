<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Context\ContextInterface;

trait ContextTrait
{

    /**
     * @var ContextInterface[]
     */
    private $entityContext = [];

    /**
     * @return ContextInterface[]
     */
    public function getEntityContexts()
    {
        return $this->entityContext;
    }

    /**
     * @param ContextInterface[] $entityContexts
     */
    public function setEntityContexts(array $entityContexts)
    {
        $this->entityContext = $entityContexts;
    }

    /**
     * @param ContextInterface $entityContext
     */
    public function addEntityContext(ContextInterface $entityContext)
    {
        $this->entityContext[] = $entityContext;
    }

}