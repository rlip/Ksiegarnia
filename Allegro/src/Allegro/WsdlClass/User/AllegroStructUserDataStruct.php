<?php
/**
 * File for class AllegroStructUserDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserDataStruct originally named UserDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserDataStruct extends AllegroWsdlClass
{
    /**
     * The userId
     * @var long
     */
    public $userId;
    /**
     * The userLogin
     * @var string
     */
    public $userLogin;
    /**
     * The userRating
     * @var int
     */
    public $userRating;
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
     * The userMaidenName
     * @var string
     */
    public $userMaidenName;
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
     * The userStateId
     * @var int
     */
    public $userStateId;
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
     * The userEmail
     * @var string
     */
    public $userEmail;
    /**
     * The userPhone
     * @var string
     */
    public $userPhone;
    /**
     * The userPhone2
     * @var string
     */
    public $userPhone2;
    /**
     * The userSsStatus
     * @var int
     */
    public $userSsStatus;
    /**
     * The siteCountryId
     * @var int
     */
    public $siteCountryId;
    /**
     * The userJuniorStatus
     * @var int
     */
    public $userJuniorStatus;
    /**
     * The userBirthDate
     * @var long
     */
    public $userBirthDate;
    /**
     * The userHasShop
     * @var int
     */
    public $userHasShop;
    /**
     * The userCompanyIcon
     * @var int
     */
    public $userCompanyIcon;
    /**
     * The userIsAllegroStandard
     * @var int
     */
    public $userIsAllegroStandard;
    /**
     * Constructor method for UserDataStruct
     * @see parent::__construct()
     * @param long $_userId
     * @param string $_userLogin
     * @param int $_userRating
     * @param string $_userFirstName
     * @param string $_userLastName
     * @param string $_userMaidenName
     * @param string $_userCompany
     * @param int $_userCountryId
     * @param int $_userStateId
     * @param string $_userPostcode
     * @param string $_userCity
     * @param string $_userAddress
     * @param string $_userEmail
     * @param string $_userPhone
     * @param string $_userPhone2
     * @param int $_userSsStatus
     * @param int $_siteCountryId
     * @param int $_userJuniorStatus
     * @param long $_userBirthDate
     * @param int $_userHasShop
     * @param int $_userCompanyIcon
     * @param int $_userIsAllegroStandard
     * @return AllegroStructUserDataStruct
     */
    public function __construct($_userId = NULL,$_userLogin = NULL,$_userRating = NULL,$_userFirstName = NULL,$_userLastName = NULL,$_userMaidenName = NULL,$_userCompany = NULL,$_userCountryId = NULL,$_userStateId = NULL,$_userPostcode = NULL,$_userCity = NULL,$_userAddress = NULL,$_userEmail = NULL,$_userPhone = NULL,$_userPhone2 = NULL,$_userSsStatus = NULL,$_siteCountryId = NULL,$_userJuniorStatus = NULL,$_userBirthDate = NULL,$_userHasShop = NULL,$_userCompanyIcon = NULL,$_userIsAllegroStandard = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'userLogin'=>$_userLogin,'userRating'=>$_userRating,'userFirstName'=>$_userFirstName,'userLastName'=>$_userLastName,'userMaidenName'=>$_userMaidenName,'userCompany'=>$_userCompany,'userCountryId'=>$_userCountryId,'userStateId'=>$_userStateId,'userPostcode'=>$_userPostcode,'userCity'=>$_userCity,'userAddress'=>$_userAddress,'userEmail'=>$_userEmail,'userPhone'=>$_userPhone,'userPhone2'=>$_userPhone2,'userSsStatus'=>$_userSsStatus,'siteCountryId'=>$_siteCountryId,'userJuniorStatus'=>$_userJuniorStatus,'userBirthDate'=>$_userBirthDate,'userHasShop'=>$_userHasShop,'userCompanyIcon'=>$_userCompanyIcon,'userIsAllegroStandard'=>$_userIsAllegroStandard),false);
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
     * Get userRating value
     * @return int|null
     */
    public function getUserRating()
    {
        return $this->userRating;
    }
    /**
     * Set userRating value
     * @param int $_userRating the userRating
     * @return int
     */
    public function setUserRating($_userRating)
    {
        return ($this->userRating = $_userRating);
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
     * Get userMaidenName value
     * @return string|null
     */
    public function getUserMaidenName()
    {
        return $this->userMaidenName;
    }
    /**
     * Set userMaidenName value
     * @param string $_userMaidenName the userMaidenName
     * @return string
     */
    public function setUserMaidenName($_userMaidenName)
    {
        return ($this->userMaidenName = $_userMaidenName);
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
     * Get userStateId value
     * @return int|null
     */
    public function getUserStateId()
    {
        return $this->userStateId;
    }
    /**
     * Set userStateId value
     * @param int $_userStateId the userStateId
     * @return int
     */
    public function setUserStateId($_userStateId)
    {
        return ($this->userStateId = $_userStateId);
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
     * Get userPhone value
     * @return string|null
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }
    /**
     * Set userPhone value
     * @param string $_userPhone the userPhone
     * @return string
     */
    public function setUserPhone($_userPhone)
    {
        return ($this->userPhone = $_userPhone);
    }
    /**
     * Get userPhone2 value
     * @return string|null
     */
    public function getUserPhone2()
    {
        return $this->userPhone2;
    }
    /**
     * Set userPhone2 value
     * @param string $_userPhone2 the userPhone2
     * @return string
     */
    public function setUserPhone2($_userPhone2)
    {
        return ($this->userPhone2 = $_userPhone2);
    }
    /**
     * Get userSsStatus value
     * @return int|null
     */
    public function getUserSsStatus()
    {
        return $this->userSsStatus;
    }
    /**
     * Set userSsStatus value
     * @param int $_userSsStatus the userSsStatus
     * @return int
     */
    public function setUserSsStatus($_userSsStatus)
    {
        return ($this->userSsStatus = $_userSsStatus);
    }
    /**
     * Get siteCountryId value
     * @return int|null
     */
    public function getSiteCountryId()
    {
        return $this->siteCountryId;
    }
    /**
     * Set siteCountryId value
     * @param int $_siteCountryId the siteCountryId
     * @return int
     */
    public function setSiteCountryId($_siteCountryId)
    {
        return ($this->siteCountryId = $_siteCountryId);
    }
    /**
     * Get userJuniorStatus value
     * @return int|null
     */
    public function getUserJuniorStatus()
    {
        return $this->userJuniorStatus;
    }
    /**
     * Set userJuniorStatus value
     * @param int $_userJuniorStatus the userJuniorStatus
     * @return int
     */
    public function setUserJuniorStatus($_userJuniorStatus)
    {
        return ($this->userJuniorStatus = $_userJuniorStatus);
    }
    /**
     * Get userBirthDate value
     * @return long|null
     */
    public function getUserBirthDate()
    {
        return $this->userBirthDate;
    }
    /**
     * Set userBirthDate value
     * @param long $_userBirthDate the userBirthDate
     * @return long
     */
    public function setUserBirthDate($_userBirthDate)
    {
        return ($this->userBirthDate = $_userBirthDate);
    }
    /**
     * Get userHasShop value
     * @return int|null
     */
    public function getUserHasShop()
    {
        return $this->userHasShop;
    }
    /**
     * Set userHasShop value
     * @param int $_userHasShop the userHasShop
     * @return int
     */
    public function setUserHasShop($_userHasShop)
    {
        return ($this->userHasShop = $_userHasShop);
    }
    /**
     * Get userCompanyIcon value
     * @return int|null
     */
    public function getUserCompanyIcon()
    {
        return $this->userCompanyIcon;
    }
    /**
     * Set userCompanyIcon value
     * @param int $_userCompanyIcon the userCompanyIcon
     * @return int
     */
    public function setUserCompanyIcon($_userCompanyIcon)
    {
        return ($this->userCompanyIcon = $_userCompanyIcon);
    }
    /**
     * Get userIsAllegroStandard value
     * @return int|null
     */
    public function getUserIsAllegroStandard()
    {
        return $this->userIsAllegroStandard;
    }
    /**
     * Set userIsAllegroStandard value
     * @param int $_userIsAllegroStandard the userIsAllegroStandard
     * @return int
     */
    public function setUserIsAllegroStandard($_userIsAllegroStandard)
    {
        return ($this->userIsAllegroStandard = $_userIsAllegroStandard);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserDataStruct
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
