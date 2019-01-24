<?php
/**
 * File for class AllegroStructMyContactList
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructMyContactList originally named MyContactList
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructMyContactList extends AllegroWsdlClass
{
    /**
     * The contactUserId
     * @var int
     */
    public $contactUserId;
    /**
     * The contactNick
     * @var string
     */
    public $contactNick;
    /**
     * The contactFirstName
     * @var string
     */
    public $contactFirstName;
    /**
     * The contactLastName
     * @var string
     */
    public $contactLastName;
    /**
     * The contactCompany
     * @var string
     */
    public $contactCompany;
    /**
     * The contactEmail
     * @var string
     */
    public $contactEmail;
    /**
     * The contactStreet
     * @var string
     */
    public $contactStreet;
    /**
     * The contactPostcode
     * @var string
     */
    public $contactPostcode;
    /**
     * The contactCity
     * @var string
     */
    public $contactCity;
    /**
     * The contactCountry
     * @var string
     */
    public $contactCountry;
    /**
     * The contactPhone
     * @var string
     */
    public $contactPhone;
    /**
     * The contactPhone2
     * @var string
     */
    public $contactPhone2;
    /**
     * The contactRating
     * @var string
     */
    public $contactRating;
    /**
     * The contactBlocked
     * @var string
     */
    public $contactBlocked;
    /**
     * Constructor method for MyContactList
     * @see parent::__construct()
     * @param int $_contactUserId
     * @param string $_contactNick
     * @param string $_contactFirstName
     * @param string $_contactLastName
     * @param string $_contactCompany
     * @param string $_contactEmail
     * @param string $_contactStreet
     * @param string $_contactPostcode
     * @param string $_contactCity
     * @param string $_contactCountry
     * @param string $_contactPhone
     * @param string $_contactPhone2
     * @param string $_contactRating
     * @param string $_contactBlocked
     * @return AllegroStructMyContactList
     */
    public function __construct($_contactUserId = NULL,$_contactNick = NULL,$_contactFirstName = NULL,$_contactLastName = NULL,$_contactCompany = NULL,$_contactEmail = NULL,$_contactStreet = NULL,$_contactPostcode = NULL,$_contactCity = NULL,$_contactCountry = NULL,$_contactPhone = NULL,$_contactPhone2 = NULL,$_contactRating = NULL,$_contactBlocked = NULL)
    {
        parent::__construct(array('contactUserId'=>$_contactUserId,'contactNick'=>$_contactNick,'contactFirstName'=>$_contactFirstName,'contactLastName'=>$_contactLastName,'contactCompany'=>$_contactCompany,'contactEmail'=>$_contactEmail,'contactStreet'=>$_contactStreet,'contactPostcode'=>$_contactPostcode,'contactCity'=>$_contactCity,'contactCountry'=>$_contactCountry,'contactPhone'=>$_contactPhone,'contactPhone2'=>$_contactPhone2,'contactRating'=>$_contactRating,'contactBlocked'=>$_contactBlocked),false);
    }
    /**
     * Get contactUserId value
     * @return int|null
     */
    public function getContactUserId()
    {
        return $this->contactUserId;
    }
    /**
     * Set contactUserId value
     * @param int $_contactUserId the contactUserId
     * @return int
     */
    public function setContactUserId($_contactUserId)
    {
        return ($this->contactUserId = $_contactUserId);
    }
    /**
     * Get contactNick value
     * @return string|null
     */
    public function getContactNick()
    {
        return $this->contactNick;
    }
    /**
     * Set contactNick value
     * @param string $_contactNick the contactNick
     * @return string
     */
    public function setContactNick($_contactNick)
    {
        return ($this->contactNick = $_contactNick);
    }
    /**
     * Get contactFirstName value
     * @return string|null
     */
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }
    /**
     * Set contactFirstName value
     * @param string $_contactFirstName the contactFirstName
     * @return string
     */
    public function setContactFirstName($_contactFirstName)
    {
        return ($this->contactFirstName = $_contactFirstName);
    }
    /**
     * Get contactLastName value
     * @return string|null
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
    }
    /**
     * Set contactLastName value
     * @param string $_contactLastName the contactLastName
     * @return string
     */
    public function setContactLastName($_contactLastName)
    {
        return ($this->contactLastName = $_contactLastName);
    }
    /**
     * Get contactCompany value
     * @return string|null
     */
    public function getContactCompany()
    {
        return $this->contactCompany;
    }
    /**
     * Set contactCompany value
     * @param string $_contactCompany the contactCompany
     * @return string
     */
    public function setContactCompany($_contactCompany)
    {
        return ($this->contactCompany = $_contactCompany);
    }
    /**
     * Get contactEmail value
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }
    /**
     * Set contactEmail value
     * @param string $_contactEmail the contactEmail
     * @return string
     */
    public function setContactEmail($_contactEmail)
    {
        return ($this->contactEmail = $_contactEmail);
    }
    /**
     * Get contactStreet value
     * @return string|null
     */
    public function getContactStreet()
    {
        return $this->contactStreet;
    }
    /**
     * Set contactStreet value
     * @param string $_contactStreet the contactStreet
     * @return string
     */
    public function setContactStreet($_contactStreet)
    {
        return ($this->contactStreet = $_contactStreet);
    }
    /**
     * Get contactPostcode value
     * @return string|null
     */
    public function getContactPostcode()
    {
        return $this->contactPostcode;
    }
    /**
     * Set contactPostcode value
     * @param string $_contactPostcode the contactPostcode
     * @return string
     */
    public function setContactPostcode($_contactPostcode)
    {
        return ($this->contactPostcode = $_contactPostcode);
    }
    /**
     * Get contactCity value
     * @return string|null
     */
    public function getContactCity()
    {
        return $this->contactCity;
    }
    /**
     * Set contactCity value
     * @param string $_contactCity the contactCity
     * @return string
     */
    public function setContactCity($_contactCity)
    {
        return ($this->contactCity = $_contactCity);
    }
    /**
     * Get contactCountry value
     * @return string|null
     */
    public function getContactCountry()
    {
        return $this->contactCountry;
    }
    /**
     * Set contactCountry value
     * @param string $_contactCountry the contactCountry
     * @return string
     */
    public function setContactCountry($_contactCountry)
    {
        return ($this->contactCountry = $_contactCountry);
    }
    /**
     * Get contactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }
    /**
     * Set contactPhone value
     * @param string $_contactPhone the contactPhone
     * @return string
     */
    public function setContactPhone($_contactPhone)
    {
        return ($this->contactPhone = $_contactPhone);
    }
    /**
     * Get contactPhone2 value
     * @return string|null
     */
    public function getContactPhone2()
    {
        return $this->contactPhone2;
    }
    /**
     * Set contactPhone2 value
     * @param string $_contactPhone2 the contactPhone2
     * @return string
     */
    public function setContactPhone2($_contactPhone2)
    {
        return ($this->contactPhone2 = $_contactPhone2);
    }
    /**
     * Get contactRating value
     * @return string|null
     */
    public function getContactRating()
    {
        return $this->contactRating;
    }
    /**
     * Set contactRating value
     * @param string $_contactRating the contactRating
     * @return string
     */
    public function setContactRating($_contactRating)
    {
        return ($this->contactRating = $_contactRating);
    }
    /**
     * Get contactBlocked value
     * @return string|null
     */
    public function getContactBlocked()
    {
        return $this->contactBlocked;
    }
    /**
     * Set contactBlocked value
     * @param string $_contactBlocked the contactBlocked
     * @return string
     */
    public function setContactBlocked($_contactBlocked)
    {
        return ($this->contactBlocked = $_contactBlocked);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructMyContactList
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
