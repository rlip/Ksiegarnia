<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityProductList
 *
 * @ORM\Table(name="product_list", indexes={@ORM\Index(name="productl_bar_code", columns={"productl_bar_code"}), @ORM\Index(name="productl_index_lnl", columns={"productl_index_lnl"}), @ORM\Index(name="productl_index_azymut", columns={"productl_index_azymut"}), @ORM\Index(name="productl_publisher_id", columns={"productl_publisher_id"}), @ORM\Index(name="productl_isbn", columns={"productl_isbn"}), @ORM\Index(name="productl_categorya_id", columns={"productl_categorya_id"}), @ORM\Index(name="productl_categoryr_id", columns={"productl_categoryr_id"})})
 * @ORM\Entity
 */
class EntityProductList extends EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productl_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productlId;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_isbn", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlIsbn;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_index_azymut", type="string", length=15, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlIndexAzymut;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_index_lnl", type="string", length=7, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlIndexLnl;

    /**
     * @var integer
     *
     * @ORM\Column(name="productl_bar_code", type="bigint", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productlBarCode;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_publication_place", type="string", length=40, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlPublicationPlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="productl_publication_year", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlPublicationYear;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_language", type="string", length=150, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_author", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_price_supplier", type="decimal", precision=6, scale=2, nullable=true, unique=false)
     */
    private $productlPriceSupplier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productl_binding_type", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlBindingType;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_title", type="string", length=200, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlTitle;


    /**
     * @var string
     *
     * @ORM\Column(name="productl_description", type="text", length=65535, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="productl_length", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $productlLength;

    /**
     * @var float
     *
     * @ORM\Column(name="productl_width", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $productlWidth;

    /**
     * @var float
     *
     * @ORM\Column(name="productl_height", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $productlHeight;

    /**
     * @var float
     *
     * @ORM\Column(name="productl_weight", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $productlWeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="productl_pages", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlPages;

    /**
     * @var string
     *
     * @ORM\Column(name="productl_remote_image", type="string", length=50, precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlRemoteImage;


    /**
     * @var string
     *
     * @ORM\Column(name="productl_local_image_width", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlLocalImageWidth;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productl_to_allegro", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $productlToAllegro;

    /**
     * @var EntityCategoryRemote
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryRemote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productl_categoryr_id", referencedColumnName="categoryr_id", nullable=true)
     * })
     */
    private $productlCategoryr;

    /**
     * @var EntityPublisher
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityPublisher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productl_publisher_id", referencedColumnName="publisher_id", nullable=true)
     * })
     */
    private $productlPublisher;

    /**
     * @var EntityCategoryAllegro
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryAllegro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productl_categorya_id", referencedColumnName="categorya_id", nullable=true)
     * })
     */
    private $productlCategorya;

    /**
     * @ORM\OneToMany(targetEntity="EntityProductAvailablePrice", mappedBy="productapProductl")
     **/
    private $productlAvailablePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productl_active", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productlActive = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productl_is_duplicate", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productlIsDuplicate = false;
    

    /**
     * @var integer
     *
     * @ORM\Column(name="productl_in_stock", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productlInStock = 0;

    /**
     * @var EntityProductAvailablePrice
     *
     * @ORM\OneToOne(targetEntity="EntityProductAvailablePrice")
     * @ORM\JoinColumn(name="productl_best_productap_id", referencedColumnName="productap_id")
     **/
    private $productlBestProductAvailablePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productl_best_productap_changed", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $productlBestProductAvailablePriceChanged = 1;

    /**
     * Get productlId
     *
     * @return integer
     */
    public function getProductlId()
    {
        return $this->productlId;
    }

    /**
     * Set productlIsbn
     *
     * @param string $productlIsbn
     * @return EntityProductList
     */
    public function setProductlIsbn($productlIsbn)
    {
        $this->productlIsbn = $productlIsbn;

        return $this;
    }

    /**
     * Get productlIsbn
     *
     * @return string
     */
    public function getProductlIsbn()
    {
        return $this->productlIsbn;
    }

    /**
     * Set productlIndexAzymut
     *
     * @param string $productlIndexAzymut
     * @return EntityProductList
     */
    public function setProductlIndexAzymut($productlIndexAzymut)
    {
        $this->productlIndexAzymut = $productlIndexAzymut;

        return $this;
    }

    /**
     * Get productlIndexAzymut
     *
     * @return string
     */
    public function getProductlIndexAzymut()
    {
        return $this->productlIndexAzymut;
    }

    /**
     * Set productlIndexLnl
     *
     * @param string $productlIndexLnl
     * @return EntityProductList
     */
    public function setProductlIndexLnl($productlIndexLnl)
    {
        $this->productlIndexLnl = $productlIndexLnl;

        return $this;
    }

    /**
     * Get productlIndexLnl
     *
     * @return string
     */
    public function getProductlIndexLnl()
    {
        return $this->productlIndexLnl;
    }

    /**
     * Set productlBarCode
     *
     * @param integer $productlBarCode
     * @return EntityProductList
     */
    public function setProductlBarCode($productlBarCode)
    {
        $this->productlBarCode = $productlBarCode;

        return $this;
    }

    /**
     * Get productlBarCode
     *
     * @return integer
     */
    public function getProductlBarCode()
    {
        return $this->productlBarCode;
    }

    /**
     * Set productlPublicationPlace
     *
     * @param string $productlPublicationPlace
     * @return EntityProductList
     */
    public function setProductlPublicationPlace($productlPublicationPlace)
    {
        $this->productlPublicationPlace = $productlPublicationPlace;

        return $this;
    }

    /**
     * Get productlPublicationPlace
     *
     * @return string
     */
    public function getProductlPublicationPlace()
    {
        return $this->productlPublicationPlace;
    }

    /**
     * Set productlPublicationYear
     *
     * @param integer $productlPublicationYear
     * @return EntityProductList
     */
    public function setProductlPublicationYear($productlPublicationYear)
    {
        $this->productlPublicationYear = $productlPublicationYear;

        return $this;
    }

    /**
     * Get productlPublicationYear
     *
     * @return integer
     */
    public function getProductlPublicationYear()
    {
        return $this->productlPublicationYear;
    }

    /**
     * Set productlLanguage
     *
     * @param string $productlLanguage
     * @return EntityProductList
     */
    public function setProductlLanguage($productlLanguage)
    {
        $this->productlLanguage = $productlLanguage;

        return $this;
    }

    /**
     * Get productlLanguage
     *
     * @return string
     */
    public function getProductlLanguage()
    {
        return $this->productlLanguage;
    }

    /**
     * Set productlAuthor
     *
     * @param string $productlAuthor
     * @return EntityProductList
     */
    public function setProductlAuthor($productlAuthor)
    {
        $this->productlAuthor = $productlAuthor;

        return $this;
    }

    /**
     * Get productlAuthor
     *
     * @return string
     */
    public function getProductlAuthor()
    {
        return $this->productlAuthor;
    }

    /**
     * Set productlPriceSupplier
     *
     * @param string $productlPriceSupplier
     * @return EntityProductList
     */
    public function setProductlPriceSupplier($productlPriceSupplier)
    {
        $this->productlPriceSupplier = $productlPriceSupplier;

        return $this;
    }

    /**
     * Get productlPriceSupplier
     *
     * @return string
     */
    public function getProductlPriceSupplier()
    {
        return $this->productlPriceSupplier;
    }

    /**
     * Set productlBindingType
     *
     * @param boolean $productlBindingType
     * @return EntityProductList
     */
    public function setProductlBindingType($productlBindingType)
    {
        $this->productlBindingType = $productlBindingType;

        return $this;
    }

    /**
     * Get productlBindingType
     *
     * @return boolean
     */
    public function getProductlBindingType()
    {
        return $this->productlBindingType;
    }

    /**
     * Set productlTitle
     *
     * @param string $productlTitle
     * @return EntityProductList
     */
    public function setProductlTitle($productlTitle)
    {
        $this->productlTitle = $productlTitle;

        return $this;
    }

    /**
     * Get productlTitle
     *
     * @return string
     */
    public function getProductlTitle()
    {
        return $this->productlTitle;
    }

    /**
     * Set productlDescription
     *
     * @param string $productlDescription
     * @return EntityProductList
     */
    public function setProductlDescription($productlDescription)
    {
        $this->productlDescription = $productlDescription;

        return $this;
    }

    /**
     * Get productlDescription
     *
     * @return string
     */
    public function getProductlDescription()
    {
        return $this->productlDescription;
    }

    /**
     * Set productlLength
     *
     * @param float $productlLength
     * @return EntityProductList
     */
    public function setProductlLength($productlLength)
    {
        $this->productlLength = $productlLength;

        return $this;
    }

    /**
     * Get productlLength
     *
     * @return float
     */
    public function getProductlLength()
    {
        return $this->productlLength;
    }

    /**
     * Set productlWidth
     *
     * @param float $productlWidth
     * @return EntityProductList
     */
    public function setProductlWidth($productlWidth)
    {
        $this->productlWidth = $productlWidth;

        return $this;
    }

    /**
     * Get productlWidth
     *
     * @return float
     */
    public function getProductlWidth()
    {
        return $this->productlWidth;
    }

    /**
     * Set productlHeight
     *
     * @param float $productlHeight
     * @return EntityProductList
     */
    public function setProductlHeight($productlHeight)
    {
        $this->productlHeight = $productlHeight;

        return $this;
    }

    /**
     * Get productlHeight
     *
     * @return float
     */
    public function getProductlHeight()
    {
        return $this->productlHeight;
    }

    /**
     * Set productlWeight
     *
     * @param float $productlWeight
     * @return EntityProductList
     */
    public function setProductlWeight($productlWeight)
    {
        $this->productlWeight = $productlWeight;

        return $this;
    }

    /**
     * Get productlWeight
     *
     * @return float
     */
    public function getProductlWeight()
    {
        return $this->productlWeight;
    }

    /**
     * Set productlPages
     *
     * @param integer $productlPages
     * @return EntityProductList
     */
    public function setProductlPages($productlPages)
    {
        $this->productlPages = $productlPages;

        return $this;
    }

    /**
     * Get productlPages
     *
     * @return integer
     */
    public function getProductlPages()
    {
        return $this->productlPages;
    }

    /**
     * Set productlRemoteImage
     *
     * @param string $productlRemoteImage
     * @return EntityProductList
     */
    public function setProductlRemoteImage($productlRemoteImage)
    {
        $this->productlRemoteImage = $productlRemoteImage;

        return $this;
    }

    /**
     * Get productlRemoteImage
     *
     * @return string
     */
    public function getProductlRemoteImage()
    {
        return $this->productlRemoteImage;
    }

    /**
     * Set productlToAllegro
     *
     * @param boolean $productlToAllegro
     * @return EntityProductList
     */
    public function setProductlToAllegro($productlToAllegro)
    {
        $this->productlToAllegro = $productlToAllegro;

        return $this;
    }

    /**
     * Get productlToAllegro
     *
     * @return boolean
     */
    public function getProductlToAllegro()
    {
        return $this->productlToAllegro;
    }

    /**
     * Set productlCategoryr
     *
     * @param EntityCategoryRemote $productlCategoryr
     * @return EntityProductList
     */
    public function setProductlCategoryr(EntityCategoryRemote $productlCategoryr = null)
    {
        $this->productlCategoryr = $productlCategoryr;

        return $this;
    }

    /**
     * Get productlCategoryr
     *
     * @return EntityCategoryRemote
     */
    public function getProductlCategoryr()
    {
        return $this->productlCategoryr;
    }

    /**
     * Set productlPublisher
     *
     * @param EntityPublisher $productlPublisher
     * @return EntityProductList
     */
    public function setProductlPublisher(EntityPublisher $productlPublisher = null)
    {
        $this->productlPublisher = $productlPublisher;

        return $this;
    }

    /**
     * Get productlPublisher
     *
     * @return EntityPublisher
     */
    public function getProductlPublisher()
    {
        return $this->productlPublisher;
    }

    /**
     * Set productlCategorya
     *
     * @param EntityCategoryAllegro $productlCategorya
     * @return EntityProductList
     */
    public function setProductlCategorya(EntityCategoryAllegro $productlCategorya = null)
    {
        $this->productlCategorya = $productlCategorya;

        return $this;
    }

    /**
     * Set productlActive
     *
     * @param boolean $productlActive
     *
     * @return EntityProductList
     */
    public function setProductlActive($productlActive)
    {
        $this->productlActive = $productlActive;

        return $this;
    }

    /**
     * Get productlActive
     *
     * @return boolean
     */
    public function getProductlActive()
    {
        return $this->productlActive;
    }

    /**
     * Set productlIsDuplicate
     *
     * @param boolean $productlIsDuplicate
     *
     * @return EntityProductList
     */
    public function setProductlIsDuplicate($productlIsDuplicate)
    {
        $this->productlIsDuplicate = $productlIsDuplicate;

        return $this;
    }

    /**
     * Get productlIsDuplicate
     *
     * @return boolean
     */
    public function getProductlIsDuplicate()
    {
        return $this->productlIsDuplicate;
    }

    /**
     * Set productlActive
     *
     * @param boolean $productlInStock
     *
     * @return EntityProductList
     */
    public function setProductlInStock($productlInStock)
    {
        $this->productlInStock = $productlInStock;

        return $this;
    }

    /**
     * Get productlActive
     *
     * @return boolean
     */
    public function getProductlInStock()
    {
        return $this->productlInStock;
    }

    /**
     * Get productlCategorya
     *
     * @return EntityCategoryAllegro
     */
    public function getProductlCategorya()
    {
        return $this->productlCategorya;
    }

    /**

    /**
     * @param EntitySupplier $oSupplier
     * @return EntityProductAvailablePrice
     */
    public function getProductlAvailablePricePerSupplier(EntitySupplier $oSupplier){
        $oProductAvailableCollection = $this->getProductlAvailablePrice();
        if($oProductAvailableCollection == null){
            return null;
        }
        /** @var EntityProductAvailablePrice $oProductAvailablePrice*/
        foreach($oProductAvailableCollection as $oProductAvailablePrice){
            if($oProductAvailablePrice->getProductapSupplier()->getSupplierId() == $oSupplier->getSupplierId()){
                return $oProductAvailablePrice;
            }
        }
        return null;
    }

    /**
     * @return string
     */
    public function getProductlLocalImageWidth()
    {
        return $this->productlLocalImageWidth;
    }

    /**
     * @param string $productlLocalImageWidth
     */
    public function setProductlLocalImageWidth($productlLocalImageWidth)
    {
        $this->productlLocalImageWidth = $productlLocalImageWidth;
    }

    /**
     * @return mixed
     */
    public function getProductlAvailablePrice()
    {
        return $this->productlAvailablePrice;
    }

    /**
     * @param mixed $productlAvailablePrice
     */
    public function setProductlAvailablePrice($productlAvailablePrice)
    {
        $this->productlAvailablePrice = $productlAvailablePrice;
    }

    /**
     * @return mixed
     */
    public function getProductlBestProductAvailablePrice()
    {
        return $this->productlBestProductAvailablePrice;
    }

    /**
     * @param mixed $productlBestProductAvailablePrice
     */
    public function setProductlBestProductAvailablePrice($productlBestProductAvailablePrice)
    {
        $this->productlBestProductAvailablePrice = $productlBestProductAvailablePrice;
    }

    /**
     * @return boolean
     */
    public function getProductlBestProductAvailablePriceChanged()
    {
        return $this->productlBestProductAvailablePriceChanged;
    }

    /**
     * @param boolean $productlBestProductAvailablePriceChanged
     */
    public function setProductlBestProductAvailablePriceChanged($productlBestProductAvailablePriceChanged)
    {
        $this->productlBestProductAvailablePriceChanged = $productlBestProductAvailablePriceChanged;
    }

}
