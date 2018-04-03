<?php

namespace GlobalPhp\Entities\Context;

use GlobalPhp\Entities\ValueObject\Identifier;
use GlobalPhp\Entities\ValueObject\Url;

trait ApplicationContextTrait
{
    use ContextTrait;

    /**
     * @var string
     */
    private $entityName;

    /**
     * @var Identifier
     */
    private $entityIdentifier;

    /**
     * @var Url
     */
    private $url;

    /**
     * @param string $entityName
     * @param Identifier $entityIdentifier
     * @param Url|null $url
     */
    public function __construct($entityName, Identifier $entityIdentifier, Url $url = null)
    {
        $this->entityName = $entityName;
        $this->entityIdentifier = $entityIdentifier;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param $entityName
     * @return static
     */
    public function withEntityName($entityName)
    {
        $newContextObject = clone $this;
        $newContextObject->entityName = $entityName;
        return $newContextObject;
    }

    /**
     * @return Identifier
     */
    public function getEntityIdentifier()
    {
        return $this->entityIdentifier;
    }

    /**
     * @param Identifier $entityIdentifier
     * @return static
     */
    public function withEntityIdentifier(Identifier $entityIdentifier)
    {
        $newContextObject = clone $this;
        $newContextObject->entityIdentifier = $entityIdentifier;
        return $newContextObject;
    }

    /**
     * @return Url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param Url $url
     * @return static
     */
    public function withUrl(Url $url)
    {
        $newContextObject = clone $this;
        $newContextObject->url = $url;
        return $newContextObject;
    }

}