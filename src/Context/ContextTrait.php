<?php

namespace GlobalPhp\Entities\Context;

/**
 * Context Trait
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 *
 * @property string $name   Implementations using this trait MUST implement a `private $name = 'Name';` property
 */
trait ContextTrait
{

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}