<?php

namespace GlobalPhp\Entities\Entity\Commerce;

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
    private $children;

    /**
     * @var OrderInterface
     */
    private $order;

    /**
     * @var ProductInterface
     */
    private $product;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
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

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren(array $children)
    {
        $this->children = $children;
    }

    public function addChild(OrderItemInterface $child)
    {
        $this->children[] = $child;
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