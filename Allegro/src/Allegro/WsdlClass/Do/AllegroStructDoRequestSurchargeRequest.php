<?php
/**
 * File for class AllegroStructDoRequestSurchargeRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRequestSurchargeRequest originally named DoRequestSurchargeRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRequestSurchargeRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The transactionId
     * @var long
     */
    public $transactionId;
    /**
     * The surchargeValue
     * @var float
     */
    public $surchargeValue;
    /**
     * The surchargeMessageToBuyer
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $surchargeMessageToBuyer;
    /**
     * Constructor method for DoRequestSurchargeRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_transactionId
     * @param float $_surchargeValue
     * @param string $_surchargeMessageToBuyer
     * @return AllegroStructDoRequestSurchargeRequest
     */
    public function __construct($_sessionHandle = NULL,$_transactionId = NULL,$_surchargeValue = NULL,$_surchargeMessageToBuyer = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'transactionId'=>$_transactionId,'surchargeValue'=>$_surchargeValue,'surchargeMessageToBuyer'=>$_surchargeMessageToBuyer),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get transactionId value
     * @return long|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param long $_transactionId the transactionId
     * @return long
     */
    public function setTransactionId($_transactionId)
    {
        return ($this->transactionId = $_transactionId);
    }
    /**
     * Get surchargeValue value
     * @return float|null
     */
    public function getSurchargeValue()
    {
        return $this->surchargeValue;
    }
    /**
     * Set surchargeValue value
     * @param float $_surchargeValue the surchargeValue
     * @return float
     */
    public function setSurchargeValue($_surchargeValue)
    {
        return ($this->surchargeValue = $_surchargeValue);
    }
    /**
     * Get surchargeMessageToBuyer value
     * @return string|null
     */
    public function getSurchargeMessageToBuyer()
    {
        return $this->surchargeMessageToBuyer;
    }
    /**
     * Set surchargeMessageToBuyer value
     * @param string $_surchargeMessageToBuyer the surchargeMessageToBuyer
     * @return string
     */
    public function setSurchargeMessageToBuyer($_surchargeMessageToBuyer)
    {
        return ($this->surchargeMessageToBuyer = $_surchargeMessageToBuyer);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRequestSurchargeRequest
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
