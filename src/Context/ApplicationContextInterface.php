<?php

namespace GlobalPhp\Entities\Context;

use GlobalPhp\Entities\ValueObject\Identifier;
use GlobalPhp\Entities\ValueObject\Url;

interface ApplicationContextInterface extends ContextInterface
{

    /**
     * @param string $entityName
     * @param Identifier $entityIdentifier
     * @param Url|null $url
     */
    public function __construct($entityName, Identifier $entityIdentifier, Url $url = null);

    /**
     * @return string
     */
    public function getEntityName();

    /**
     * @param string $entityName
     * @return static
     */
    public function withEntityName($entityName);

    /**
     * @return Identifier
     */
    public function getEntityIdentifier();

    /**
     * @param Identifier $entityIdentifier
     * @return static
     */
    public function withEntityIdentifier(Identifier $entityIdentifier);

    /**
     * @return Url
     */
    public function getUrl();

    /**
     * @param Url $url
     * @return static
     */
    public function withUrl(Url $url);

}