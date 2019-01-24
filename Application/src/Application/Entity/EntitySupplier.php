<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntitySupplier
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity
 */
class EntitySupplier extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="supplier_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $supplierId;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_name", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $supplierName;


    /**
     * Get supplierId
     *
     * @return integer 
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * Set supplierId
     *
     * @param $id
     * @return EntitySupplier
     */
    public function setSupplierId($id)
    {
        $this->supplierId = $id;
        return $this;
    }

    /**
     * Set supplierName
     *
     * @param string $supplierName
     * @return EntitySupplier
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;

        return $this;
    }

    /**
     * Get supplierName
     *
     * @return string 
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }
}
