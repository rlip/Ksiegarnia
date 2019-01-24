<?php
/**
 * File for class AllegroStructDoSendRefundFormResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSendRefundFormResponse originally named doSendRefundFormResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSendRefundFormResponse extends AllegroWsdlClass
{
    /**
     * The refundId
     * @var int
     */
    public $refundId;
    /**
     * Constructor method for doSendRefundFormResponse
     * @see parent::__construct()
     * @param int $_refundId
     * @return AllegroStructDoSendRefundFormResponse
     */
    public function __construct($_refundId = NULL)
    {
        parent::__construct(array('refundId'=>$_refundId),false);
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
     * @return AllegroStructDoSendRefundFormResponse
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
