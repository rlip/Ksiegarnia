<?php
namespace Common\Controller;

use Zend\Mvc\MvcEvent;

abstract class ControllerConsoleAbstract extends ControllerAbstract
{
    protected function _processError(\Exception $e, MvcEvent $me){
        $this->getServiceLocator()->get('Common')->trace($e->getMessage());
    }
}
