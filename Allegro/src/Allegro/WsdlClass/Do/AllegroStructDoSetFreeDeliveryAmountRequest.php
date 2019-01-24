<?php
/**
 * File for class AllegroStructDoSetFreeDeliveryAmountRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSetFreeDeliveryAmountRequest originally named DoSetFreeDeliveryAmountRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSetFreeDeliveryAmountRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The activeFlag
     * @var int
     */
    public $activeFlag;
    /**
     * The freeDeliveryAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $freeDeliveryAmount;
    /**
     * Constructor method for DoSetFreeDeliveryAmountRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_activeFlag
     * @param float $_freeDeliveryAmount
     * @return AllegroStructDoSetFreeDeliveryAmountRequest
     */
    public function __construct($_sessionId = NULL,$_activeFlag = NULL,$_freeDeliveryAmount = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'activeFlag'=>$_activeFlag,'freeDeliveryAmount'=>$_freeDeliveryAmount),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get activeFlag value
     * @return int|null
     */
    public function getActiveFlag()
    {
        return $this->activeFlag;
    }
    /**
     * Set activeFlag value
     * @param int $_activeFlag the activeFlag
     * @return int
     */
    public function setActiveFlag($_activeFlag)
    {
        return ($this->activeFlag = $_activeFlag);
    }
    /**
     * Get freeDeliveryAmount value
     * @return float|null
     */
    public function getFreeDeliveryAmount()
    {
        return $this->freeDeliveryAmount;
    }
    /**
     * Set freeDeliveryAmount value
     * @param float $_freeDeliveryAmount the freeDeliveryAmount
     * @return float
     */
    public function setFreeDeliveryAmount($_freeDeliveryAmount)
    {
        return ($this->freeDeliveryAmount = $_freeDeliveryAmount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSetFreeDeliveryAmountRequest
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
