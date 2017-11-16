<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\Entity\OrganizationInterface;

use GlobalPhp\Entities\ValueObject\MonetaryValue;

class Shipment implements ShipmentInterface
{
    use EntityTrait;

    /**
     * @var AddressInterface
     */
    private $originAddress;

    /**
     * @var AddressInterface
     */
    private $destinationAddress;

    /**
     * @var OrganizationInterface
     */
    private $handler;

    /**
     * @var MonetaryValue
     */
    private $handlerFee;

    /**
     * @var TrackingInfoInterface
     */
    private $trackingInfo;

    /**
     * @var ShipmentItemInterface[]
     */
    private $items;

}