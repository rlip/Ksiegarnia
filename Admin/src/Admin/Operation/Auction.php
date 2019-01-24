<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 20:28
 */

namespace Admin\Operation;

use Application\Entity\EntityAllegroTemplateDesignCategory;
use Application\Entity\EntityAllegroTemplateDesignList;
use Application\Entity\EntityAllegroTemplateShipmentCategory;
use Application\Entity\EntityAllegroTemplateShipmentHasAllegroShipment;
use Application\Entity\EntityAllegroTemplateShipmentList;
use Common\Operation\OperationAbstract;
use ExtJs\JsonModel\SuccessModel;

class Auction extends OperationAbstract
{
    public function getAuctionScenarioList()
    {
        return $this
            ->getEntityManager()
            ->getRepository('Application\Entity\EntityAllegroAuctionScenario')
            ->getPaginationListExtModel(
                $this->getPayload(), array(
                    'allegroasId',
                    'allegroasName',
                    'allegroasIsActive',
                    'allegroasCode'
                )
            );
    }

    public function updateAuctionScenarioList(){
        $aData = $this->getPayload();
        $oScenario = $this->getEntityManager()->find('Application\Entity\EntityAllegroAuctionScenario', $aData['allegroasId']);
        if(!$oScenario){
            throw new \Exception('Nie znaleziono szablonu');
        }
        $oScenario->setAllegroasIsActive($aData['allegroasIsActive']);
        $this->getEntityManager()->persist($oScenario);
        $this->getEntityManager()->flush();
        return new SuccessModel();
    }

}