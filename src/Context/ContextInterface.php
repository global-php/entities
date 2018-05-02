<?php

namespace GlobalPhp\Entities\Context;

use GlobalPhp\Entities\ValueObject\Identifier;

interface ContextInterface
{

    /**
     * Relation type constant for directly related records (1:1 unique relation) defining the context
     */
    const RELATION_TYPE_DIRECT = 'direct';

    /**
     * Relation type constant for referencing records (n:1 relation) describing the context
     */
    const RELATION_TYPE_REFERENCE = 'reference';

    /**
     * @param string $relationType
     * @param string $entityName
     * @param Identifier $entityIdentifier
     */
    public function __construct($relationType, $entityName, Identifier $entityIdentifier);

    /**
     * The name of the context (organisation, software application, virtual data storage, physical storage, ...)
     *
     * @return string
     */
    public function getContextName();

    /**
     * Type of relation the entity has with this context. Should be one of ContextInterface::RELATION_TYPE_DIRECT
     * or ContextInterface::RELATION_TYPE_REFERENCE
     *
     * @return string
     */
    public function getRelationType();

    /**
     * @param string $relationType
     * @return static
     */
    public function withRelationType($relationType);

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

}