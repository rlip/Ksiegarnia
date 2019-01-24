<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroTemplateDesignCategory
 *
 * @ORM\Table(name="allegro_template_design_category", indexes={@ORM\Index(name="allegrotdc_categorya_id", columns={"allegrotdc_categorya_id"}), @ORM\Index(name="allegrotdc_allegrotdl_id", columns={"allegrotdc_allegrotdl_id"})})
 * @ORM\Entity
 */
class EntityAllegroTemplateDesignCategory extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotdc_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegrotdcId;

    /**
     * @var \Application\Entity\EntityAllegroTemplateDesignList
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityAllegroTemplateDesignList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegrotdc_allegrotdl_id", referencedColumnName="allegrotdl_id", nullable=true, onDelete="CASCADE")
     * })
     */
    private $allegrotdcAllegrotdl;

    /**
     * @var \Application\Entity\EntityCategoryAllegro
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryAllegro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="allegrotdc_categorya_id", referencedColumnName="categorya_id", nullable=true)
     * })
     */
    private $allegrotdcCategorya;


    /**
     * Get allegrotdcId
     *
     * @return integer
     */
    public function getAllegrotdcId()
    {
        return $this->allegrotdcId;
    }

    /**
     * Set allegrotdcAllegrotdl
     *
     * @param \Application\Entity\EntityAllegroTemplateDesignList $allegrotdcAllegrotdl
     *
     * @return EntityAllegroTemplateDesignCategory
     */
    public function setAllegrotdcAllegrotdl(\Application\Entity\EntityAllegroTemplateDesignList $allegrotdcAllegrotdl = null)
    {
        $this->allegrotdcAllegrotdl = $allegrotdcAllegrotdl;

        return $this;
    }

    /**
     * Get allegrotdcAllegrotdl
     *
     * @return \Application\Entity\EntityAllegroTemplateDesignList
     */
    public function getAllegrotdcAllegrotdl()
    {
        return $this->allegrotdcAllegrotdl;
    }

    /**
     * Set allegrotdcCategorya
     *
     * @param \Application\Entity\EntityCategoryAllegro $allegrotdcCategorya
     *
     * @return EntityAllegroTemplateDesignCategory
     */
    public function setAllegrotdcCategorya(\Application\Entity\EntityCategoryAllegro $allegrotdcCategorya = null)
    {
        $this->allegrotdcCategorya = $allegrotdcCategorya;

        return $this;
    }

    /**
     * Get allegrotdcCategorya
     *
     * @return \Application\Entity\EntityCategoryAllegro
     */
    public function getAllegrotdcCategorya()
    {
        return $this->allegrotdcCategorya;
    }
}

