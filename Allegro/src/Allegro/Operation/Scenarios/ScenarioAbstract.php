<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 21.06.15
 * Time: 14:14
 */

namespace Allegro\Operation\Scenarios;

use Application\Entity\EntityAllegroAuctionScenario;
use Common\Operation\OperationAbstract;

abstract class ScenarioAbstract extends OperationAbstract
{
    /** @var  EntityAllegroAuctionScenario */
    protected $_oScenario;

    abstract public function pushAuctions();

    public function setScenario(EntityAllegroAuctionScenario $oScenario)
    {
        $this->_oScenario = $oScenario;
    }

    /**
     * @return EntityAllegroAuctionScenario
     */
    protected function _getScenario(){
        if (!$this->_oScenario) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oScenario');
        }
        return $this->_oScenario;
    }
} 