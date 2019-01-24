<?php
/**
 * File for class AllegroStructDoLoginResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoLoginResponse originally named doLoginResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoLoginResponse extends AllegroWsdlClass
{
    /**
     * The sessionHandlePart
     * @var string
     */
    public $sessionHandlePart;
    /**
     * The userId
     * @var long
     */
    public $userId;
    /**
     * The serverTime
     * @var long
     */
    public $serverTime;
    /**
     * Constructor method for doLoginResponse
     * @see parent::__construct()
     * @param string $_sessionHandlePart
     * @param long $_userId
     * @param long $_serverTime
     * @return AllegroStructDoLoginResponse
     */
    public function __construct($_sessionHandlePart = NULL,$_userId = NULL,$_serverTime = NULL)
    {
        parent::__construct(array('sessionHandlePart'=>$_sessionHandlePart,'userId'=>$_userId,'serverTime'=>$_serverTime),false);
    }
    /**
     * Get sessionHandlePart value
     * @return string|null
     */
    public function getSessionHandlePart()
    {
        return $this->sessionHandlePart;
    }
    /**
     * Set sessionHandlePart value
     * @param string $_sessionHandlePart the sessionHandlePart
     * @return string
     */
    public function setSessionHandlePart($_sessionHandlePart)
    {
        return ($this->sessionHandlePart = $_sessionHandlePart);
    }
    /**
     * Get userId value
     * @return long|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param long $_userId the userId
     * @return long
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
    }
    /**
     * Get serverTime value
     * @return long|null
     */
    public function getServerTime()
    {
        return $this->serverTime;
    }
    /**
     * Set serverTime value
     * @param long $_serverTime the serverTime
     * @return long
     */
    public function setServerTime($_serverTime)
    {
        return ($this->serverTime = $_serverTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoLoginResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
