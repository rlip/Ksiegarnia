<?php
/**
 * File for class AllegroStructDoLoginEncRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoLoginEncRequest originally named DoLoginEncRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoLoginEncRequest extends AllegroWsdlClass
{
    /**
     * The userLogin
     * @var string
     */
    public $userLogin;
    /**
     * The userHashPassword
     * @var string
     */
    public $userHashPassword;
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
     * The localVersion
     * @var long
     */
    public $localVersion;
    /**
     * Constructor method for DoLoginEncRequest
     * @see parent::__construct()
     * @param string $_userLogin
     * @param string $_userHashPassword
     * @param int $_countryCode
     * @param string $_webapiKey
     * @param long $_localVersion
     * @return AllegroStructDoLoginEncRequest
     */
    public function __construct($_userLogin = NULL,$_userHashPassword = NULL,$_countryCode = NULL,$_webapiKey = NULL,$_localVersion = NULL)
    {
        parent::__construct(array('userLogin'=>$_userLogin,'userHashPassword'=>$_userHashPassword,'countryCode'=>$_countryCode,'webapiKey'=>$_webapiKey,'localVersion'=>$_localVersion),false);
    }
    /**
     * Get userLogin value
     * @return string|null
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }
    /**
     * Set userLogin value
     * @param string $_userLogin the userLogin
     * @return string
     */
    public function setUserLogin($_userLogin)
    {
        return ($this->userLogin = $_userLogin);
    }
    /**
     * Get userHashPassword value
     * @return string|null
     */
    public function getUserHashPassword()
    {
        return $this->userHashPassword;
    }
    /**
     * Set userHashPassword value
     * @param string $_userHashPassword the userHashPassword
     * @return string
     */
    public function setUserHashPassword($_userHashPassword)
    {
        return ($this->userHashPassword = $_userHashPassword);
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
     * Get localVersion value
     * @return long|null
     */
    public function getLocalVersion()
    {
        return $this->localVersion;
    }
    /**
     * Set localVersion value
     * @param long $_localVersion the localVersion
     * @return long
     */
    public function setLocalVersion($_localVersion)
    {
        return ($this->localVersion = $_localVersion);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoLoginEncRequest
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
