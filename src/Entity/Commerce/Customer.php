<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\EntityTrait\PartyTrait;
use GlobalPhp\Entities\ValueObject\Url;

/**
 * Customer Entity implementation
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
class Customer implements CustomerInterface
{
    use EntityTrait, PartyTrait;

    /**
     * @var Url
     */
    private $photoUrl;

    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(Url $photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }

}