<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 14:22
 */

namespace Import\Packer;
use Application\Entity\EntityImport;

abstract class PackerAbstract {
    /** @var $_oImportTemplate */
    protected $_oImportTemplate;

    abstract public function startUnpack();

    /**
     * @param EntityImport $oEntity
     */
    public function setImportTemplate(EntityImport $oEntity)
    {
        $this->_oImportTemplate = $oEntity;
    }

    /**
     * @throws \Exception
     * @return EntityImport
     */
    public function getImportTemplate()
    {
        if(!$this->_oImportTemplate){
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oImportTemplate');
        }
        return $this->_oImportTemplate;
    }


    protected function _getSourceIfExist(){
        $sSource = getcwd() . '/data/import/'. $this->getImportTemplate()->getImportDownloadedFile();
        if(!file_exists($sSource)){
            throw new \Exception('Podczas próby rozpakowania nie znaleziono pliku ' . $this->getImportTemplate()->getImportDownloadedFile());
        }
        return $sSource;
    }

} 