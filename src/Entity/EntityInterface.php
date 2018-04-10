<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\Context\ContextArray;

use GlobalPhp\Entities\Flag\FlagArray;

interface EntityInterface
{

    /**
     * @return ContextArray<int, \GlobalPhp\Entities\Context\ContextInterface>
     */
    public function getEntityContexts();

    /**
     * @param ContextArray<int, \GlobalPhp\Entities\Context\ContextInterface> $entityContexts
     */
    public function setEntityContexts(ContextArray $entityContexts);

    /**
     * @return FlagArray<int, \GlobalPhp\Entities\Flag\FlagInterface>
     */
    public function getEntityFlags();

    /**
     * @param FlagArray<int, \GlobalPhp\Entities\Flag\FlagInterface> $flags
     */
    public function setEntityFlags(FlagArray $flags);

}