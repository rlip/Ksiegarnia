<?php
/**
 * File for class AllegroStructDoGetSellRatingReasonsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellRatingReasonsRequest originally named DoGetSellRatingReasonsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellRatingReasonsRequest extends AllegroWsdlClass
{
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The countryCode
     * @var int
     */
    public $countryCode;
    /**
     * Constructor method for DoGetSellRatingReasonsRequest
     * @see parent::__construct()
     * @param string $_webapiKey
     * @param int $_countryCode
     * @return AllegroStructDoGetSellRatingReasonsRequest
     */
    public function __construct($_webapiKey = NULL,$_countryCode = NULL)
    {
        parent::__construct(array('webapiKey'=>$_webapiKey,'countryCode'=>$_countryCode),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellRatingReasonsRequest
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
