<?php
namespace ExtJs\Controller;

use Common\Controller\ControllerAbstract;
use ExtJs\JsonModel\ErrorModel;
use Zend\Mvc\MvcEvent;

abstract class ControllerAbstractExtJs extends ControllerAbstract
{
    protected function _processError(\Exception $e, MvcEvent $me){
        /** @var ErrorModel $oExtJsErrorModel */
        $oExtJsErrorModel = $this->getServiceLocator()->get('ExtJsErrorModel');
        $oExtJsErrorModel->setMessage($e->getMessage());
        $me->setResult($oExtJsErrorModel);
        return $oExtJsErrorModel;
    }
}