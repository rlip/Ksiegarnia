<?php
namespace Common\Controller;

use Common\Operation\OperationAbstract;
use Zend\Console\Request as ConsoleRequest;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;

abstract class ControllerAbstract extends AbstractActionController
{
    private $_oEntityManager;
    private $_oOperation;

    public function onDispatch(MvcEvent $me){
        try {
            return parent::onDispatch($me);
        } catch (\Exception $e) {
            return $this->_processError($e, $me);
        }
    }

    abstract protected function _processError(\Exception $e, MvcEvent $me);

    /**
     * Klasa wymaga nadpisania konstruktora i podania klasy operacji
     * @param OperationAbstract $oOperation
     */
    public function __construct($oOperation = null){
        $this->_oOperation = $oOperation;
    }


    /**
     * @throws \Exception
     * @return mixed
     */
    protected function _getOperation()
    {
        if (!$this->_oOperation) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oOperation');
        }
        $this->_oOperation->setServiceLocator($this->getServiceLocator());
        $this->_oOperation->setRequest($this->getRequest());
        return $this->_oOperation;
    }

    /**
     * @param mixed $oOperation
     */
    protected function _setOperation(OperationAbstract $oOperation)
    {
        $this->_oOperation = $oOperation;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function _getEntityManager()
    {
        if ($this->_oEntityManager === null) {
            $this->_oEntityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->_oEntityManager;
    }

    protected function _consoleCheck(){
        if (!$this->getRequest() instanceof ConsoleRequest) {
            throw new \RuntimeException('You can only use this action from a console!');
        }
    }

    protected function _readLine($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}