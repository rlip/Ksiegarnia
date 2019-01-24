<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 20:55
 */

namespace Common\Operation;


use ExtJs\JsonModel\SuccessModel;
use Zend\Json\Json;
use Zend\Stdlib\RequestInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

abstract class OperationAbstract implements ServiceLocatorAwareInterface
{

    const CACHE_ACTIVE = true;

    /** @var ServiceLocatorInterface */
    protected $_oServiceLocator;
    /** @var \Doctrine\ORM\EntityManager */
    protected $_oEntityManager;
    /** @var RequestInterface */
    protected $_oRequest;
    /** @var \stdClass */
    protected $_oContent;

    protected $_aCache = array();


    /**
     * @param ServiceLocatorInterface $oServiceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $oServiceLocator)
    {
        $this->_oServiceLocator = $oServiceLocator;
    }

    protected function _isCached($sName)
    {
        if (!self::CACHE_ACTIVE) {
            return false;
        }
        $sName = $this->_cleanArrayKey($sName);
        //jeśli jest scachowane tutaj w klasie to zwraca true;
        if (isset($this->_aCache[$sName]) AND $this->_aCache[$sName] !== null) {
            return true;
        }
        //w przeciwnym wypadku zwraca to czy jest scachowana w zewnętrznym pliku czy nie
        $this->_aCache[$sName] = $this->getServiceLocator()->get('cache')->getItem($sName);
        return $this->_aCache[$sName] !== null;
    }

    protected function _getCached($sName)
    {
        if (!self::CACHE_ACTIVE) {
            return null;
        }
        $sName = $this->_cleanArrayKey($sName);
        if ($this->_isCached($sName)) { //jeśli zwróci true to coś musi być w tablicy
            return $this->_aCache[$sName];
        }
        return null;
    }

    protected function _addToCache($sName, $data)
    {
        if (!self::CACHE_ACTIVE) {
            return null;
        }
        $sName = $this->_cleanArrayKey($sName);
        $this->_aCache[$sName] = $data;
        $this->getServiceLocator()->get('cache')->setItem($sName, $data);
    }

    protected function _removeFromCache($sName){
        if (!self::CACHE_ACTIVE) {
            return null;
        }
        $sName = $this->_cleanArrayKey($sName);
        unset($this->_aCache[$sName]);
        $this->getServiceLocator()->get('cache')->removeItem($sName);
    }

    protected function _cleanArrayKey($sName)
    {
        return preg_replace("/[^a-zA-Z0-9]+/", "", $sName);
    }

    /**
     * @throws \Exception
     * @return \Zend\Stdlib\RequestInterface
     */
    public function getRequest()
    {
        if (!$this->_oRequest) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oRequest');
        }
        return $this->_oRequest;
    }

    /**
     * @param \Zend\Stdlib\RequestInterface $oRequest
     */
    public function setRequest($oRequest)
    {
        $this->_oRequest = $oRequest;
    }

    /**
     * @return \stdClass
     */
    public function getContent()
    {
        if ($this->_oContent === null) {
            $this->_oContent = json_decode(file_get_contents('php://input'));
        }
        return $this->_oContent;
    }

    public function getPayload($object = false) {
        try {
            $oContent = $this->getContent();
            if(is_object($oContent)){
                $json = $oContent;
            } else {
                $json = Json::decode($this->getContent() ? $this->getContent() : '{}',$object ? Json::TYPE_OBJECT : Json::TYPE_ARRAY);
            }
        } catch (\Exception $e) {
            $json = $object ? new \stdClass() : array();
        }
        $query =  $object ? $this->getRequest()->getQuery() : $this->getRequest()->getQuery()->toArray();
        $post =  $object ? $this->getRequest()->getPost() : $this->getRequest()->getPost()->toArray();
        $json = $object ? (object)array_merge((array)$json,(array)$query) : array_merge((array)$json,(array)$query);
        $json = $object ? (object)array_merge((array)$json,(array)$post) : array_merge((array)$json,(array)$post);
        return  $json ? $json : ($object ? new \stdClass() : array());
    }


    public function getContentParam($sName, $sDefault = null)
    {
        $sContent = $this->getContent();
        if (isset($sContent->$sName)) {
            return $sContent->$sName;
        }
        return $sDefault;
    }

    public function getConfigParam($sName, $sDefault = null)
    {
        $oConfig = $this->getServiceLocator()->get('Config');
        if (isset($oConfig[$sName])) {
            return $oConfig[$sName];
        }
        return $sDefault;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        if ($this->_oEntityManager === null) {
            $this->_oEntityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->_oEntityManager;
    }

    /**
     * @return ServiceLocatorInterface
     * @throws \Exception
     */
    public function getServiceLocator()
    {
        if (!$this->_oServiceLocator) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oServiceLocator');
        }
        return $this->_oServiceLocator;
    }

    protected function _commonDelete($sEntity, $sIdField){
        $aData = $this->getContent();
        /** @var $aData array */
        if(count($aData) == 1){
            $aData = array($aData);
        }
        foreach($aData as $oRow){
            $oTemplate = $this->getEntityManager()->find($sEntity, $oRow->$sIdField);
            $this->getEntityManager()->remove($oTemplate);
        }
        $this->getEntityManager()->flush();
        return new SuccessModel();
    }

} 