<?php
/**
 * File for class AllegroStructPriceCatInfo
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPriceCatInfo originally named PriceCatInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPriceCatInfo extends AllegroWsdlClass
{
    /**
     * The priceMin
     * @var float
     */
    public $priceMin;
    /**
     * The priceMax
     * @var float
     */
    public $priceMax;
    /**
     * Constructor method for PriceCatInfo
     * @see parent::__construct()
     * @param float $_priceMin
     * @param float $_priceMax
     * @return AllegroStructPriceCatInfo
     */
    public function __construct($_priceMin = NULL,$_priceMax = NULL)
    {
        parent::__construct(array('priceMin'=>$_priceMin,'priceMax'=>$_priceMax),false);
    }
    /**
     * Get priceMin value
     * @return float|null
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }
    /**
     * Set priceMin value
     * @param float $_priceMin the priceMin
     * @return float
     */
    public function setPriceMin($_priceMin)
    {
        return ($this->priceMin = $_priceMin);
    }
    /**
     * Get priceMax value
     * @return float|null
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }
    /**
     * Set priceMax value
     * @param float $_priceMax the priceMax
     * @return float
     */
    public function setPriceMax($_priceMax)
    {
        return ($this->priceMax = $_priceMax);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPriceCatInfo
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
