<?php
/**
 * File for class AllegroStructDoLoginWithAccessTokenRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoLoginWithAccessTokenRequest originally named DoLoginWithAccessTokenRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoLoginWithAccessTokenRequest extends AllegroWsdlClass
{
    /**
     * The accessToken
     * @var string
     */
    public $accessToken;
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
     * Constructor method for DoLoginWithAccessTokenRequest
     * @see parent::__construct()
     * @param string $_accessToken
     * @param int $_countryCode
     * @param string $_webapiKey
     * @return AllegroStructDoLoginWithAccessTokenRequest
     */
    public function __construct($_accessToken = NULL,$_countryCode = NULL,$_webapiKey = NULL)
    {
        parent::__construct(array('accessToken'=>$_accessToken,'countryCode'=>$_countryCode,'webapiKey'=>$_webapiKey),false);
    }
    /**
     * Get accessToken value
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    /**
     * Set accessToken value
     * @param string $_accessToken the accessToken
     * @return string
     */
    public function setAccessToken($_accessToken)
    {
        return ($this->accessToken = $_accessToken);
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
     * @return AllegroStructDoLoginWithAccessTokenRequest
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
