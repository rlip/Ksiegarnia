<?php
/**
 * File for class AllegroStructPriceInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPriceInfoType originally named PriceInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPriceInfoType extends AllegroWsdlClass
{
    /**
     * The priceType
     * @var string
     */
    public $priceType;
    /**
     * The priceValue
     * @var float
     */
    public $priceValue;
    /**
     * Constructor method for PriceInfoType
     * @see parent::__construct()
     * @param string $_priceType
     * @param float $_priceValue
     * @return AllegroStructPriceInfoType
     */
    public function __construct($_priceType = NULL,$_priceValue = NULL)
    {
        parent::__construct(array('priceType'=>$_priceType,'priceValue'=>$_priceValue),false);
    }
    /**
     * Get priceType value
     * @return string|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }
    /**
     * Set priceType value
     * @param string $_priceType the priceType
     * @return string
     */
    public function setPriceType($_priceType)
    {
        return ($this->priceType = $_priceType);
    }
    /**
     * Get priceValue value
     * @return float|null
     */
    public function getPriceValue()
    {
        return $this->priceValue;
    }
    /**
     * Set priceValue value
     * @param float $_priceValue the priceValue
     * @return float
     */
    public function setPriceValue($_priceValue)
    {
        return ($this->priceValue = $_priceValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPriceInfoType
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
