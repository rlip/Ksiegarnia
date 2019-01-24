<?php
/**
 * File for class AllegroStructUserInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserInfoStruct originally named UserInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserInfoStruct extends AllegroWsdlClass
{
    /**
     * The userId
     * @var int
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
     * The userIcons
     * @var int
     */
    public $userIcons;
    /**
     * The userCountry
     * @var int
     */
    public $userCountry;
    /**
     * Constructor method for UserInfoStruct
     * @see parent::__construct()
     * @param int $_userId
     * @param string $_userLogin
     * @param int $_userRating
     * @param int $_userIcons
     * @param int $_userCountry
     * @return AllegroStructUserInfoStruct
     */
    public function __construct($_userId = NULL,$_userLogin = NULL,$_userRating = NULL,$_userIcons = NULL,$_userCountry = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'userLogin'=>$_userLogin,'userRating'=>$_userRating,'userIcons'=>$_userIcons,'userCountry'=>$_userCountry),false);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $_userId the userId
     * @return int
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
     * Get userIcons value
     * @return int|null
     */
    public function getUserIcons()
    {
        return $this->userIcons;
    }
    /**
     * Set userIcons value
     * @param int $_userIcons the userIcons
     * @return int
     */
    public function setUserIcons($_userIcons)
    {
        return ($this->userIcons = $_userIcons);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserInfoStruct
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
