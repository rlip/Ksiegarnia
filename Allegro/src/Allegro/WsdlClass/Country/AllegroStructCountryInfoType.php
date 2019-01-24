<?php
/**
 * File for class AllegroStructCountryInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCountryInfoType originally named CountryInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCountryInfoType extends AllegroWsdlClass
{
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The countryName
     * @var string
     */
    public $countryName;
    /**
     * Constructor method for CountryInfoType
     * @see parent::__construct()
     * @param int $_countryId
     * @param string $_countryName
     * @return AllegroStructCountryInfoType
     */
    public function __construct($_countryId = NULL,$_countryName = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'countryName'=>$_countryName),false);
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $_countryId the countryId
     * @return int
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get countryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->countryName;
    }
    /**
     * Set countryName value
     * @param string $_countryName the countryName
     * @return string
     */
    public function setCountryName($_countryName)
    {
        return ($this->countryName = $_countryName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCountryInfoType
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
