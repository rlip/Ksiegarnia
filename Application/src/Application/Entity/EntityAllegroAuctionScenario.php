<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAuctionScenario
 *
 * @ORM\Table(name="allegro_auction_scenario")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryAllegroAuctionScenario"))
 */
class EntityAllegroAuctionScenario extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegroas_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegroasId;

    /**
     * @var string
     *
     * @ORM\Column(name="allegroas_name", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroasName;

    /**
     * @var string
     *
     * @ORM\Column(name="allegroas_code", type="string", length=10, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroasCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allegroas_is_active", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroasIsActive;


    /**
     * Get allegroasId
     *
     * @return integer
     */
    public function getAllegroasId()
    {
        return $this->allegroasId;
    }

    /**
     * Set allegroasName
     *
     * @param string $allegroasName
     *
     * @return EntityAllegroAuctionScenario
     */
    public function setAllegroasName($allegroasName)
    {
        $this->allegroasName = $allegroasName;

        return $this;
    }

    /**
     * Get allegroasName
     *
     * @return string
     */
    public function getAllegroasName()
    {
        return $this->allegroasName;
    }

    /**
     * Set allegroasCode
     *
     * @param string $allegroasCode
     *
     * @return EntityAllegroAuctionScenario
     */
    public function setAllegroasCode($allegroasCode)
    {
        $this->allegroasCode = $allegroasCode;

        return $this;
    }

    /**
     * Get allegroasCode
     *
     * @return string
     */
    public function getAllegroasCode()
    {
        return $this->allegroasCode;
    }

    /**
     * Set allegroasIsActive
     *
     * @param boolean $allegroasIsActive
     *
     * @return EntityAllegroAuctionScenario
     */
    public function setAllegroasIsActive($allegroasIsActive)
    {
        $this->allegroasIsActive = $allegroasIsActive;

        return $this;
    }

    /**
     * Get allegroasIsActive
     *
     * @return boolean
     */
    public function getAllegroasIsActive()
    {
        return $this->allegroasIsActive;
    }
}

