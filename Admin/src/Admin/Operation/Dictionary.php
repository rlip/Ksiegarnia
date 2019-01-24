<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 20:28
 */

namespace Admin\Operation;

use Common\Operation\OperationAbstract;
use ExtJs\JsonModel\SuccessModel;

class Dictionary extends OperationAbstract
{
    public function getDictionary()
    {
        return new SuccessModel($this->getEntityManager()->getRepository('Application\Entity\EntityAllegroShipment')->getAllAsArray());
    }
}