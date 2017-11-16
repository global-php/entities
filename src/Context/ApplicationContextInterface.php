<?php

namespace GlobalPhp\Entities\Context;

use GlobalPhp\Entities\ValueObject\Identifier;
use GlobalPhp\Entities\ValueObject\Url;

interface ApplicationContextInterface extends ContextInterface
{

    /**
     * @return Url
     */
    public function getUrl();

    /**
     * @param Url $url
     */
    public function setUrl(Url $url);

    /**
     * @return string
     */
    public function getEntityName();

    /**
     * @param string $entityName
     */
    public function setEntityName($entityName);

    /**
     * @return Identifier
     */
    public function getEntityIdentifier();

    /**
     * @param Identifier $identifier
     */
    public function setEntityIdentifier(Identifier $identifier);

}