<?php

namespace GlobalPhp\Entities\Context;

/**
 * Class ContextArray
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 *
 * @method \ArrayIterator getInnerIterator()
 */
final class ContextArray extends \IteratorIterator
{

    /**
     */
    public function __construct()
    {
        parent::__construct(new \ArrayIterator([]));
    }

    /**
     * @return ContextInterface[]
     */
    public function getAll()
    {
        return $this->getInnerIterator()->getArrayCopy();
    }

    /**
     * @param ContextInterface $context
     */
    public function add(ContextInterface $context)
    {
        $this->getInnerIterator()->append($context);
    }

    /**
     * @param string $typeClassName
     * @return bool
     */
    public function hasType($typeClassName)
    {
        if ($this->count() === 0) {
            return false;
        }
        return 0 < count($this->getByType($typeClassName));
    }

    /**
     * @param string $typeClassName
     * @return ContextInterface[]
     */
    public function getByType($typeClassName)
    {
        if ($this->count() === 0) {
            return [];
        }
        return array_filter($this->getAll(), function($context) use ($typeClassName) {
            return $this->compareObjectType($context, $typeClassName);
        });
    }

    /**
     * @param string $typeClassName
     */
    public function removeByType($typeClassName)
    {
        foreach ($this as $i => $context) {
            if (!$this->compareObjectType($context, $typeClassName)) {
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

    /**
     * @return ContextInterface
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->getInnerIterator()->count();
    }

}