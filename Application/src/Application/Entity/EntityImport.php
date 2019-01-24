<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityImport
 *
 * @ORM\Table(name="import", uniqueConstraints={@ORM\UniqueConstraint(name="import_code", columns={"import_code"})}, indexes={@ORM\Index(name="fk_import_supplier_idx", columns={"import_supplier_id"})})
 * @ORM\Entity
 */
class EntityImport extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="import_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $importId;

    /**
     * @var string
     *
     * @ORM\Column(name="import_code", type="string", length=15, precision=0, scale=0, nullable=false, unique=false)
     */
    private $importCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="import_interval", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $importInterval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="import_last_update", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $importLastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="import_remote_file", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $importRemoteFile;

    /**
     * @var string
     *
     * @ORM\Column(name="import_downloaded_file", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $importDownloadedFile;

    /**
     * @var string
     *
     * @ORM\Column(name="import_local_file", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $importLocalFile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_download_require", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $importDownloadRequire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_download_type", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $importDownloadType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_unpack_require", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $importUnpackRequire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="import_unpack_type", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $importUnpackType;

    /**
     * @var \Application\Entity\EntitySupplier
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntitySupplier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="import_supplier_id", referencedColumnName="supplier_id", nullable=true)
     * })
     */
    private $importSupplier;


    /**
     * Get importId
     *
     * @return integer 
     */
    public function getImportId()
    {
        return $this->importId;
    }

    /**
     * Set importCode
     *
     * @param string $importCode
     * @return EntityImport
     */
    public function setImportCode($importCode)
    {
        $this->importCode = $importCode;

        return $this;
    }

    /**
     * Get importCode
     *
     * @return string 
     */
    public function getImportCode()
    {
        return $this->importCode;
    }

    /**
     * Set importInterval
     *
     * @param integer $importInterval
     * @return EntityImport
     */
    public function setImportInterval($importInterval)
    {
        $this->importInterval = $importInterval;

        return $this;
    }

    /**
     * Get importInterval
     *
     * @return integer 
     */
    public function getImportInterval()
    {
        return $this->importInterval;
    }

    /**
     * Set importLastUpdate
     *
     * @param \DateTime $importLastUpdate
     * @return EntityImport
     */
    public function setImportLastUpdate($importLastUpdate)
    {
        $this->importLastUpdate = $importLastUpdate;

        return $this;
    }

    /**
     * Get importLastUpdate
     *
     * @return \DateTime 
     */
    public function getImportLastUpdate()
    {
        return $this->importLastUpdate;
    }

    /**
     * Set importRemoteFile
     *
     * @param string $importRemoteFile
     * @return EntityImport
     */
    public function setImportRemoteFile($importRemoteFile)
    {
        $this->importRemoteFile = $importRemoteFile;

        return $this;
    }

    /**
     * Get importRemoteFile
     *
     * @return string 
     */
    public function getImportRemoteFile()
    {
        return $this->importRemoteFile;
    }

    /**
     * Set importDownloadedFile
     *
     * @param string $importDownloadedFile
     * @return EntityImport
     */
    public function setImportDownloadedFile($importDownloadedFile)
    {
        $this->importDownloadedFile = $importDownloadedFile;

        return $this;
    }

    /**
     * Get importDownloadedFile
     *
     * @return string 
     */
    public function getImportDownloadedFile()
    {
        return $this->importDownloadedFile;
    }

    /**
     * Set importLocalFile
     *
     * @param string $importLocalFile
     * @return EntityImport
     */
    public function setImportLocalFile($importLocalFile)
    {
        $this->importLocalFile = $importLocalFile;

        return $this;
    }

    /**
     * Get importLocalFile
     *
     * @return string 
     */
    public function getImportLocalFile()
    {
        return $this->importLocalFile;
    }

    /**
     * Set importDownloadRequire
     *
     * @param boolean $importDownloadRequire
     * @return EntityImport
     */
    public function setImportDownloadRequire($importDownloadRequire)
    {
        $this->importDownloadRequire = $importDownloadRequire;

        return $this;
    }

    /**
     * Get importDownloadRequire
     *
     * @return boolean 
     */
    public function getImportDownloadRequire()
    {
        return $this->importDownloadRequire;
    }

    /**
     * Set importDownloadType
     *
     * @param boolean $importDownloadType
     * @return EntityImport
     */
    public function setImportDownloadType($importDownloadType)
    {
        $this->importDownloadType = $importDownloadType;

        return $this;
    }

    /**
     * Get importDownloadType
     *
     * @return boolean 
     */
    public function getImportDownloadType()
    {
        return $this->importDownloadType;
    }

    /**
     * Set importUnpackRequire
     *
     * @param boolean $importUnpackRequire
     * @return EntityImport
     */
    public function setImportUnpackRequire($importUnpackRequire)
    {
        $this->importUnpackRequire = $importUnpackRequire;

        return $this;
    }

    /**
     * Get importUnpackRequire
     *
     * @return boolean 
     */
    public function getImportUnpackRequire()
    {
        return $this->importUnpackRequire;
    }

    /**
     * Set importUnpackType
     *
     * @param boolean $importUnpackType
     * @return EntityImport
     */
    public function setImportUnpackType($importUnpackType)
    {
        $this->importUnpackType = $importUnpackType;

        return $this;
    }

    /**
     * Get importUnpackType
     *
     * @return boolean 
     */
    public function getImportUnpackType()
    {
        return $this->importUnpackType;
    }

    /**
     * Set importSupplier
     *
     * @param \Application\Entity\EntitySupplier $importSupplier
     * @return EntityImport
     */
    public function setImportSupplier(\Application\Entity\EntitySupplier $importSupplier = null)
    {
        $this->importSupplier = $importSupplier;

        return $this;
    }

    /**
     * Get importSupplier
     *
     * @return \Application\Entity\EntitySupplier 
     */
    public function getImportSupplier()
    {
        return $this->importSupplier;
    }
}
