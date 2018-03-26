<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityInterface;

use GlobalPhp\Entities\ValueObject\MonetaryValue;

/**
 * Order Item Entity interface
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
interface OrderItemInterface extends EntityInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     */
    public function setSku($sku);

    /**
     * @return float
     */
    public function getQuantity();

    /**
     * @param float $quantity
     */
    public function setQuantity($quantity);

    /**
     * @return MonetaryValue
     */
    public function getAmount();

    /**
     * @param MonetaryValue $amount
     */
    public function setAmount(MonetaryValue $amount);

    /**
     * @return MonetaryValue
     */
    public function getTotalAmount();

    /**
     * @param MonetaryValue $totalAmount
     */
    public function setTotalAmount(MonetaryValue $totalAmount);

    /**
     * @return OrderItemInterface[]
     */
    public function getChildren();

    /**
     * @param OrderItemInterface[] $children
     */
    public function setChildren(array $children);

    /**
     * @param OrderItemInterface $child
     */
    public function addChild(OrderItemInterface $child);

    /**
     * @return OrderInterface
     */
    public function getOrder();

    /**
     * @param OrderInterface $order
     */
    public function setOrder(OrderInterface $order);

    /**
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     */
    public function setProduct(ProductInterface $product);

}