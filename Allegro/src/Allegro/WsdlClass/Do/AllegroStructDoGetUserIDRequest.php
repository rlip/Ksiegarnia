<?php
/**
 * File for class AllegroStructDoGetUserIDRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetUserIDRequest originally named DoGetUserIDRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetUserIDRequest extends AllegroWsdlClass
{
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The userLogin
     * @var string
     */
    public $userLogin;
    /**
     * The userEmail
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $userEmail;
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * Constructor method for DoGetUserIDRequest
     * @see parent::__construct()
     * @param int $_countryId
     * @param string $_userLogin
     * @param string $_userEmail
     * @param string $_webapiKey
     * @return AllegroStructDoGetUserIDRequest
     */
    public function __construct($_countryId = NULL,$_userLogin = NULL,$_userEmail = NULL,$_webapiKey = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'userLogin'=>$_userLogin,'userEmail'=>$_userEmail,'webapiKey'=>$_webapiKey),false);
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
     * Get userEmail value
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
    /**
     * Set userEmail value
     * @param string $_userEmail the userEmail
     * @return string
     */
    public function setUserEmail($_userEmail)
    {
        return ($this->userEmail = $_userEmail);
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
     * @return AllegroStructDoGetUserIDRequest
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
