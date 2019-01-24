<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAuctionToCreate
 *
 * @ORM\Table(name="allegro_auction_to_create", indexes={@ORM\Index(name="allegroatc_allegroas_id", columns={"allegroatc_allegroas_id"}), @ORM\Index(name="allegroatc_productl_id", columns={"allegroatc_productl_id"})})
 * @ORM\Entity
 */
class EntityAllegroAuctionToCreate extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegroatc_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegroatcId;

    /**
     * @var \Application\Entity\EntityAllegroAuctionScenario
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityAllegroAuctionScenario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegroatc_allegroas_id", referencedColumnName="allegroas_id", nullable=true)
     * })
     */
    private $allegroatcAllegroas;

    /**
     * @var \Application\Entity\EntityProductList
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityProductList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegroatc_productl_id", referencedColumnName="productl_id", nullable=true)
     * })
     */
    private $allegroatcProductl;


    /**
     * Get allegroatcId
     *
     * @return integer
     */
    public function getAllegroatcId()
    {
        return $this->allegroatcId;
    }

    /**
     * Set allegroatcAllegroas
     *
     * @param \Application\Entity\EntityAllegroAuctionScenario $allegroatcAllegroas
     *
     * @return EntityAllegroAuctionToCreate
     */
    public function setAllegroatcAllegroas(\Application\Entity\EntityAllegroAuctionScenario $allegroatcAllegroas = null)
    {
        $this->allegroatcAllegroas = $allegroatcAllegroas;

        return $this;
    }

    /**
     * Get allegroatcAllegroas
     *
     * @return \Application\Entity\EntityAllegroAuctionScenario
     */
    public function getAllegroatcAllegroas()
    {
        return $this->allegroatcAllegroas;
    }

    /**
     * Set allegroatcProductl
     *
     * @param \Application\Entity\EntityProductList $allegroatcProductl
     *
     * @return EntityAllegroAuctionToCreate
     */
    public function setAllegroatcProductl(\Application\Entity\EntityProductList $allegroatcProductl = null)
    {
        $this->allegroatcProductl = $allegroatcProductl;

        return $this;
    }

    /**
     * Get allegroatcProductl
     *
     * @return \Application\Entity\EntityProductList
     */
    public function getAllegroatcProductl()
    {
        return $this->allegroatcProductl;
    }
}

