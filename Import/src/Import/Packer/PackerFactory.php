<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 22:14
 */

namespace Import\Packer;


use Application\Entity\EntityImport;
use Application\Entity\Repository\RepositoryImport;

class PackerFactory
{
    public function getPacker(EntityImport $oImport){
        switch ($oImport->getImportUnpackType()){
            case RepositoryImport::UNPACK_TYPE_BZ2:
                $oDownloader = new PackerBz2();
                break;
            default:
                throw new \Exception('Nie znaleziono downloadera o kodzie:' . $oImport->getImportUnpackType());
        }
        $oDownloader->setImportTemplate($oImport);
        return $oDownloader;
    }
} 