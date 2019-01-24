<?php

namespace Application\Fixtures;

use Common\Operation\CommonFunction;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

abstract class FixtureAbstract implements OrderedFixtureInterface, FixtureInterface
{
    /** @var CommonFunction */
    protected $_oCommon;

    abstract public function load(ObjectManager $manager);

    abstract public function getOrder();

    abstract public function getEntities();

    /**
     * @return CommonFunction
     * @throws \Exception
     */
    protected function _getCommon()
    {
        if (!$this->_oCommon) {
            $this->_oCommon = new CommonFunction();
        }
        return $this->_oCommon;
    }

    protected function _beforeLoad(){
        $this->_getCommon()->trace('Wczytywanie ' . get_class($this));
    }
}