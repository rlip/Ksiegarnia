<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityProductAvailable
 *
 * @ORM\Table(name="product_available_price", uniqueConstraints={@ORM\UniqueConstraint(name="productap_productl_id_productap_supplier_id", columns={"productap_productl_id", "productap_supplier_id"})}, indexes={@ORM\Index(name="fk_product_supplier_available_product1_idx", columns={"productap_productl_id"}), @ORM\Index(name="fk_product_supplier_available_supplier1_idx", columns={"productap_supplier_id"})})
 * @ORM\Entity
 */
class EntityProductAvailablePrice extends EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productap_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productapId;

    /**
     * @var integer
     *
     * @ORM\Column(name="productap_in_stock", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productapInStock = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="productap_price", type="decimal", precision=6, scale=2, nullable=false, unique=false)
     */
    private $productapPrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productap_recently_changed", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productapRecentlyChanged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="productap_available_last_update", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productapAvailableLastUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="productap_price_last_update", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productapPriceLastUpdate;

    /**
     * @var EntityProductList
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityProductList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productap_productl_id", referencedColumnName="productl_id", nullable=true, onDelete="CASCADE")
     * })
     */
    private $productapProductl;

    /**
     * @var EntitySupplier
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntitySupplier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productap_supplier_id", referencedColumnName="supplier_id", nullable=true)
     * })
     */
    private $productapSupplier;


    /**
     * Get productapId
     *
     * @return integer 
     */
    public function getProductapId()
    {
        return $this->productapId;
    }

    /**
     * Set productapInStock
     *
     * @param integer $productapInStock
     * @return EntityProductAvailablePrice
     */
    public function setProductapInStock($productapInStock)
    {
        $this->productapInStock = $productapInStock;

        return $this;
    }

    /**
     * Get productapInStock
     *
     * @return integer 
     */
    public function getProductapInStock()
    {
        return $this->productapInStock;
    }

    /**
     * Set productapRecentlyChanged
     *
     * @param boolean $productapRecentlyChanged
     * @return EntityProductAvailablePrice
     */
    public function setProductapRecentlyChanged($productapRecentlyChanged)
    {
        $this->productapRecentlyChanged = $productapRecentlyChanged;

        return $this;
    }

    /**
     * Get productapRecentlyChanged
     *
     * @return boolean 
     */
    public function getProductapRecentlyChanged()
    {
        return $this->productapRecentlyChanged;
    }


    /**
     * Set productapProductl
     *
     * @param EntityProductList $productapProductl
     * @return EntityProductAvailablePrice
     */
    public function setProductapProductl(EntityProductList $productapProductl = null)
    {
        $this->productapProductl = $productapProductl;

        return $this;
    }

    /**
     * Get productapProductl
     *
     * @return EntityProductList
     */
    public function getProductapProductl()
    {
        return $this->productapProductl;
    }

    /**
     * Set productapSupplier
     *
     * @param EntitySupplier $productapSupplier
     * @return EntityProductAvailablePrice
     */
    public function setProductapSupplier(EntitySupplier $productapSupplier = null)
    {
        $this->productapSupplier = $productapSupplier;

        return $this;
    }

    /**
     * Get productapSupplier
     *
     * @return EntitySupplier
     */
    public function getProductapSupplier()
    {
        return $this->productapSupplier;
    }

    /**
     * @return string
     */
    public function getProductapPrice()
    {
        return $this->productapPrice;
    }

    /**
     * @param string $productapPrice
     */
    public function setProductapPrice($productapPrice)
    {
        $this->productapPrice = $productapPrice;
    }

    /**
     * @return \DateTime
     */
    public function getProductapAvailableLastUpdate()
    {
        return $this->productapAvailableLastUpdate;
    }

    /**
     * @param \DateTime $productapAvailableLastUpdate
     */
    public function setProductapAvailableLastUpdate($productapAvailableLastUpdate)
    {
        $this->productapAvailableLastUpdate = $productapAvailableLastUpdate;
    }

    /**
     * @return \DateTime
     */
    public function getProductapPriceLastUpdate()
    {
        return $this->productapPriceLastUpdate;
    }

    /**
     * @param \DateTime $productapPriceLastUpdate
     */
    public function setProductapPriceLastUpdate($productapPriceLastUpdate)
    {
        $this->productapPriceLastUpdate = $productapPriceLastUpdate;
    }
}
