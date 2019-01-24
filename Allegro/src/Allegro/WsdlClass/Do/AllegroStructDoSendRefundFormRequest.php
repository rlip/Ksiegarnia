<?php
/**
 * File for class AllegroStructDoSendRefundFormRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSendRefundFormRequest originally named DoSendRefundFormRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSendRefundFormRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The dealId
     * @var int
     */
    public $dealId;
    /**
     * The reasonId
     * @var int
     */
    public $reasonId;
    /**
     * The refundQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $refundQuantity;
    /**
     * Constructor method for DoSendRefundFormRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_dealId
     * @param int $_reasonId
     * @param int $_refundQuantity
     * @return AllegroStructDoSendRefundFormRequest
     */
    public function __construct($_sessionId = NULL,$_dealId = NULL,$_reasonId = NULL,$_refundQuantity = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'dealId'=>$_dealId,'reasonId'=>$_reasonId,'refundQuantity'=>$_refundQuantity),false);
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
     * Get dealId value
     * @return int|null
     */
    public function getDealId()
    {
        return $this->dealId;
    }
    /**
     * Set dealId value
     * @param int $_dealId the dealId
     * @return int
     */
    public function setDealId($_dealId)
    {
        return ($this->dealId = $_dealId);
    }
    /**
     * Get reasonId value
     * @return int|null
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param int $_reasonId the reasonId
     * @return int
     */
    public function setReasonId($_reasonId)
    {
        return ($this->reasonId = $_reasonId);
    }
    /**
     * Get refundQuantity value
     * @return int|null
     */
    public function getRefundQuantity()
    {
        return $this->refundQuantity;
    }
    /**
     * Set refundQuantity value
     * @param int $_refundQuantity the refundQuantity
     * @return int
     */
    public function setRefundQuantity($_refundQuantity)
    {
        return ($this->refundQuantity = $_refundQuantity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSendRefundFormRequest
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
