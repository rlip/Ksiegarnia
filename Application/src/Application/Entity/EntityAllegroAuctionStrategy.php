<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAuctionStrategy
 *
 * @ORM\Table(name="allegro_auction_strategy", uniqueConstraints={@ORM\UniqueConstraint(name="allegroas_key", columns={"allegroas_key"})})
 * @ORM\Entity
 */
class EntityAllegroAuctionStrategy extends \Application\Entity\EntityAbstract
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
     * @ORM\Column(name="allegroas_key", type="string", length=20, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroasKey;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allegroas_is_on", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroasIsOn;


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
     * @return EntityAllegroAuctionStrategy
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
     * Set allegroasKey
     *
     * @param string $allegroasKey
     *
     * @return EntityAllegroAuctionStrategy
     */
    public function setAllegroasKey($allegroasKey)
    {
        $this->allegroasKey = $allegroasKey;

        return $this;
    }

    /**
     * Get allegroasKey
     *
     * @return string
     */
    public function getAllegroasKey()
    {
        return $this->allegroasKey;
    }

    /**
     * Set allegroasIsOn
     *
     * @param boolean $allegroasIsOn
     *
     * @return EntityAllegroAuctionStrategy
     */
    public function setAllegroasIsOn($allegroasIsOn)
    {
        $this->allegroasIsOn = $allegroasIsOn;

        return $this;
    }

    /**
     * Get allegroasIsOn
     *
     * @return boolean
     */
    public function getAllegroasIsOn()
    {
        return $this->allegroasIsOn;
    }
}

