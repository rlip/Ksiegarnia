<?php
/**
 * File for class AllegroStructDoShowUserResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoShowUserResponse originally named doShowUserResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoShowUserResponse extends AllegroWsdlClass
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
     * The userCountry
     * @var int
     */
    public $userCountry;
    /**
     * The userCreateDate
     * @var long
     */
    public $userCreateDate;
    /**
     * The userLoginDate
     * @var long
     */
    public $userLoginDate;
    /**
     * The userRating
     * @var int
     */
    public $userRating;
    /**
     * The userIsNewUser
     * @var int
     */
    public $userIsNewUser;
    /**
     * The userNotActivated
     * @var int
     */
    public $userNotActivated;
    /**
     * The userClosed
     * @var int
     */
    public $userClosed;
    /**
     * The userBlocked
     * @var int
     */
    public $userBlocked;
    /**
     * The userTerminated
     * @var int
     */
    public $userTerminated;
    /**
     * The userHasPage
     * @var int
     */
    public $userHasPage;
    /**
     * The userIsSseller
     * @var int
     */
    public $userIsSseller;
    /**
     * The userIsEco
     * @var int
     */
    public $userIsEco;
    /**
     * The userPositiveFeedback
     * @var AllegroStructShowUserFeedbacks
     */
    public $userPositiveFeedback;
    /**
     * The userNegativeFeedback
     * @var AllegroStructShowUserFeedbacks
     */
    public $userNegativeFeedback;
    /**
     * The userNeutralFeedback
     * @var AllegroStructShowUserFeedbacks
     */
    public $userNeutralFeedback;
    /**
     * The userJuniorStatus
     * @var int
     */
    public $userJuniorStatus;
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
     * The userSellRatingCount
     * @var int
     */
    public $userSellRatingCount;
    /**
     * The userSellRatingAverage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingaveragestruct
     */
    public $userSellRatingAverage;
    /**
     * The userIsAllegroStandard
     * @var int
     */
    public $userIsAllegroStandard;
    /**
     * The userIsB2cSeller
     * @var int
     */
    public $userIsB2cSeller;
    /**
     * Constructor method for doShowUserResponse
     * @see parent::__construct()
     * @param long $_userId
     * @param string $_userLogin
     * @param int $_userCountry
     * @param long $_userCreateDate
     * @param long $_userLoginDate
     * @param int $_userRating
     * @param int $_userIsNewUser
     * @param int $_userNotActivated
     * @param int $_userClosed
     * @param int $_userBlocked
     * @param int $_userTerminated
     * @param int $_userHasPage
     * @param int $_userIsSseller
     * @param int $_userIsEco
     * @param AllegroStructShowUserFeedbacks $_userPositiveFeedback
     * @param AllegroStructShowUserFeedbacks $_userNegativeFeedback
     * @param AllegroStructShowUserFeedbacks $_userNeutralFeedback
     * @param int $_userJuniorStatus
     * @param int $_userHasShop
     * @param int $_userCompanyIcon
     * @param int $_userSellRatingCount
     * @param AllegroStructArrayOfSellratingaveragestruct $_userSellRatingAverage
     * @param int $_userIsAllegroStandard
     * @param int $_userIsB2cSeller
     * @return AllegroStructDoShowUserResponse
     */
    public function __construct($_userId = NULL,$_userLogin = NULL,$_userCountry = NULL,$_userCreateDate = NULL,$_userLoginDate = NULL,$_userRating = NULL,$_userIsNewUser = NULL,$_userNotActivated = NULL,$_userClosed = NULL,$_userBlocked = NULL,$_userTerminated = NULL,$_userHasPage = NULL,$_userIsSseller = NULL,$_userIsEco = NULL,$_userPositiveFeedback = NULL,$_userNegativeFeedback = NULL,$_userNeutralFeedback = NULL,$_userJuniorStatus = NULL,$_userHasShop = NULL,$_userCompanyIcon = NULL,$_userSellRatingCount = NULL,$_userSellRatingAverage = NULL,$_userIsAllegroStandard = NULL,$_userIsB2cSeller = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'userLogin'=>$_userLogin,'userCountry'=>$_userCountry,'userCreateDate'=>$_userCreateDate,'userLoginDate'=>$_userLoginDate,'userRating'=>$_userRating,'userIsNewUser'=>$_userIsNewUser,'userNotActivated'=>$_userNotActivated,'userClosed'=>$_userClosed,'userBlocked'=>$_userBlocked,'userTerminated'=>$_userTerminated,'userHasPage'=>$_userHasPage,'userIsSseller'=>$_userIsSseller,'userIsEco'=>$_userIsEco,'userPositiveFeedback'=>$_userPositiveFeedback,'userNegativeFeedback'=>$_userNegativeFeedback,'userNeutralFeedback'=>$_userNeutralFeedback,'userJuniorStatus'=>$_userJuniorStatus,'userHasShop'=>$_userHasShop,'userCompanyIcon'=>$_userCompanyIcon,'userSellRatingCount'=>$_userSellRatingCount,'userSellRatingAverage'=>($_userSellRatingAverage instanceof AllegroStructArrayOfSellratingaveragestruct)?$_userSellRatingAverage:new AllegroStructArrayOfSellratingaveragestruct($_userSellRatingAverage),'userIsAllegroStandard'=>$_userIsAllegroStandard,'userIsB2cSeller'=>$_userIsB2cSeller),false);
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
     * Get userCountry value
     * @return int|null
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }
    /**
     * Set userCountry value
     * @param int $_userCountry the userCountry
     * @return int
     */
    public function setUserCountry($_userCountry)
    {
        return ($this->userCountry = $_userCountry);
    }
    /**
     * Get userCreateDate value
     * @return long|null
     */
    public function getUserCreateDate()
    {
        return $this->userCreateDate;
    }
    /**
     * Set userCreateDate value
     * @param long $_userCreateDate the userCreateDate
     * @return long
     */
    public function setUserCreateDate($_userCreateDate)
    {
        return ($this->userCreateDate = $_userCreateDate);
    }
    /**
     * Get userLoginDate value
     * @return long|null
     */
    public function getUserLoginDate()
    {
        return $this->userLoginDate;
    }
    /**
     * Set userLoginDate value
     * @param long $_userLoginDate the userLoginDate
     * @return long
     */
    public function setUserLoginDate($_userLoginDate)
    {
        return ($this->userLoginDate = $_userLoginDate);
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
     * Get userIsNewUser value
     * @return int|null
     */
    public function getUserIsNewUser()
    {
        return $this->userIsNewUser;
    }
    /**
     * Set userIsNewUser value
     * @param int $_userIsNewUser the userIsNewUser
     * @return int
     */
    public function setUserIsNewUser($_userIsNewUser)
    {
        return ($this->userIsNewUser = $_userIsNewUser);
    }
    /**
     * Get userNotActivated value
     * @return int|null
     */
    public function getUserNotActivated()
    {
        return $this->userNotActivated;
    }
    /**
     * Set userNotActivated value
     * @param int $_userNotActivated the userNotActivated
     * @return int
     */
    public function setUserNotActivated($_userNotActivated)
    {
        return ($this->userNotActivated = $_userNotActivated);
    }
    /**
     * Get userClosed value
     * @return int|null
     */
    public function getUserClosed()
    {
        return $this->userClosed;
    }
    /**
     * Set userClosed value
     * @param int $_userClosed the userClosed
     * @return int
     */
    public function setUserClosed($_userClosed)
    {
        return ($this->userClosed = $_userClosed);
    }
    /**
     * Get userBlocked value
     * @return int|null
     */
    public function getUserBlocked()
    {
        return $this->userBlocked;
    }
    /**
     * Set userBlocked value
     * @param int $_userBlocked the userBlocked
     * @return int
     */
    public function setUserBlocked($_userBlocked)
    {
        return ($this->userBlocked = $_userBlocked);
    }
    /**
     * Get userTerminated value
     * @return int|null
     */
    public function getUserTerminated()
    {
        return $this->userTerminated;
    }
    /**
     * Set userTerminated value
     * @param int $_userTerminated the userTerminated
     * @return int
     */
    public function setUserTerminated($_userTerminated)
    {
        return ($this->userTerminated = $_userTerminated);
    }
    /**
     * Get userHasPage value
     * @return int|null
     */
    public function getUserHasPage()
    {
        return $this->userHasPage;
    }
    /**
     * Set userHasPage value
     * @param int $_userHasPage the userHasPage
     * @return int
     */
    public function setUserHasPage($_userHasPage)
    {
        return ($this->userHasPage = $_userHasPage);
    }
    /**
     * Get userIsSseller value
     * @return int|null
     */
    public function getUserIsSseller()
    {
        return $this->userIsSseller;
    }
    /**
     * Set userIsSseller value
     * @param int $_userIsSseller the userIsSseller
     * @return int
     */
    public function setUserIsSseller($_userIsSseller)
    {
        return ($this->userIsSseller = $_userIsSseller);
    }
    /**
     * Get userIsEco value
     * @return int|null
     */
    public function getUserIsEco()
    {
        return $this->userIsEco;
    }
    /**
     * Set userIsEco value
     * @param int $_userIsEco the userIsEco
     * @return int
     */
    public function setUserIsEco($_userIsEco)
    {
        return ($this->userIsEco = $_userIsEco);
    }
    /**
     * Get userPositiveFeedback value
     * @return AllegroStructShowUserFeedbacks|null
     */
    public function getUserPositiveFeedback()
    {
        return $this->userPositiveFeedback;
    }
    /**
     * Set userPositiveFeedback value
     * @param AllegroStructShowUserFeedbacks $_userPositiveFeedback the userPositiveFeedback
     * @return AllegroStructShowUserFeedbacks
     */
    public function setUserPositiveFeedback($_userPositiveFeedback)
    {
        return ($this->userPositiveFeedback = $_userPositiveFeedback);
    }
    /**
     * Get userNegativeFeedback value
     * @return AllegroStructShowUserFeedbacks|null
     */
    public function getUserNegativeFeedback()
    {
        return $this->userNegativeFeedback;
    }
    /**
     * Set userNegativeFeedback value
     * @param AllegroStructShowUserFeedbacks $_userNegativeFeedback the userNegativeFeedback
     * @return AllegroStructShowUserFeedbacks
     */
    public function setUserNegativeFeedback($_userNegativeFeedback)
    {
        return ($this->userNegativeFeedback = $_userNegativeFeedback);
    }
    /**
     * Get userNeutralFeedback value
     * @return AllegroStructShowUserFeedbacks|null
     */
    public function getUserNeutralFeedback()
    {
        return $this->userNeutralFeedback;
    }
    /**
     * Set userNeutralFeedback value
     * @param AllegroStructShowUserFeedbacks $_userNeutralFeedback the userNeutralFeedback
     * @return AllegroStructShowUserFeedbacks
     */
    public function setUserNeutralFeedback($_userNeutralFeedback)
    {
        return ($this->userNeutralFeedback = $_userNeutralFeedback);
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
     * Get userSellRatingCount value
     * @return int|null
     */
    public function getUserSellRatingCount()
    {
        return $this->userSellRatingCount;
    }
    /**
     * Set userSellRatingCount value
     * @param int $_userSellRatingCount the userSellRatingCount
     * @return int
     */
    public function setUserSellRatingCount($_userSellRatingCount)
    {
        return ($this->userSellRatingCount = $_userSellRatingCount);
    }
    /**
     * Get userSellRatingAverage value
     * @return AllegroStructArrayOfSellratingaveragestruct|null
     */
    public function getUserSellRatingAverage()
    {
        return $this->userSellRatingAverage;
    }
    /**
     * Set userSellRatingAverage value
     * @param AllegroStructArrayOfSellratingaveragestruct $_userSellRatingAverage the userSellRatingAverage
     * @return AllegroStructArrayOfSellratingaveragestruct
     */
    public function setUserSellRatingAverage($_userSellRatingAverage)
    {
        return ($this->userSellRatingAverage = $_userSellRatingAverage);
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
     * Get userIsB2cSeller value
     * @return int|null
     */
    public function getUserIsB2cSeller()
    {
        return $this->userIsB2cSeller;
    }
    /**
     * Set userIsB2cSeller value
     * @param int $_userIsB2cSeller the userIsB2cSeller
     * @return int
     */
    public function setUserIsB2cSeller($_userIsB2cSeller)
    {
        return ($this->userIsB2cSeller = $_userIsB2cSeller);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoShowUserResponse
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
