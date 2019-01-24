<?php
/**
 * File for class AllegroStructArchiveRefundsListTypeStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructArchiveRefundsListTypeStruct originally named ArchiveRefundsListTypeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructArchiveRefundsListTypeStruct extends AllegroWsdlClass
{
    /**
     * The refundId
     * @var int
     */
    public $refundId;
    /**
     * The buyerId
     * @var int
     */
    public $buyerId;
    /**
     * The buyerLogin
     * @var string
     */
    public $buyerLogin;
    /**
     * Constructor method for ArchiveRefundsListTypeStruct
     * @see parent::__construct()
     * @param int $_refundId
     * @param int $_buyerId
     * @param string $_buyerLogin
     * @return AllegroStructArchiveRefundsListTypeStruct
     */
    public function __construct($_refundId = NULL,$_buyerId = NULL,$_buyerLogin = NULL)
    {
        parent::__construct(array('refundId'=>$_refundId,'buyerId'=>$_buyerId,'buyerLogin'=>$_buyerLogin),false);
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
     * Get buyerId value
     * @return int|null
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }
    /**
     * Set buyerId value
     * @param int $_buyerId the buyerId
     * @return int
     */
    public function setBuyerId($_buyerId)
    {
        return ($this->buyerId = $_buyerId);
    }
    /**
     * Get buyerLogin value
     * @return string|null
     */
    public function getBuyerLogin()
    {
        return $this->buyerLogin;
    }
    /**
     * Set buyerLogin value
     * @param string $_buyerLogin the buyerLogin
     * @return string
     */
    public function setBuyerLogin($_buyerLogin)
    {
        return ($this->buyerLogin = $_buyerLogin);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructArchiveRefundsListTypeStruct
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
