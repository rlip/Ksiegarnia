<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 14:22
 */

namespace Import\Downloader;

use Application\Entity\EntityImport;
use Application\Entity\Repository\RepositoryImport;

class DownloaderFactory{
    public function getDownloader(EntityImport $oImport){
        switch ($oImport->getImportDownloadType()){
            case RepositoryImport::DOWNLOAD_TYPE_HTTP:
                $oDownloader = new DownloaderHttp();
                break;
            default:
                throw new \Exception('Nie znaleziono downloadera o kodzie:' . $oImport->getImportDownloadType());
        }
        $oDownloader->setImportTemplate($oImport);
        return $oDownloader;
    }
} 