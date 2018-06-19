<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityInterface;
use GlobalPhp\Entities\Entity\OrganizationInterface;

use GlobalPhp\Entities\ValueObject\Dimensions;
use GlobalPhp\Entities\ValueObject\MonetaryValue;
use GlobalPhp\Entities\ValueObject\Weight;

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
    public function getDescription();

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * Get Stock Keeping Unit (SKU) code
     *
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     */
    public function setSku($sku);

    /**
     * Get Global Trade Item Number (GTIN), for example EAN code
     *
     * @return string
     */
    public function getGtin();

    /**
     * @param string $gtin
     */
    public function setGtin($gtin);

    /**
     * @return MonetaryValue
     */
    public function getPrice();

    /**
     * @param MonetaryValue $price
     */
    public function setPrice(MonetaryValue $price);

    /**
     * @return Weight
     */
    public function getWeight();

    /**
     * @param Weight $weight
     */
    public function setWeight(Weight $weight);

    /**
     * @return Dimensions
     */
    public function getDimensions();

    /**
     * @param Dimensions $dimensions
     */
    public function setDimensions(Dimensions $dimensions);

    /**
     * @return OrganizationInterface
     */
    public function getBrand();

    /**
     * @param OrganizationInterface $brand
     */
    public function setBrand(OrganizationInterface $brand);

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

    /**
     * @return ProductInterface[]
     */
    public function getRelatedProducts();

    /**
     * @param ProductInterface[] $relatedProducts
     */
    public function setRelatedProducts(array $relatedProducts);

    /**
     * @param ProductInterface $relatedProduct
     */
    public function addRelatedProduct(ProductInterface $relatedProduct);

    /**
     * @return StockInterface[]
     */
    public function getStocks();

    /**
     * @param StockInterface[] $stocks
     */
    public function setStocks(array $stocks);

    /**
     * @param StockInterface $stock
     */
    public function addStock(/*StockInterface*/ $stock);

    /**
     * @return CategoryInterface[]
     */
    public function getCategories();

    /**
     * @param CategoryInterface[] $categories
     */
    public function setCategories(array $categories);

    /**
     * @param CategoryInterface $category
     */
    public function addCategory(/*CategoryInterface*/ $category);

}