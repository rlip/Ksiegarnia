<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 21:34
 */
namespace Import\Reader;

use Application\Entity\EntityImport;

abstract class ReaderAbstract
{
    /** @var $_oImportTemplate */
    protected $_oImportTemplate;

    abstract public function next();
    abstract public function current();

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
        if (!$this->_oImportTemplate) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oImportTemplate');
        }
        return $this->_oImportTemplate;
    }

    protected function _getSourceIfExist()
    {
        $sSource = getcwd() . '/data/import/' . $this->getImportTemplate()->getImportLocalFile();
        if (!file_exists($sSource)) {
            throw new \Exception('Podczas odczytania nie znaleziono pliku ' . $this->getImportTemplate()->getImportLocalFile());
        }
        return $sSource;
    }

}