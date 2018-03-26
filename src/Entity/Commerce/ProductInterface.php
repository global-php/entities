<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityInterface;

use GlobalPhp\Entities\ValueObject\MonetaryValue;

interface ProductInterface extends EntityInterface
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
    public function getStockQuantity();

    /**
     * @param float $quantity
     */
    public function setStockQuantity($quantity);

    /**
     * @return MonetaryValue
     */
    public function getPrice();

    /**
     * @param MonetaryValue $price
     */
    public function setPrice(MonetaryValue $price);

    /**
     * @return ProductInterface[]
     */
    public function getChildren();

    /**
     * @param ProductInterface[] $children
     */
    public function setChildren(array $children);

    /**
     * @param ProductInterface $child
     */
    public function addChild(ProductInterface $child);

}