<?php

namespace Application\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroTemplateDesignList
 *
 * @ORM\Table(name="allegro_template_design_list")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryAllegroTemplateDesignList")
 */
class EntityAllegroTemplateDesignList extends \Application\Entity\EntityAbstract
{
    function __construct()
    {
        $this->allegrotdlCategory = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotdl_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegrotdlId;

    /**
     * @var string
     *
     * @ORM\Column(name="allegrotdl_value", type="text", length=65535, precision=0, scale=0, nullable=true, unique=false)
     */
    private $allegrotdlValue;

    /**
     * @var string
     *
     * @ORM\Column(name="allegrotdl_name", type="text", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotdlName;

    /**
     * @ORM\OneToMany(targetEntity="EntityAllegroTemplateDesignCategory", mappedBy="allegrotdcAllegrotdl")
     **/

    private $allegrotdlCategory;


    /**
     * @var boolean
     *
     * @ORM\Column(name="allegrotdl_is_default", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotdlIsDefault;


    /**
     * Get allegrotdlId
     *
     * @return integer
     */
    public function getAllegrotdlId()
    {
        return $this->allegrotdlId;
    }

    /**
     * Set allegrotdlValue
     *
     * @param string $allegrotdlValue
     *
     * @return EntityAllegroTemplateDesignList
     */
    public function setAllegrotdlValue($allegrotdlValue)
    {
        $this->allegrotdlValue = $allegrotdlValue;

        return $this;
    }

    /**
     * Get allegrotdlValue
     *
     * @return string
     */
    public function getAllegrotdlValue()
    {
        return $this->allegrotdlValue;
    }

    /**
     * Set allegrotdlName
     *
     * @param string $allegrotdlName
     *
     * @return EntityAllegroTemplateDesignList
     */
    public function setAllegrotdlName($allegrotdlName)
    {
        $this->allegrotdlName = $allegrotdlName;

        return $this;
    }

    /**
     * Get allegrotdlName
     *
     * @return string
     */
    public function getAllegrotdlName()
    {
        return $this->allegrotdlName;
    }

    /**
     * Set allegrotdlIsDefault
     *
     * @param boolean $allegrotdlIsDefault
     *
     * @return EntityAllegroTemplateDesignList
     */
    public function setAllegrotdlIsDefault($allegrotdlIsDefault)
    {
        $this->allegrotdlIsDefault = $allegrotdlIsDefault;

        return $this;
    }

    /**
     * Get allegrotdlIsDefault
     *
     * @return boolean
     */
    public function getAllegrotdlIsDefault()
    {
        return $this->allegrotdlIsDefault;
    }

    /**
     * @return mixed
     */
    public function getAllegrotdlCategory()
    {
        return $this->allegrotdlCategory;
    }

    /**
     * @param mixed $allegrotdlCategory
     */
    public function setAllegrotdlCategory($allegrotdlCategory)
    {
        $this->allegrotdlCategory = $allegrotdlCategory;
    }
}

