<?php
/**
 * File for class AllegroStructDoGetSitesFlagInfoRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSitesFlagInfoRequest originally named DoGetSitesFlagInfoRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSitesFlagInfoRequest extends AllegroWsdlClass
{
    /**
     * The countryCode
     * @var int
     */
    public $countryCode;
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * Constructor method for DoGetSitesFlagInfoRequest
     * @see parent::__construct()
     * @param int $_countryCode
     * @param string $_webapiKey
     * @return AllegroStructDoGetSitesFlagInfoRequest
     */
    public function __construct($_countryCode = NULL,$_webapiKey = NULL)
    {
        parent::__construct(array('countryCode'=>$_countryCode,'webapiKey'=>$_webapiKey),false);
    }
    /**
     * Get countryCode value
     * @return int|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param int $_countryCode the countryCode
     * @return int
     */
    public function setCountryCode($_countryCode)
    {
        return ($this->countryCode = $_countryCode);
    }
    /**
     * Get webapiKey value
     * @return string|null
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }
    /**
     * Set webapiKey value
     * @param string $_webapiKey the webapiKey
     * @return string
     */
    public function setWebapiKey($_webapiKey)
    {
        return ($this->webapiKey = $_webapiKey);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSitesFlagInfoRequest
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
