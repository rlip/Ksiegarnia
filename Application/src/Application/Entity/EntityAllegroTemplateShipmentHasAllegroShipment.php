<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroTemplateShipmentHasAllegroShipment
 *
 * @ORM\Table(name="allegro_template_shipment_has_allegro_shipment", indexes={@ORM\Index(name="allegrotshas_allegrotsl_id", columns={"allegrotshas_allegrotsl_id"}), @ORM\Index(name="allegrotshas_allegros_id", columns={"allegrotshas_allegros_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryAllegroTemplateShipmentHasAllegroShipment")
 */
class EntityAllegroTemplateShipmentHasAllegroShipment extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotshas_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegrotshasId;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotshas_fist_item", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotshasFistItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotshas_next_item", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotshasNextItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotshas_in_pack", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotshasInPack;

    /**
     * @var \Application\Entity\EntityAllegroShipment
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityAllegroShipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegrotshas_allegros_id", referencedColumnName="allegros_id", nullable=true)
     * })
     */
    private $allegrotshasAllegros;

    /**
     * @var \Application\Entity\EntityAllegroTemplateShipmentList
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityAllegroTemplateShipmentList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegrotshas_allegrotsl_id", referencedColumnName="allegrotsl_id", nullable=true)
     * })
     */
    private $allegrotshasAllegrotsl;


    /**
     * Get allegrotshasId
     *
     * @return integer
     */
    public function getAllegrotshasId()
    {
        return $this->allegrotshasId;
    }

    /**
     * Set allegrotshasFistItem
     *
     * @param integer $allegrotshasFistItem
     *
     * @return EntityAllegroTemplateShipmentHasAllegroShipment
     */
    public function setAllegrotshasFistItem($allegrotshasFistItem)
    {
        $this->allegrotshasFistItem = $allegrotshasFistItem;

        return $this;
    }

    /**
     * Get allegrotshasFistItem
     *
     * @return integer
     */
    public function getAllegrotshasFistItem()
    {
        return $this->allegrotshasFistItem;
    }

    /**
     * Set allegrotshasNextItem
     *
     * @param integer $allegrotshasNextItem
     *
     * @return EntityAllegroTemplateShipmentHasAllegroShipment
     */
    public function setAllegrotshasNextItem($allegrotshasNextItem)
    {
        $this->allegrotshasNextItem = $allegrotshasNextItem;

        return $this;
    }

    /**
     * Get allegrotshasNextItem
     *
     * @return integer
     */
    public function getAllegrotshasNextItem()
    {
        return $this->allegrotshasNextItem;
    }

    /**
     * Set allegrotshasInPack
     *
     * @param integer $allegrotshasInPack
     *
     * @return EntityAllegroTemplateShipmentHasAllegroShipment
     */
    public function setAllegrotshasInPack($allegrotshasInPack)
    {
        $this->allegrotshasInPack = $allegrotshasInPack;

        return $this;
    }

    /**
     * Get allegrotshasInPack
     *
     * @return integer
     */
    public function getAllegrotshasInPack()
    {
        return $this->allegrotshasInPack;
    }

    /**
     * Set allegrotshasAllegros
     *
     * @param \Application\Entity\EntityAllegroShipment $allegrotshasAllegros
     *
     * @return EntityAllegroTemplateShipmentHasAllegroShipment
     */
    public function setAllegrotshasAllegros(\Application\Entity\EntityAllegroShipment $allegrotshasAllegros = null)
    {
        $this->allegrotshasAllegros = $allegrotshasAllegros;

        return $this;
    }

    /**
     * Get allegrotshasAllegros
     *
     * @return \Application\Entity\EntityAllegroShipment
     */
    public function getAllegrotshasAllegros()
    {
        return $this->allegrotshasAllegros;
    }

    /**
     * Set allegrotshasAllegrotsl
     *
     * @param \Application\Entity\EntityAllegroTemplateShipmentList $allegrotshasAllegrotsl
     *
     * @return EntityAllegroTemplateShipmentHasAllegroShipment
     */
    public function setAllegrotshasAllegrotsl(\Application\Entity\EntityAllegroTemplateShipmentList $allegrotshasAllegrotsl = null)
    {
        $this->allegrotshasAllegrotsl = $allegrotshasAllegrotsl;

        return $this;
    }

    /**
     * Get allegrotshasAllegrotsl
     *
     * @return \Application\Entity\EntityAllegroTemplateShipmentList
     */
    public function getAllegrotshasAllegrotsl()
    {
        return $this->allegrotshasAllegrotsl;
    }
}

