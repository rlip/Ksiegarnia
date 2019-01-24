<?php
/**
 * File for class AllegroStructPaymentSellersStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPaymentSellersStruct originally named PaymentSellersStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPaymentSellersStruct extends AllegroWsdlClass
{
    /**
     * The payTransSellerId
     * @var int
     */
    public $payTransSellerId;
    /**
     * The payTransSellerName
     * @var string
     */
    public $payTransSellerName;
    /**
     * The payTransItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPaymentitemsstruct
     */
    public $payTransItems;
    /**
     * The payTransSellerPostageAmount
     * @var float
     */
    public $payTransSellerPostageAmount;
    /**
     * Constructor method for PaymentSellersStruct
     * @see parent::__construct()
     * @param int $_payTransSellerId
     * @param string $_payTransSellerName
     * @param AllegroStructArrayOfPaymentitemsstruct $_payTransItems
     * @param float $_payTransSellerPostageAmount
     * @return AllegroStructPaymentSellersStruct
     */
    public function __construct($_payTransSellerId = NULL,$_payTransSellerName = NULL,$_payTransItems = NULL,$_payTransSellerPostageAmount = NULL)
    {
        parent::__construct(array('payTransSellerId'=>$_payTransSellerId,'payTransSellerName'=>$_payTransSellerName,'payTransItems'=>($_payTransItems instanceof AllegroStructArrayOfPaymentitemsstruct)?$_payTransItems:new AllegroStructArrayOfPaymentitemsstruct($_payTransItems),'payTransSellerPostageAmount'=>$_payTransSellerPostageAmount),false);
    }
    /**
     * Get payTransSellerId value
     * @return int|null
     */
    public function getPayTransSellerId()
    {
        return $this->payTransSellerId;
    }
    /**
     * Set payTransSellerId value
     * @param int $_payTransSellerId the payTransSellerId
     * @return int
     */
    public function setPayTransSellerId($_payTransSellerId)
    {
        return ($this->payTransSellerId = $_payTransSellerId);
    }
    /**
     * Get payTransSellerName value
     * @return string|null
     */
    public function getPayTransSellerName()
    {
        return $this->payTransSellerName;
    }
    /**
     * Set payTransSellerName value
     * @param string $_payTransSellerName the payTransSellerName
     * @return string
     */
    public function setPayTransSellerName($_payTransSellerName)
    {
        return ($this->payTransSellerName = $_payTransSellerName);
    }
    /**
     * Get payTransItems value
     * @return AllegroStructArrayOfPaymentitemsstruct|null
     */
    public function getPayTransItems()
    {
        return $this->payTransItems;
    }
    /**
     * Set payTransItems value
     * @param AllegroStructArrayOfPaymentitemsstruct $_payTransItems the payTransItems
     * @return AllegroStructArrayOfPaymentitemsstruct
     */
    public function setPayTransItems($_payTransItems)
    {
        return ($this->payTransItems = $_payTransItems);
    }
    /**
     * Get payTransSellerPostageAmount value
     * @return float|null
     */
    public function getPayTransSellerPostageAmount()
    {
        return $this->payTransSellerPostageAmount;
    }
    /**
     * Set payTransSellerPostageAmount value
     * @param float $_payTransSellerPostageAmount the payTransSellerPostageAmount
     * @return float
     */
    public function setPayTransSellerPostageAmount($_payTransSellerPostageAmount)
    {
        return ($this->payTransSellerPostageAmount = $_payTransSellerPostageAmount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPaymentSellersStruct
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
