<?php

namespace Application\Fixtures;

use Application\Entity\EntityConfig;
use Application\Entity\EntityUser;
use Doctrine\Common\Persistence\ObjectManager;

class FixtureUser extends FixtureAbstract
{

    public function load(ObjectManager $manager)
    {
        $this->_beforeLoad();
        foreach ($this->getEntities() as $aRow) {
            $entity = new EntityUser();
            $entity->setFromArray($aRow);
            $manager->persist($entity);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }

    public function getEntities()
    {
        return array(
                array(
                    'user_id'  => 1,
                    'user_name' => 'admin',
                    'user_password' => 'ae29563fba2e9752374eb28c0b901bf8',
                    'user_salt' => '4WhFT7Sn2nrMXFsufP8jEGnuvbZYKsEd',
                    'user_active' => 1,
                )
        );
    }
}