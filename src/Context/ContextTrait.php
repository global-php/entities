<?php

namespace GlobalPhp\Entities\Context;

use GlobalPhp\Entities\ValueObject\Identifier;

/**
 * Context Trait
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 *
 * @property string $contextName   Implementations using this trait MUST implement a `private $contextName = 'Name';` property
 */
trait ContextTrait
{

    /**
     * @var string
     */
    private $relationType;

    /**
     * @var string
     */
    private $entityName;

    /**
     * @var Identifier
     */
    private $entityIdentifier;

    /**
     * @param string $relationType
     * @param string $entityName
     * @param Identifier $entityIdentifier
     */
    public function __construct($relationType, $entityName, Identifier $entityIdentifier)
    {
        $this->entityName = $entityName;
        $this->entityIdentifier = $entityIdentifier;
    }

    /**
     * @return string
     */
    public function getContextName()
    {
        return $this->contextName;
    }

    /**
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * @param string $relationType
     * @return static
     */
    public function withRelationType($relationType)
    {
        $newContextObject = clone $this;
        $newContextObject->relationType = $relationType;
        return $newContextObject;
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

}