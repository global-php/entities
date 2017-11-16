<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\Commerce\OrderInterface;
use GlobalPhp\Entities\Entity\Commerce\ProductInterface;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\EntityTrait\NamedTrait;

use GlobalPhp\Entities\ValueObject\MonetaryValue;

class OrderItem implements OrderItemInterface
{
    use EntityTrait, NamedTrait;

    /**
     * @var OrderInterface
     */
    private $order;

    /**
     * @var ProductInterface
     */
    private $product;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var float
     */
    private $quantity;

    /**
     * @var MonetaryValue
     */
    private $amount;

    /**
     * @var MonetaryValue
     */
    private $totalAmount;

}
