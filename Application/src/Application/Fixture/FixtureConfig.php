<?php

namespace Application\Fixtures;

use Application\Entity\EntityConfig;
use Doctrine\Common\Persistence\ObjectManager;

class FixtureConfig extends FixtureAbstract
{

    public function load(ObjectManager $manager)
    {
        $this->_beforeLoad();
        foreach ($this->getEntities() as $aRow) {
            $entity = new EntityConfig();
            $entity->setFromArray($aRow);
            $manager->persist($entity);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

    public function getEntities()
    {
        return array(
            array( // row #0
                'config_key' => 'allegro/settings/country_code',
                'config_value' => '1',
            ),
            array( // row #1
                'config_key' => 'allegro/settings/api_key',
                'config_value' => '2b3730668',//'s3602f72' - testowy,
            ),
        );
    }
}