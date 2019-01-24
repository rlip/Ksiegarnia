<?php
/**
 * File for class AllegroStructItemSurchargeStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemSurchargeStruct originally named ItemSurchargeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemSurchargeStruct extends AllegroWsdlClass
{
    /**
     * The surchargeDescription
     * @var string
     */
    public $surchargeDescription;
    /**
     * The surchargeAmount
     * @var AllegroStructAmountStruct
     */
    public $surchargeAmount;
    /**
     * Constructor method for ItemSurchargeStruct
     * @see parent::__construct()
     * @param string $_surchargeDescription
     * @param AllegroStructAmountStruct $_surchargeAmount
     * @return AllegroStructItemSurchargeStruct
     */
    public function __construct($_surchargeDescription = NULL,$_surchargeAmount = NULL)
    {
        parent::__construct(array('surchargeDescription'=>$_surchargeDescription,'surchargeAmount'=>$_surchargeAmount),false);
    }
    /**
     * Get surchargeDescription value
     * @return string|null
     */
    public function getSurchargeDescription()
    {
        return $this->surchargeDescription;
    }
    /**
     * Set surchargeDescription value
     * @param string $_surchargeDescription the surchargeDescription
     * @return string
     */
    public function setSurchargeDescription($_surchargeDescription)
    {
        return ($this->surchargeDescription = $_surchargeDescription);
    }
    /**
     * Get surchargeAmount value
     * @return AllegroStructAmountStruct|null
     */
    public function getSurchargeAmount()
    {
        return $this->surchargeAmount;
    }
    /**
     * Set surchargeAmount value
     * @param AllegroStructAmountStruct $_surchargeAmount the surchargeAmount
     * @return AllegroStructAmountStruct
     */
    public function setSurchargeAmount($_surchargeAmount)
    {
        return ($this->surchargeAmount = $_surchargeAmount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemSurchargeStruct
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
