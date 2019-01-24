<?php
/**
 * File for class AllegroStructDoCancelRefundWarningRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCancelRefundWarningRequest originally named DoCancelRefundWarningRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCancelRefundWarningRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The refundId
     * @var int
     */
    public $refundId;
    /**
     * Constructor method for DoCancelRefundWarningRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_refundId
     * @return AllegroStructDoCancelRefundWarningRequest
     */
    public function __construct($_sessionId = NULL,$_refundId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'refundId'=>$_refundId),false);
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
     * Get refundId value
     * @return int|null
     */
    public function getRefundId()
    {
        return $this->refundId;
    }
    /**
     * Set refundId value
     * @param int $_refundId the refundId
     * @return int
     */
    public function setRefundId($_refundId)
    {
        return ($this->refundId = $_refundId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCancelRefundWarningRequest
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
