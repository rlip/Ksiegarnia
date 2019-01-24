<?php

namespace Application\Fixtures;

use Application\Entity\EntitySupplier;
use Application\Entity\Repository\RepositorySupplier;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class FixtureSupplier extends FixtureAbstract
{

    public function load(ObjectManager $manager)
    {
        $this->_beforeLoad();
        foreach ($this->getEntities() as $row) {
            $entity = new EntitySupplier();
            $entity->setFromArray($row);
            $manager->persist($entity);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 100;
    }

    public function getEntities()
    {
        return array(
            array(
                'supplier_id' => RepositorySupplier::SUPPLIER_ID_LOCAL_STORAGE,
                'supplier_name' => 'Magazyn lokalny'
            ),
            array(
                'supplier_id' => RepositorySupplier::SUPPLIER_ID_LNL,
                'supplier_name' => 'L&L'
            )
        );
    }
}