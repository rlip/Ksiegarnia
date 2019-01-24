<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAuctionList
 *
 * @ORM\Table(name="allegro_auction_list", indexes={@ORM\Index(name="allegroal_productl_id", columns={"allegroal_productl_id"})})
 * @ORM\Entity
 */
class EntityAllegroAuctionList extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegroal_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegroalId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allegroal_is_active", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroalIsActive;

    /**
     * @var \Application\Entity\EntityProductList
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityProductList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegroal_productl_id", referencedColumnName="productl_id", nullable=true)
     * })
     */
    private $allegroalProductl;


    /**
     * Get allegroalId
     *
     * @return integer
     */
    public function getAllegroalId()
    {
        return $this->allegroalId;
    }

    /**
     * Set allegroalIsActive
     *
     * @param boolean $allegroalIsActive
     *
     * @return EntityAllegroAuctionList
     */
    public function setAllegroalIsActive($allegroalIsActive)
    {
        $this->allegroalIsActive = $allegroalIsActive;

        return $this;
    }

    /**
     * Get allegroalIsActive
     *
     * @return boolean
     */
    public function getAllegroalIsActive()
    {
        return $this->allegroalIsActive;
    }

    /**
     * Set allegroalProductl
     *
     * @param \Application\Entity\EntityProductList $allegroalProductl
     *
     * @return EntityAllegroAuctionList
     */
    public function setAllegroalProductl(\Application\Entity\EntityProductList $allegroalProductl = null)
    {
        $this->allegroalProductl = $allegroalProductl;

        return $this;
    }

    /**
     * Get allegroalProductl
     *
     * @return \Application\Entity\EntityProductList
     */
    public function getAllegroalProductl()
    {
        return $this->allegroalProductl;
    }
}

