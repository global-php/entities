<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\EntityTrait\PartyTrait;

class Customer implements CustomerInterface
{
    use EntityTrait, PartyTrait;

}