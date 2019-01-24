<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 22:14
 */

namespace Import\Reader;


use Application\Entity\EntityImport;
use Application\Entity\Repository\RepositoryImport;

class ReaderFactory
{
    public function getReader(EntityImport $oImport){
        switch ($oImport->getImportCode()){
            case RepositoryImport::CODE_LNL_PRODUCT:
            case RepositoryImport::CODE_LNL_PRICE:
                $oDownloader = new ReaderLnl();
                break;
            default:
                throw new \Exception('Nie znaleziono downloadera o kodzie:' . $oImport->getImportDownloadType());
        }
        $oDownloader->setImportTemplate($oImport);
        return $oDownloader;
    }
} 