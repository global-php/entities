<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\OrganizationInterface;

use GlobalPhp\Entities\ValueObject\Dimensions;
use GlobalPhp\Entities\ValueObject\MonetaryValue;
use GlobalPhp\Entities\ValueObject\Weight;

class Product implements ProductInterface
{
    use EntityTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $gtin;

    /**
     * @var MonetaryValue
     */
    private $price;

    /**
     * @var Weight
     */
    private $weight;

    /**
     * @var Dimensions
     */
    private $dimensions;

    /**
     * @var OrganizationInterface
     */
    private $brand;

    /**
     * @var ProductInterface[]
     */
    private $children;

    /**
     * @var ProductInterface[]
     */
    private $relatedProducts;

    /**
     * @var StockInterface[]
     */
    private $stocks;

    /**
     * @var CategoryInterface[]
     */
    private $categories;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getGtin()
    {
        return $this->gtin;
    }

    public function setGtin($gtin)
    {
        $this->gtin = $gtin;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(MonetaryValue $price)
    {
        $this->price = $price;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight(Weight $weight)
    {
        $this->weight = $weight;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function setDimensions(Dimensions $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand(OrganizationInterface $brand)
    {
        $this->brand = $brand;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren(array $children)
    {
        $this->children = $children;
    }

    public function addChild(ProductInterface $child)
    {
        $this->children[] = $child;
    }

    public function getRelatedProducts()
    {
        return $this->relatedProducts;
    }

    public function setRelatedProducts(array $relatedProducts)
    {
        $this->relatedProducts = $relatedProducts;
    }

    public function addRelatedProduct(ProductInterface $relatedProduct)
    {
        $this->relatedProducts[] = $relatedProduct;
    }

    public function getStocks()
    {
        return $this->stocks;
    }

    public function setStocks(array $stocks)
    {
        $this->stocks = $stocks;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function addStock(/*StockInterface*/ $stock) {
        $this->stocks[] = $stock;
    }

    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }

    public function addCategory(/*CategoryInterface*/ $category) {
        $this->categories[] = $category;
    }

}