<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Context\ContextInterface;

trait ContextTrait
{

    /**
     * Array of "contexts" of the entity
     * @var ContextInterface[]
     */
    private $entityContexts = [];

    /**
     * @return ContextInterface[]
     */
    public function getEntityContexts()
    {
        return $this->entityContexts;
    }

    /**
     * @param string $contextType
     * @return ContextInterface
     * @todo Returns only the first occurrence of the context type
     */
    public function getEntityContextByType($contextType)
    {
        foreach ($this->entityContexts as $context) {
            if (get_class($context) === $contextType) {
                return $context;
            }
        }

        $context = new $contextType();
        $this->entityContexts[] = $context;

        return $context;
    }

    /**
     * @param ContextInterface[] $entityContexts
     */
    public function setEntityContexts(array $entityContexts)
    {
        $this->entityContexts = $entityContexts;
    }

    /**
     * @param ContextInterface $entityContext
     */
    public function addEntityContext(ContextInterface $entityContext)
    {
        $this->entityContexts[] = $entityContext;
    }

}