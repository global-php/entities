<?php

namespace GlobalPhp\Entities\Flag;

/**
 * Class FlagArray
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 *
 * @method \ArrayIterator getInnerIterator()
 */
final class FlagArray extends \IteratorIterator
{

    /**
     */
    public function __construct()
    {
        parent::__construct(new \ArrayIterator([]));
    }

    /**
     * @return FlagInterface[]
     */
    public function getAll()
    {
        return $this->getInnerIterator()->getArrayCopy();
    }

    /**
     * @param FlagInterface $flag
     */
    public function add(FlagInterface $flag)
    {
        if ($this->hasType(get_class($flag))) {
            throw new \InvalidArgumentException('Flag \\' . get_class($flag) . ' is already present');
        }
        $this->getInnerIterator()->append($flag);
    }

    /**
     * @param string $typeClassName
     * @param int $value
     */
    public function set($typeClassName, $value)
    {
        /** @var FlagInterface $flag */
        if (!$this->hasType($typeClassName)) {
            $this->add(new $typeClassName($value));
        } else {
            $flag = $this->getByType($typeClassName);
            $flag->setValue($value);
        }
    }

    /**
     * @param string $typeClassName
     * @return int|null
     */
    public function get($typeClassName)
    {
        $flag = $this->getByType($typeClassName);
        return (null !== $flag ? $flag->getValue() : null);
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
        return null != $this->getByType($typeClassName);
    }

    /**
     * @param string $typeClassName
     * @return FlagInterface|null
     */
    public function getByType($typeClassName)
    {
        if ($this->count() === 0) {
            return null;
        }
        $flagsByType = array_filter($this->getAll(), function($flag) use ($typeClassName) {
            return $this->compareObjectType($flag, $typeClassName);
        });
        return array_shift($flagsByType);
    }

    /**
     * @param string $typeClassName
     */
    public function removeByType($typeClassName)
    {
        foreach ($this as $i => $flag) {
            if (!$this->compareObjectType($flag, $typeClassName)) {
                $this->getInnerIterator()->offsetUnset($i);
            }
        }
    }

    /**
     * @param FlagInterface $object
     * @param string $typeClassName
     * @return bool
     */
    private function compareObjectType(FlagInterface $object, $typeClassName)
    {
        return get_class($object) === ltrim($typeClassName, '\\')
            || is_subclass_of($object, $typeClassName);
    }

    /**
     * @return FlagInterface
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