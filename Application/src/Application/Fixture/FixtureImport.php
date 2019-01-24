<?php

namespace Application\Fixtures;

use Application\Entity\EntityImport;
use Application\Entity\Repository\RepositoryImport;
use Application\Entity\Repository\RepositorySupplier;
use Doctrine\Common\Persistence\ObjectManager;

class FixtureImport extends FixtureAbstract
{

    public function load(ObjectManager $manager)
    {
        $this->_beforeLoad();
        foreach ($this->getEntities() as $aRow) {
            $entity = new EntityImport();
            /** @var \Application\Entity\EntitySupplier $oSupplier */
            $oSupplier = $manager->getRepository('Application\Entity\EntitySupplier')->find($aRow['import_supplier_id']);
            $entity->setFromArray($aRow)
                ->setImportSupplier($oSupplier);
            $manager->persist($entity);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 200;
    }

    public function getEntities()
    {
        return array(
            array( // row #1
                'import_supplier_id' => RepositorySupplier::SUPPLIER_ID_LNL,
                'import_code' => RepositoryImport::CODE_LNL_PRODUCT,
                'import_interval' => 1,
                'import_last_update' => '2015-03-27 23:35:56',
                'import_remote_file' => 'http://ll.com.pl/bazy/jos_vm_product.xml.bz2',
                'import_downloaded_file' => 'jos_vm_product.xml.bz2',
                'import_local_file' => 'jos_vm_product.xml',
                'import_download_require' => 0,
                'import_download_type' => 0,
                'import_unpack_require' => 0,
                'import_unpack_type' => 1,
            ),
            array( // row #0
                'import_supplier_id' => RepositorySupplier::SUPPLIER_ID_LNL,
                'import_code' => RepositoryImport::CODE_LNL_PRICE,
                'import_interval' => 1,
                'import_last_update' => '2015-03-27 23:35:56',
                'import_remote_file' => 'http://ll.com.pl/bazy/jos_vm_product_price.xml.bz2',
                'import_downloaded_file' => 'jos_vm_product_price.xml.bz2',
                'import_local_file' => 'jos_vm_product_price.xml',
                'import_download_require' => 0,
                'import_download_type' => 0,
                'import_unpack_require' => 0,
                'import_unpack_type' => 1,
            ),
        );
    }
}