<?php

namespace GlobalPhp\Entities\Context;

/**
 * Context Trait
 *
 * @author Jochem Klaver <j.klaver@youwe.nl>
 */
trait ContextTrait
{

    /**
     * @var string
     */
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}