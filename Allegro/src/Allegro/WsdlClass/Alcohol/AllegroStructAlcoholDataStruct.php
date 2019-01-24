<?php
/**
 * File for class AllegroStructAlcoholDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAlcoholDataStruct originally named AlcoholDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAlcoholDataStruct extends AllegroWsdlClass
{
    /**
     * The alcoholOpeningDate
     * @var string
     */
    public $alcoholOpeningDate;
    /**
     * The alcoholExpirationDate
     * @var string
     */
    public $alcoholExpirationDate;
    /**
     * The alcoholShopName
     * @var string
     */
    public $alcoholShopName;
    /**
     * The alcoholShopAddress
     * @var string
     */
    public $alcoholShopAddress;
    /**
     * The alcoholShopPostcode
     * @var string
     */
    public $alcoholShopPostcode;
    /**
     * The alcoholShopCity
     * @var string
     */
    public $alcoholShopCity;
    /**
     * The alcoholShopCommune
     * @var string
     */
    public $alcoholShopCommune;
    /**
     * The alcoholShopCountryId
     * @var int
     */
    public $alcoholShopCountryId;
    /**
     * The alcoholShopStateId
     * @var int
     */
    public $alcoholShopStateId;
    /**
     * The alcoholPermitNumber
     * @var string
     */
    public $alcoholPermitNumber;
    /**
     * The alcoholPermitAuthority
     * @var string
     */
    public $alcoholPermitAuthority;
    /**
     * The alcoholPermitInfo
     * @var string
     */
    public $alcoholPermitInfo;
    /**
     * Constructor method for AlcoholDataStruct
     * @see parent::__construct()
     * @param string $_alcoholOpeningDate
     * @param string $_alcoholExpirationDate
     * @param string $_alcoholShopName
     * @param string $_alcoholShopAddress
     * @param string $_alcoholShopPostcode
     * @param string $_alcoholShopCity
     * @param string $_alcoholShopCommune
     * @param int $_alcoholShopCountryId
     * @param int $_alcoholShopStateId
     * @param string $_alcoholPermitNumber
     * @param string $_alcoholPermitAuthority
     * @param string $_alcoholPermitInfo
     * @return AllegroStructAlcoholDataStruct
     */
    public function __construct($_alcoholOpeningDate = NULL,$_alcoholExpirationDate = NULL,$_alcoholShopName = NULL,$_alcoholShopAddress = NULL,$_alcoholShopPostcode = NULL,$_alcoholShopCity = NULL,$_alcoholShopCommune = NULL,$_alcoholShopCountryId = NULL,$_alcoholShopStateId = NULL,$_alcoholPermitNumber = NULL,$_alcoholPermitAuthority = NULL,$_alcoholPermitInfo = NULL)
    {
        parent::__construct(array('alcoholOpeningDate'=>$_alcoholOpeningDate,'alcoholExpirationDate'=>$_alcoholExpirationDate,'alcoholShopName'=>$_alcoholShopName,'alcoholShopAddress'=>$_alcoholShopAddress,'alcoholShopPostcode'=>$_alcoholShopPostcode,'alcoholShopCity'=>$_alcoholShopCity,'alcoholShopCommune'=>$_alcoholShopCommune,'alcoholShopCountryId'=>$_alcoholShopCountryId,'alcoholShopStateId'=>$_alcoholShopStateId,'alcoholPermitNumber'=>$_alcoholPermitNumber,'alcoholPermitAuthority'=>$_alcoholPermitAuthority,'alcoholPermitInfo'=>$_alcoholPermitInfo),false);
    }
    /**
     * Get alcoholOpeningDate value
     * @return string|null
     */
    public function getAlcoholOpeningDate()
    {
        return $this->alcoholOpeningDate;
    }
    /**
     * Set alcoholOpeningDate value
     * @param string $_alcoholOpeningDate the alcoholOpeningDate
     * @return string
     */
    public function setAlcoholOpeningDate($_alcoholOpeningDate)
    {
        return ($this->alcoholOpeningDate = $_alcoholOpeningDate);
    }
    /**
     * Get alcoholExpirationDate value
     * @return string|null
     */
    public function getAlcoholExpirationDate()
    {
        return $this->alcoholExpirationDate;
    }
    /**
     * Set alcoholExpirationDate value
     * @param string $_alcoholExpirationDate the alcoholExpirationDate
     * @return string
     */
    public function setAlcoholExpirationDate($_alcoholExpirationDate)
    {
        return ($this->alcoholExpirationDate = $_alcoholExpirationDate);
    }
    /**
     * Get alcoholShopName value
     * @return string|null
     */
    public function getAlcoholShopName()
    {
        return $this->alcoholShopName;
    }
    /**
     * Set alcoholShopName value
     * @param string $_alcoholShopName the alcoholShopName
     * @return string
     */
    public function setAlcoholShopName($_alcoholShopName)
    {
        return ($this->alcoholShopName = $_alcoholShopName);
    }
    /**
     * Get alcoholShopAddress value
     * @return string|null
     */
    public function getAlcoholShopAddress()
    {
        return $this->alcoholShopAddress;
    }
    /**
     * Set alcoholShopAddress value
     * @param string $_alcoholShopAddress the alcoholShopAddress
     * @return string
     */
    public function setAlcoholShopAddress($_alcoholShopAddress)
    {
        return ($this->alcoholShopAddress = $_alcoholShopAddress);
    }
    /**
     * Get alcoholShopPostcode value
     * @return string|null
     */
    public function getAlcoholShopPostcode()
    {
        return $this->alcoholShopPostcode;
    }
    /**
     * Set alcoholShopPostcode value
     * @param string $_alcoholShopPostcode the alcoholShopPostcode
     * @return string
     */
    public function setAlcoholShopPostcode($_alcoholShopPostcode)
    {
        return ($this->alcoholShopPostcode = $_alcoholShopPostcode);
    }
    /**
     * Get alcoholShopCity value
     * @return string|null
     */
    public function getAlcoholShopCity()
    {
        return $this->alcoholShopCity;
    }
    /**
     * Set alcoholShopCity value
     * @param string $_alcoholShopCity the alcoholShopCity
     * @return string
     */
    public function setAlcoholShopCity($_alcoholShopCity)
    {
        return ($this->alcoholShopCity = $_alcoholShopCity);
    }
    /**
     * Get alcoholShopCommune value
     * @return string|null
     */
    public function getAlcoholShopCommune()
    {
        return $this->alcoholShopCommune;
    }
    /**
     * Set alcoholShopCommune value
     * @param string $_alcoholShopCommune the alcoholShopCommune
     * @return string
     */
    public function setAlcoholShopCommune($_alcoholShopCommune)
    {
        return ($this->alcoholShopCommune = $_alcoholShopCommune);
    }
    /**
     * Get alcoholShopCountryId value
     * @return int|null
     */
    public function getAlcoholShopCountryId()
    {
        return $this->alcoholShopCountryId;
    }
    /**
     * Set alcoholShopCountryId value
     * @param int $_alcoholShopCountryId the alcoholShopCountryId
     * @return int
     */
    public function setAlcoholShopCountryId($_alcoholShopCountryId)
    {
        return ($this->alcoholShopCountryId = $_alcoholShopCountryId);
    }
    /**
     * Get alcoholShopStateId value
     * @return int|null
     */
    public function getAlcoholShopStateId()
    {
        return $this->alcoholShopStateId;
    }
    /**
     * Set alcoholShopStateId value
     * @param int $_alcoholShopStateId the alcoholShopStateId
     * @return int
     */
    public function setAlcoholShopStateId($_alcoholShopStateId)
    {
        return ($this->alcoholShopStateId = $_alcoholShopStateId);
    }
    /**
     * Get alcoholPermitNumber value
     * @return string|null
     */
    public function getAlcoholPermitNumber()
    {
        return $this->alcoholPermitNumber;
    }
    /**
     * Set alcoholPermitNumber value
     * @param string $_alcoholPermitNumber the alcoholPermitNumber
     * @return string
     */
    public function setAlcoholPermitNumber($_alcoholPermitNumber)
    {
        return ($this->alcoholPermitNumber = $_alcoholPermitNumber);
    }
    /**
     * Get alcoholPermitAuthority value
     * @return string|null
     */
    public function getAlcoholPermitAuthority()
    {
        return $this->alcoholPermitAuthority;
    }
    /**
     * Set alcoholPermitAuthority value
     * @param string $_alcoholPermitAuthority the alcoholPermitAuthority
     * @return string
     */
    public function setAlcoholPermitAuthority($_alcoholPermitAuthority)
    {
        return ($this->alcoholPermitAuthority = $_alcoholPermitAuthority);
    }
    /**
     * Get alcoholPermitInfo value
     * @return string|null
     */
    public function getAlcoholPermitInfo()
    {
        return $this->alcoholPermitInfo;
    }
    /**
     * Set alcoholPermitInfo value
     * @param string $_alcoholPermitInfo the alcoholPermitInfo
     * @return string
     */
    public function setAlcoholPermitInfo($_alcoholPermitInfo)
    {
        return ($this->alcoholPermitInfo = $_alcoholPermitInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAlcoholDataStruct
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
