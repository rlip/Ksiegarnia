<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 09.05.15
 * Time: 13:54
 */

namespace Allegro\Operation;


use Allegro\Operation\Scenarios\ScenarioFactory;

class AllegroScenario extends AllegroAbstract{

    public function processScenarios(){
        $oScenarios =  $this->getEntityManager()->getRepository('Application\Entity\EntityAllegroAuctionScenario')->findBy(array(
            'allegroasIsActive' => true
        ));

        $oFactory = new ScenarioFactory();
        $oFactory->setServiceLocator($this->getServiceLocator());
        foreach($oScenarios as $oScenarioRow){
            $oScenario = $oFactory->getScenario($oScenarioRow);
            $oScenario->pushAuctions();
        }
    }
} 