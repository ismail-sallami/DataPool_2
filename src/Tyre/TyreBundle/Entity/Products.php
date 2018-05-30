<?php

namespace Tyre\TyreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 */
class Products
{
    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $additional;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $availability;

    /**
     * @var string
     */
    private $productImage;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return Products
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set additional
     *
     * @param string $additional
     * @return Products
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;

        return $this;
    }

    /**
     * Get additional
     *
     * @return string 
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set availability
     *
     * @param integer $availability
     * @return Products
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return integer 
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set productImage
     *
     * @param string $productImage
     * @return Products
     */
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;

        return $this;
    }

    /**
     * Get productImage
     *
     * @return string 
     */
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
