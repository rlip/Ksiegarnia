<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroTemplateShipmentCategory
 *
 * @ORM\Table(name="allegro_template_shipment_category", indexes={@ORM\Index(name="allegrotsc_categorya_id", columns={"allegrotsc_categorya_id"}), @ORM\Index(name="allegrotsc_allegrotsl_id", columns={"allegrotsc_allegrotsl_id"})})
 * @ORM\Entity
 */
class EntityAllegroTemplateShipmentCategory extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotsc_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegrotscId;

    /**
     * @var \Application\Entity\EntityCategoryAllegro
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryAllegro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegrotsc_categorya_id", referencedColumnName="categorya_id", nullable=true)
     * })
     */
    private $allegrotscCategorya;

    /**
     * @var \Application\Entity\EntityAllegroTemplateShipmentList
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityAllegroTemplateShipmentList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegrotsc_allegrotsl_id", referencedColumnName="allegrotsl_id", nullable=true, onDelete="CASCADE")
     * })
     */
    private $allegrotscAllegrotsl;


    /**
     * Get allegrotscId
     *
     * @return integer
     */
    public function getAllegrotscId()
    {
        return $this->allegrotscId;
    }

    /**
     * Set allegrotscCategorya
     *
     * @param \Application\Entity\EntityCategoryAllegro $allegrotscCategorya
     *
     * @return EntityAllegroTemplateShipmentCategory
     */
    public function setAllegrotscCategorya(\Application\Entity\EntityCategoryAllegro $allegrotscCategorya = null)
    {
        $this->allegrotscCategorya = $allegrotscCategorya;

        return $this;
    }

    /**
     * Get allegrotscCategorya
     *
     * @return \Application\Entity\EntityCategoryAllegro
     */
    public function getAllegrotscCategorya()
    {
        return $this->allegrotscCategorya;
    }

    /**
     * Set allegrotscAllegrotsl
     *
     * @param \Application\Entity\EntityAllegroTemplateShipmentList $allegrotscAllegrotsl
     *
     * @return EntityAllegroTemplateShipmentCategory
     */
    public function setAllegrotscAllegrotsl(\Application\Entity\EntityAllegroTemplateShipmentList $allegrotscAllegrotsl = null)
    {
        $this->allegrotscAllegrotsl = $allegrotscAllegrotsl;

        return $this;
    }

    /**
     * Get allegrotscAllegrotsl
     *
     * @return \Application\Entity\EntityAllegroTemplateShipmentList
     */
    public function getAllegrotscAllegrotsl()
    {
        return $this->allegrotscAllegrotsl;
    }
}

