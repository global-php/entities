<?php

namespace GlobalPhp\Entities\ValueObject;

class MonetaryValue extends ValueObjectAbstract implements ValueObjectInterface
{

    /**
     * @var Currency
     */
    private $currency;

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     * @return static
     */
    public function withCurrency(Currency $currency)
    {
        $monetaryValue = clone $this;
        $monetaryValue->currency = $currency;
        return $monetaryValue;
    }

}
