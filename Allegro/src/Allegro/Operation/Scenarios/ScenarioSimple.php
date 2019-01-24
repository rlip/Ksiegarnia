<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 21.06.15
 * Time: 14:15
 */

namespace Allegro\Operation\Scenarios;


class ScenarioSimple extends ScenarioAbstract
{
    /**
     * Dodaje aukcje do tablicy to create
     */
    public function pushAuctions()
    {
        //aukcje z flagą to allegro, o minimalnym stoku 3, których jeszcze nie ma w tablicy do wystawienia i nie są aktywne w tablicy aukcji
        $iId = $this->_getScenario()->getAllegroasId();
        $sql = 'INSERT INTO allegro_auction_to_create (allegroatc_productl_id, allegroatc_allegroas_id)
SELECT productl_id, ' . $iId . ' FROM product_list
WHERE productl_to_allegro = 1 AND productl_in_stock > 3
AND productl_id NOT IN (SELECT allegroatc_productl_id FROM allegro_auction_to_create)
AND productl_id NOT IN (SELECT allegroal_productl_id FROM allegro_auction_list WHERE allegroal_is_active = 1)';
        $oConnection = $this->getEntityManager()->getConnection();
        $oConnection->executeQuery($sql);
    }
} 