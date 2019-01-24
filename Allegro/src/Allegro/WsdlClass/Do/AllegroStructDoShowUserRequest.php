<?php
/**
 * File for class AllegroStructDoShowUserRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoShowUserRequest originally named DoShowUserRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoShowUserRequest extends AllegroWsdlClass
{
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The userId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $userId;
    /**
     * The userLogin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $userLogin;
    /**
     * Constructor method for DoShowUserRequest
     * @see parent::__construct()
     * @param string $_webapiKey
     * @param int $_countryId
     * @param long $_userId
     * @param string $_userLogin
     * @return AllegroStructDoShowUserRequest
     */
    public function __construct($_webapiKey = NULL,$_countryId = NULL,$_userId = NULL,$_userLogin = NULL)
    {
        parent::__construct(array('webapiKey'=>$_webapiKey,'countryId'=>$_countryId,'userId'=>$_userId,'userLogin'=>$_userLogin),false);
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
     * Get userId value
     * @return long|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param long $_userId the userId
     * @return long
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoShowUserRequest
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
