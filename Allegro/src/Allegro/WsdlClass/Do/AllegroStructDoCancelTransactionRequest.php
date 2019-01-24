<?php
/**
 * File for class AllegroStructDoCancelTransactionRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCancelTransactionRequest originally named DoCancelTransactionRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCancelTransactionRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The transactionId
     * @var long
     */
    public $transactionId;
    /**
     * Constructor method for DoCancelTransactionRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_transactionId
     * @return AllegroStructDoCancelTransactionRequest
     */
    public function __construct($_sessionId = NULL,$_transactionId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'transactionId'=>$_transactionId),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCancelTransactionRequest
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
