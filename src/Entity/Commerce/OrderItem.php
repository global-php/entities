<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\Commerce\OrderInterface;
use GlobalPhp\Entities\Entity\Commerce\ProductInterface;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\EntityTrait\NamedTrait;

use GlobalPhp\Entities\ValueObject\MonetaryValue;

/**
 * Order Item Entity implementation
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
class OrderItem implements OrderItemInterface
{
    use EntityTrait, NamedTrait;

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

    /**
     * @var OrderItemInterface[]
     */
    private $childItems;

    /**
     * @var OrderInterface
     */
    private $order;

    /**
     * @var ProductInterface
     */
    private $product;

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(MonetaryValue $amount)
    {
        $this->amount = $amount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(MonetaryValue $totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    public function getChildItems()
    {
        return $this->childItems;
    }

    public function setChildItems(array $childItems)
    {
        $this->childItems = $childItems;
    }

    public function addChildItem(OrderItemInterface $childItem)
    {
        $this->childItems[] = $childItem;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder(OrderInterface $order)
    {
        $this->order = $order;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;
    }

}