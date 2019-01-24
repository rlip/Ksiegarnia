<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityCategoryAllegro
 *
 * @ORM\Table(name="category_allegro", indexes={@ORM\Index(name="categorya_parent_id", columns={"categorya_parent_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryCategoryAllegro")
 */
class EntityCategoryAllegro extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="categorya_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryaId;

    /**
     * @var string
     *
     * @ORM\Column(name="categorya_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $categoryaName;

    /**
     * @var \Application\Entity\EntityCategoryAllegro
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityCategoryAllegro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorya_parent_id", referencedColumnName="categorya_id", nullable=true)
     * })
     */
    private $categoryaParent;


    /**
     * Set categoryaId
     *
     * @param $id
     * @return EntityCategoryAllegro
     */
    public function setCategoryaId($id)
    {
        $this->categoryaId = $id;
        return $this;
    }

    /**
     * Get categoryaId
     *
     * @return integer
     */
    public function getCategoryaId()
    {
        return $this->categoryaId;
    }

    /**
     * Set categoryaName
     *
     * @param string $categoryaName
     * @return EntityCategoryAllegro
     */
    public function setCategoryaName($categoryaName)
    {
        $this->categoryaName = $categoryaName;

        return $this;
    }

    /**
     * Get categoryaName
     *
     * @return string
     */
    public function getCategoryaName()
    {
        return $this->categoryaName;
    }

    /**
     * Set categoryaParent
     *
     * @param \Application\Entity\EntityCategoryAllegro $categoryaParent
     * @return EntityCategoryAllegro
     */
    public function setCategoryaParent(\Application\Entity\EntityCategoryAllegro $categoryaParent = null)
    {
        $this->categoryaParent = $categoryaParent;

        return $this;
    }

    /**
     * Get categoryaParent
     *
     * @return \Application\Entity\EntityCategoryAllegro
     */
    public function getCategoryaParent()
    {
        return $this->categoryaParent;
    }
}
