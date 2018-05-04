<?php

namespace GlobalPhp\Entities\Context;

/**
 * Class ContextArray
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 *
 * @method \ArrayIterator getInnerIterator()
 */
final class ContextArray extends \IteratorIterator implements \Countable
{

    /**
     */
    public function __construct()
    {
        parent::__construct(new \ArrayIterator([]));
    }

    /**
     * @return ContextInterface
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @see \Countable::count()
     * @return int
     */
    public function count()
    {
        return $this->getInnerIterator()->count();
    }

    /**
     * @param ContextInterface $context
     */
    public function add(ContextInterface $context)
    {
        $this->getInnerIterator()->append($context);
    }

    /**
     * @return ContextInterface[]
     */
    private function getAllAsArray()
    {
        return $this->getInnerIterator()->getArrayCopy();
    }

    /**
     * @param ContextInterface[] $contexts
     */
    private function addAllFromArray(array $contexts)
    {
        foreach ($contexts as $context) {
            $this->getInnerIterator()->append($context);
        }
    }

    /* -------- Type (Object class or interface) -------- */

    /**
     * @param string $typeClassName
     * @return bool
     */
    public function hasType($typeClassName)
    {
        if (count($this) === 0) {
            return false;
        }
        return 0 < count($this->getByType($typeClassName));
    }

    /**
     * @param string $typeClassName
     * @return ContextArray<int, \GlobalPhp\Entities\Context\ContextInterface>
     */
    public function getByType($typeClassName)
    {
        $contextsByType = new static();
        if (count($this) === 0) {
            return $contextsByType;
        }

        $contextsByType->addAllFromArray(array_filter($this->getAllAsArray(), function($context) use ($typeClassName) {
            return $this->compareObjectType($context, $typeClassName);
        }));
        return $contextsByType;
    }

    /**
     * @param string $typeClassName
     */
    public function removeByType($typeClassName)
    {
        foreach ($this as $i => $context) {
            if ($this->compareObjectType($context, $typeClassName)) {
                $this->getInnerIterator()->offsetUnset($i);
            }
        }
    }

    /**
     * @param ContextInterface $object
     * @param string $typeClassName
     * @return bool
     */
    private function compareObjectType(ContextInterface $object, $typeClassName)
    {
        return is_a($object, $typeClassName) || is_subclass_of($object, $typeClassName);
    }

    /* -------- Relation Type (one of ContextInterface::RELATION_TYPE_DIRECT
                or ContextInterface::RELATION_TYPE_REFERENCE)                -------- */

    /**
     * @param string $relationType
     * @return bool
     */
    public function hasRelationType($relationType)
    {
        if (count($this) === 0) {
            return false;
        }
        return 0 < count($this->getByRelationType($relationType));
    }

    /**
     * @param string $relationType
     * @return ContextArray<int, \GlobalPhp\Entities\Context\ContextInterface>
     */
    public function getByRelationType($relationType)
    {
        $contextsByRelationType = new static();
        if (count($this) === 0) {
            return $contextsByRelationType;
        }

        $contextsByRelationType->addAllFromArray(array_filter($this->getAllAsArray(), function($context) use ($relationType) {
            return $this->compareRelationType($context, $relationType);
        }));
        return $contextsByRelationType;
    }

    /**
     * @param string $relationType
     */
    public function removeByRelationType($relationType)
    {
        foreach ($this as $i => $context) {
            if ($this->compareRelationType($context, $relationType)) {
                $this->getInnerIterator()->offsetUnset($i);
            }
        }
    }

    /**
     * @param ContextInterface $context
     * @param string $relationType
     * @return bool
     */
    private function compareRelationType(ContextInterface $context, $relationType)
    {
        return $context->getRelationType() === $relationType;
    }

}