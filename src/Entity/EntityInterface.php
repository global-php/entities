<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\Context\ContextInterface;
use GlobalPhp\Entities\Flag\FlagInterface;

interface EntityInterface
{

    /**
     * @return ContextInterface[]
     */
    public function getEntityContexts();

    /**
     * @param ContextInterface[] $entityContexts
     */
    public function setEntityContexts(array $entityContexts);

    /**
     * @param ContextInterface $entityContext
     */
    public function addEntityContext(ContextInterface $entityContext);

    /**
     * @return FlagInterface[]
     */
    public function getEntityFlags();

    /**
     * @param FlagInterface[] $flags
     */
    public function setEntityFlags(array $flags);

    /**
     * @param FlagInterface $flag
     */
    public function addEntityFlag(FlagInterface $flag);

}