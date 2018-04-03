<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\Context\ContextArray;

use GlobalPhp\Entities\Flag\FlagArray;

interface EntityInterface
{

    /**
     * @return ContextArray
     */
    public function getEntityContexts();

    /**
     * @param ContextArray $entityContexts
     */
    public function setEntityContexts(ContextArray $entityContexts);

    /**
     * @return FlagArray
     */
    public function getEntityFlags();

    /**
     * @param FlagArray $flags
     */
    public function setEntityFlags(FlagArray $flags);

}