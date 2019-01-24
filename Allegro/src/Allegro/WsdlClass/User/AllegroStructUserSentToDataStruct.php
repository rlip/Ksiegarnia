<?php
/**
 * File for class AllegroStructUserSentToDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserSentToDataStruct originally named UserSentToDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserSentToDataStruct extends AllegroWsdlClass
{
    /**
     * The userId
     * @var long
     */
    public $userId;
    /**
     * The userFirstName
     * @var string
     */
    public $userFirstName;
    /**
     * The userLastName
     * @var string
     */
    public $userLastName;
    /**
     * The userCompany
     * @var string
     */
    public $userCompany;
    /**
     * The userCountryId
     * @var int
     */
    public $userCountryId;
    /**
     * The userPostcode
     * @var string
     */
    public $userPostcode;
    /**
     * The userCity
     * @var string
     */
    public $userCity;
    /**
     * The userAddress
     * @var string
     */
    public $userAddress;
    /**
     * Constructor method for UserSentToDataStruct
     * @see parent::__construct()
     * @param long $_userId
     * @param string $_userFirstName
     * @param string $_userLastName
     * @param string $_userCompany
     * @param int $_userCountryId
     * @param string $_userPostcode
     * @param string $_userCity
     * @param string $_userAddress
     * @return AllegroStructUserSentToDataStruct
     */
    public function __construct($_userId = NULL,$_userFirstName = NULL,$_userLastName = NULL,$_userCompany = NULL,$_userCountryId = NULL,$_userPostcode = NULL,$_userCity = NULL,$_userAddress = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'userFirstName'=>$_userFirstName,'userLastName'=>$_userLastName,'userCompany'=>$_userCompany,'userCountryId'=>$_userCountryId,'userPostcode'=>$_userPostcode,'userCity'=>$_userCity,'userAddress'=>$_userAddress),false);
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
     * Get userFirstName value
     * @return string|null
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }
    /**
     * Set userFirstName value
     * @param string $_userFirstName the userFirstName
     * @return string
     */
    public function setUserFirstName($_userFirstName)
    {
        return ($this->userFirstName = $_userFirstName);
    }
    /**
     * Get userLastName value
     * @return string|null
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }
    /**
     * Set userLastName value
     * @param string $_userLastName the userLastName
     * @return string
     */
    public function setUserLastName($_userLastName)
    {
        return ($this->userLastName = $_userLastName);
    }
    /**
     * Get userCompany value
     * @return string|null
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }
    /**
     * Set userCompany value
     * @param string $_userCompany the userCompany
     * @return string
     */
    public function setUserCompany($_userCompany)
    {
        return ($this->userCompany = $_userCompany);
    }
    /**
     * Get userCountryId value
     * @return int|null
     */
    public function getUserCountryId()
    {
        return $this->userCountryId;
    }
    /**
     * Set userCountryId value
     * @param int $_userCountryId the userCountryId
     * @return int
     */
    public function setUserCountryId($_userCountryId)
    {
        return ($this->userCountryId = $_userCountryId);
    }
    /**
     * Get userPostcode value
     * @return string|null
     */
    public function getUserPostcode()
    {
        return $this->userPostcode;
    }
    /**
     * Set userPostcode value
     * @param string $_userPostcode the userPostcode
     * @return string
     */
    public function setUserPostcode($_userPostcode)
    {
        return ($this->userPostcode = $_userPostcode);
    }
    /**
     * Get userCity value
     * @return string|null
     */
    public function getUserCity()
    {
        return $this->userCity;
    }
    /**
     * Set userCity value
     * @param string $_userCity the userCity
     * @return string
     */
    public function setUserCity($_userCity)
    {
        return ($this->userCity = $_userCity);
    }
    /**
     * Get userAddress value
     * @return string|null
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }
    /**
     * Set userAddress value
     * @param string $_userAddress the userAddress
     * @return string
     */
    public function setUserAddress($_userAddress)
    {
        return ($this->userAddress = $_userAddress);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserSentToDataStruct
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
