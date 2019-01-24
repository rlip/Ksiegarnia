<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 28.03.15
 * Time: 13:28
 */

namespace Import\Import;

use Application\Entity\EntityImport;
use Application\Entity\Repository\RepositoryImport;
use Import\Reader\ReaderFactory;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ImportFactory implements ServiceLocatorAwareInterface {

    protected $_oServiceLocator;

    /**
     * @param EntityImport $oImport
     * @return ImportAbstract
     * @throws \Exception
     */
    public function getImport(EntityImport $oImport) {
        switch($oImport->getImportCode()) {
            case RepositoryImport::CODE_LNL_PRICE:
                $oImporter = new ImportLnLPrice();
                break;
            case RepositoryImport::CODE_LNL_PRODUCT:
                $oImporter = new ImportLnlProduct();
                break;
            default:
                throw new \Exception('Nie znaleziono importera o kodzie:' . $oImport->getImportCode());
        }
        $oReaderFactory = new ReaderFactory();
        $oImporter->setReader($oReaderFactory->getReader($oImport));
        $oImporter->setServiceLocator($this->getServiceLocator());
        $oImporter->setImportTemplate($oImport);
        return $oImporter;
    }

    /**
     * @param ServiceLocatorInterface $oServiceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $oServiceLocator)
    {
        $this->_oServiceLocator = $oServiceLocator;
    }

    public function getServiceLocator()
    {
        return $this->_oServiceLocator;
    }
} 