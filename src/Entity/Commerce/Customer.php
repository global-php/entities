<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\EntityTrait\PartyTrait;

/**
 * Customer Entity implementation
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
class Customer implements CustomerInterface
{
    use EntityTrait, PartyTrait;

}