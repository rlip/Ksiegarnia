<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 14:22
 */

namespace Import\Downloader;
use Application\Entity\EntityImport;

abstract class DownloaderAbstract {
    /** @var $_oImportTemplate */
    protected $_oImportTemplate;

    abstract public function startDownload();

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


} 