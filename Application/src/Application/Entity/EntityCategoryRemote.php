<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityCategoryRemote
 *
 * @ORM\Table(name="category_remote", indexes={@ORM\Index(name="category_supplier_id", columns={"categoryr_supplier_id"}), @ORM\Index(name="catergoryr_categorya_id", columns={"catergoryr_categorya_id"}), @ORM\Index(name="categoryr_parent_id", columns={"categoryr_parent_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryCategoryRemote")
 */
class EntityCategoryRemote extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="categoryr_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryrId;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryr_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $categoryrName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="categoryr_mapping_changed", type="boolean", precision=0, scale=0, nullable=false, unique=false, options={"default" = 0})
     */
    private $categoryrMappingChanged;

    /**
     * @var \Application\Entity\EntitySupplier
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntitySupplier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryr_supplier_id", referencedColumnName="supplier_id", nullable=true)
     * })
     */
    private $categoryrSupplier;

    /**
     * @var \Application\Entity\EntityCategoryAllegro
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryAllegro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="catergoryr_categorya_id", referencedColumnName="categorya_id", nullable=true)
     * })
     */
    private $catergoryrCategorya;

    /**
     * @var \Application\Entity\EntityCategoryRemote
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryRemote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryr_parent_id", referencedColumnName="categoryr_id", nullable=true)
     * })
     */
    private $categoryrParent;


    /**
     * Get categoryrId
     *
     * @return integer
     */
    public function getCategoryrId()
    {
        return $this->categoryrId;
    }

    /**
     * Set categoryrName
     *
     * @param string $categoryrName
     *
     * @return EntityCategoryRemote
     */
    public function setCategoryrName($categoryrName)
    {
        $this->categoryrName = $categoryrName;

        return $this;
    }

    /**
     * Get categoryrName
     *
     * @return string
     */
    public function getCategoryrName()
    {
        return $this->categoryrName;
    }

    /**
     * Set categoryrMappingChanged
     *
     * @param boolean $categoryrMappingChanged
     *
     * @return EntityCategoryRemote
     */
    public function setCategoryrMappingChanged($categoryrMappingChanged)
    {
        $this->categoryrMappingChanged = $categoryrMappingChanged;

        return $this;
    }

    /**
     * Get categoryrMappingChanged
     *
     * @return boolean
     */
    public function getCategoryrMappingChanged()
    {
        return $this->categoryrMappingChanged;
    }

    /**
     * Set categoryrSupplier
     *
     * @param \Application\Entity\EntitySupplier $categoryrSupplier
     *
     * @return EntityCategoryRemote
     */
    public function setCategoryrSupplier(\Application\Entity\EntitySupplier $categoryrSupplier = null)
    {
        $this->categoryrSupplier = $categoryrSupplier;

        return $this;
    }

    /**
     * Get categoryrSupplier
     *
     * @return \Application\Entity\EntitySupplier
     */
    public function getCategoryrSupplier()
    {
        return $this->categoryrSupplier;
    }

    /**
     * Set catergoryrCategorya
     *
     * @param \Application\Entity\EntityCategoryAllegro $catergoryrCategorya
     *
     * @return EntityCategoryRemote
     */
    public function setCatergoryrCategorya(\Application\Entity\EntityCategoryAllegro $catergoryrCategorya = null)
    {
        $this->catergoryrCategorya = $catergoryrCategorya;

        return $this;
    }

    /**
     * Get catergoryrCategorya
     *
     * @return \Application\Entity\EntityCategoryAllegro
     */
    public function getCatergoryrCategorya()
    {
        return $this->catergoryrCategorya;
    }

    /**
     * Set categoryrParent
     *
     * @param \Application\Entity\EntityCategoryRemote $categoryrParent
     *
     * @return EntityCategoryRemote
     */
    public function setCategoryrParent(\Application\Entity\EntityCategoryRemote $categoryrParent = null)
    {
        $this->categoryrParent = $categoryrParent;

        return $this;
    }

    /**
     * Get categoryrParent
     *
     * @return \Application\Entity\EntityCategoryRemote
     */
    public function getCategoryrParent()
    {
        return $this->categoryrParent;
    }

  public function getChildren(){
        return $this->_getRepository()->findBy(array('categoryrParent' => $this));
  }
}

