<?php

namespace GlobalPhp\Entities\Context;

interface ContextInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName(string $name);

}