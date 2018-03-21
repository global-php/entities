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
    public function getSku();

    /**
     * @param string $sku
     */
    public function setSku(string $sku);

    /**
     * @return float
     */
    public function getQuantity();

    /**
     * @param float $quantity
     */
    public function setQuantity(float $quantity);

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
    public function getChildItems();

    /**
     * @param OrderItemInterface[] $childItems
     */
    public function setChildItems(array $childItems);

    /**
     * @param OrderItemInterface $childItem
     */
    public function addChildItem(OrderItemInterface $childItem);

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