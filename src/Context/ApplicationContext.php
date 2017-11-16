<?php

namespace GlobalPhp\Entities\Context;

use GlobalPhp\Entities\ValueObject\Identifier;
use GlobalPhp\Entities\ValueObject\Url;

class ApplicationContext implements ApplicationContextInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var Url
     */
    private $url;

    /**
     * @var string
     */
    private $entityName;

    /**
     * @var Identifier
     */
    private $entityIdentifier;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl(Url $url)
    {
        $this->url = $url;
    }

    public function getEntityName()
    {
        return $this->entityName;
    }

    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
    }

    public function getEntityIdentifier()
    {
        return $this->entityIdentifier;
    }

    public function setEntityIdentifier(Identifier $identifier)
    {
        $this->entityIdentifier = $identifier;
    }

}