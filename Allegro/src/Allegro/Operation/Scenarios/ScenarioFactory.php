<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 21.06.15
 * Time: 14:15
 */

namespace Allegro\Operation\Scenarios;


use Application\Entity\EntityAllegroAuctionScenario;
use Common\Operation\OperationAbstract;

class ScenarioFactory extends OperationAbstract
{

    /**
     * @param $sCode
     * @return ScenarioAbstract
     * @throws \Exception
     */
    public function getScenario(EntityAllegroAuctionScenario $oScenarioRow)
    {
        switch ($oScenarioRow->getAllegroasCode()) {
            case 'SIMPLE':
                $oScenario = new ScenarioSimple();
                break;
            default:
                throw new \Exception('Nie znaleziono scenariusza o kodzie: ' . $oScenarioRow->getAllegroasCode());
        }
        $oScenario->setServiceLocator($this->getServiceLocator());
        $oScenario->setScenario($oScenarioRow);
        return $oScenario;
    }
} 