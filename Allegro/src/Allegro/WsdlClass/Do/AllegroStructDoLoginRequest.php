<?php
/**
 * File for class AllegroStructDoLoginRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoLoginRequest originally named DoLoginRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoLoginRequest extends AllegroWsdlClass
{
    /**
     * The userLogin
     * @var string
     */
    public $userLogin;
    /**
     * The userPassword
     * @var string
     */
    public $userPassword;
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
     * Constructor method for DoLoginRequest
     * @see parent::__construct()
     * @param string $_userLogin
     * @param string $_userPassword
     * @param int $_countryCode
     * @param string $_webapiKey
     * @param long $_localVersion
     * @return AllegroStructDoLoginRequest
     */
    public function __construct($_userLogin = NULL,$_userPassword = NULL,$_countryCode = NULL,$_webapiKey = NULL,$_localVersion = NULL)
    {
        parent::__construct(array('userLogin'=>$_userLogin,'userPassword'=>$_userPassword,'countryCode'=>$_countryCode,'webapiKey'=>$_webapiKey,'localVersion'=>$_localVersion),false);
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
     * Get userPassword value
     * @return string|null
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }
    /**
     * Set userPassword value
     * @param string $_userPassword the userPassword
     * @return string
     */
    public function setUserPassword($_userPassword)
    {
        return ($this->userPassword = $_userPassword);
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
     * @return AllegroStructDoLoginRequest
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
