<?php

namespace GlobalPhp\Entities\ValueObject;

class EmailAddress implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @todo Use parse_url('mailto://'.$value) and implement getters and setters (with...) for all RELEVANT parts
     */

}
