<?php

namespace GlobalPhp\Entities\ValueObject;

class Identifier implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @var Url
     */
    private $url;

    /**
     * @param mixed $value    Identifier: either integer ID, string UUID/hash or types from other mechanisms
     * @param Url|null $url   RESTFUL "self" URL style or URL to entity info page1
     */
    public function __construct($value, Url $url = null)
    {
        $this->value = $value;
        $this->url = $url;
    }

    /**
     * @return Url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param Url $url
     * @return static
     */
    public function withUrl(Url $url)
    {
        $newContextObject = clone $this;
        $newContextObject->url = $url;
        return $newContextObject;
    }

}