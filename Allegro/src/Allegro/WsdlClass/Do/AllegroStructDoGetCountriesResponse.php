<?php
/**
 * File for class AllegroStructDoGetCountriesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetCountriesResponse originally named doGetCountriesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetCountriesResponse extends AllegroWsdlClass
{
    /**
     * The countryArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCountryinfotype
     */
    public $countryArray;
    /**
     * Constructor method for doGetCountriesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfCountryinfotype $_countryArray
     * @return AllegroStructDoGetCountriesResponse
     */
    public function __construct($_countryArray = NULL)
    {
        parent::__construct(array('countryArray'=>($_countryArray instanceof AllegroStructArrayOfCountryinfotype)?$_countryArray:new AllegroStructArrayOfCountryinfotype($_countryArray)),false);
    }
    /**
     * Get countryArray value
     * @return AllegroStructArrayOfCountryinfotype|null
     */
    public function getCountryArray()
    {
        return $this->countryArray;
    }
    /**
     * Set countryArray value
     * @param AllegroStructArrayOfCountryinfotype $_countryArray the countryArray
     * @return AllegroStructArrayOfCountryinfotype
     */
    public function setCountryArray($_countryArray)
    {
        return ($this->countryArray = $_countryArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetCountriesResponse
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
