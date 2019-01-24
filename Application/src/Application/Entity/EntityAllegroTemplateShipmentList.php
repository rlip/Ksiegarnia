<?php

namespace Application\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroTemplateShipmentList
 *
 * @ORM\Table(name="allegro_template_shipment_list")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryAllegroTemplateShipmentList")
 */
class EntityAllegroTemplateShipmentList extends \Application\Entity\EntityAbstract
{

    function __construct()
    {
        $this->allegrotslCategory = new ArrayCollection();
    }
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="allegrotsl_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegrotslId;

    /**
     * @var string
     *
     * @ORM\Column(name="allegrotsl_value", type="text", length=65535, precision=0, scale=0, nullable=true, unique=false)
     */
    private $allegrotslValue;

    /**
     * @var string
     *
     * @ORM\Column(name="allegrotsl_name", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotslName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allegrotsl_is_default", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrotslIsDefault;

    /**
     * @ORM\OneToMany(targetEntity="EntityAllegroTemplateShipmentCategory", mappedBy="allegrotscAllegrotsl")
     **/

    private $allegrotslCategory;

    /**
     * @ORM\OneToMany(targetEntity="EntityAllegroTemplateShipmentHasAllegroShipment", mappedBy="allegrotshasAllegrotsl")
     **/

    private $allegrotslHasAllegroShipment;

    /**
     * Get allegrotslId
     *
     * @return integer
     */
    public function getAllegrotslId()
    {
        return $this->allegrotslId;
    }

    /**
     * Set allegrotslValue
     *
     * @param string $allegrotslValue
     *
     * @return EntityAllegroTemplateShipmentList
     */
    public function setAllegrotslValue($allegrotslValue)
    {
        $this->allegrotslValue = $allegrotslValue;

        return $this;
    }

    /**
     * Get allegrotslValue
     *
     * @return string
     */
    public function getAllegrotslValue()
    {
        return $this->allegrotslValue;
    }

    /**
     * Set allegrotslName
     *
     * @param string $allegrotslName
     *
     * @return EntityAllegroTemplateShipmentList
     */
    public function setAllegrotslName($allegrotslName)
    {
        $this->allegrotslName = $allegrotslName;

        return $this;
    }

    /**
     * Get allegrotslName
     *
     * @return string
     */
    public function getAllegrotslName()
    {
        return $this->allegrotslName;
    }

    /**
     * Set allegrotslIsDefault
     *
     * @param boolean $allegrotslIsDefault
     *
     * @return EntityAllegroTemplateShipmentList
     */
    public function setAllegrotslIsDefault($allegrotslIsDefault)
    {
        $this->allegrotslIsDefault = $allegrotslIsDefault;

        return $this;
    }

    /**
     * Get allegrotslIsDefault
     *
     * @return boolean
     */
    public function getAllegrotslIsDefault()
    {
        return $this->allegrotslIsDefault;
    }

    /**
     * @return mixed
     */
    public function getAllegrotslCategory()
    {
        return $this->allegrotslCategory;
    }

    /**
     * @param mixed $allegrotslCategory
     */
    public function setAllegrotslCategory($allegrotslCategory)
    {
        $this->allegrotslCategory = $allegrotslCategory;
    }

    /**
     * @return mixed
     */
    public function getAllegrotslHasAllegroShipment()
    {
        return $this->allegrotslHasAllegroShipment;
    }

    /**
     * @param mixed $allegrotslHasAllegroShipment
     */
    public function setAllegrotslHasAllegroShipment($allegrotslHasAllegroShipment)
    {
        $this->allegrotslHasAllegroShipment = $allegrotslHasAllegroShipment;
    }
}

