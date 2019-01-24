<?php
/**
 * File for class AllegroStructPharmacyDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPharmacyDataStruct originally named PharmacyDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPharmacyDataStruct extends AllegroWsdlClass
{
    /**
     * The pharmacyOpeningDate
     * @var string
     */
    public $pharmacyOpeningDate;
    /**
     * The pharmacyExpirationDate
     * @var string
     */
    public $pharmacyExpirationDate;
    /**
     * The pharmacyName
     * @var string
     */
    public $pharmacyName;
    /**
     * The pharmacyPharmacistFullName
     * @var string
     */
    public $pharmacyPharmacistFullName;
    /**
     * The pharmacyAddress
     * @var string
     */
    public $pharmacyAddress;
    /**
     * The pharmacyPostcode
     * @var string
     */
    public $pharmacyPostcode;
    /**
     * The pharmacyCity
     * @var string
     */
    public $pharmacyCity;
    /**
     * The pharmacyCommune
     * @var string
     */
    public $pharmacyCommune;
    /**
     * The pharmacyCountryId
     * @var int
     */
    public $pharmacyCountryId;
    /**
     * The pharmacyStateId
     * @var int
     */
    public $pharmacyStateId;
    /**
     * The pharmacyPermitNumber
     * @var string
     */
    public $pharmacyPermitNumber;
    /**
     * The pharmacyPermitInfo
     * @var string
     */
    public $pharmacyPermitInfo;
    /**
     * Constructor method for PharmacyDataStruct
     * @see parent::__construct()
     * @param string $_pharmacyOpeningDate
     * @param string $_pharmacyExpirationDate
     * @param string $_pharmacyName
     * @param string $_pharmacyPharmacistFullName
     * @param string $_pharmacyAddress
     * @param string $_pharmacyPostcode
     * @param string $_pharmacyCity
     * @param string $_pharmacyCommune
     * @param int $_pharmacyCountryId
     * @param int $_pharmacyStateId
     * @param string $_pharmacyPermitNumber
     * @param string $_pharmacyPermitInfo
     * @return AllegroStructPharmacyDataStruct
     */
    public function __construct($_pharmacyOpeningDate = NULL,$_pharmacyExpirationDate = NULL,$_pharmacyName = NULL,$_pharmacyPharmacistFullName = NULL,$_pharmacyAddress = NULL,$_pharmacyPostcode = NULL,$_pharmacyCity = NULL,$_pharmacyCommune = NULL,$_pharmacyCountryId = NULL,$_pharmacyStateId = NULL,$_pharmacyPermitNumber = NULL,$_pharmacyPermitInfo = NULL)
    {
        parent::__construct(array('pharmacyOpeningDate'=>$_pharmacyOpeningDate,'pharmacyExpirationDate'=>$_pharmacyExpirationDate,'pharmacyName'=>$_pharmacyName,'pharmacyPharmacistFullName'=>$_pharmacyPharmacistFullName,'pharmacyAddress'=>$_pharmacyAddress,'pharmacyPostcode'=>$_pharmacyPostcode,'pharmacyCity'=>$_pharmacyCity,'pharmacyCommune'=>$_pharmacyCommune,'pharmacyCountryId'=>$_pharmacyCountryId,'pharmacyStateId'=>$_pharmacyStateId,'pharmacyPermitNumber'=>$_pharmacyPermitNumber,'pharmacyPermitInfo'=>$_pharmacyPermitInfo),false);
    }
    /**
     * Get pharmacyOpeningDate value
     * @return string|null
     */
    public function getPharmacyOpeningDate()
    {
        return $this->pharmacyOpeningDate;
    }
    /**
     * Set pharmacyOpeningDate value
     * @param string $_pharmacyOpeningDate the pharmacyOpeningDate
     * @return string
     */
    public function setPharmacyOpeningDate($_pharmacyOpeningDate)
    {
        return ($this->pharmacyOpeningDate = $_pharmacyOpeningDate);
    }
    /**
     * Get pharmacyExpirationDate value
     * @return string|null
     */
    public function getPharmacyExpirationDate()
    {
        return $this->pharmacyExpirationDate;
    }
    /**
     * Set pharmacyExpirationDate value
     * @param string $_pharmacyExpirationDate the pharmacyExpirationDate
     * @return string
     */
    public function setPharmacyExpirationDate($_pharmacyExpirationDate)
    {
        return ($this->pharmacyExpirationDate = $_pharmacyExpirationDate);
    }
    /**
     * Get pharmacyName value
     * @return string|null
     */
    public function getPharmacyName()
    {
        return $this->pharmacyName;
    }
    /**
     * Set pharmacyName value
     * @param string $_pharmacyName the pharmacyName
     * @return string
     */
    public function setPharmacyName($_pharmacyName)
    {
        return ($this->pharmacyName = $_pharmacyName);
    }
    /**
     * Get pharmacyPharmacistFullName value
     * @return string|null
     */
    public function getPharmacyPharmacistFullName()
    {
        return $this->pharmacyPharmacistFullName;
    }
    /**
     * Set pharmacyPharmacistFullName value
     * @param string $_pharmacyPharmacistFullName the pharmacyPharmacistFullName
     * @return string
     */
    public function setPharmacyPharmacistFullName($_pharmacyPharmacistFullName)
    {
        return ($this->pharmacyPharmacistFullName = $_pharmacyPharmacistFullName);
    }
    /**
     * Get pharmacyAddress value
     * @return string|null
     */
    public function getPharmacyAddress()
    {
        return $this->pharmacyAddress;
    }
    /**
     * Set pharmacyAddress value
     * @param string $_pharmacyAddress the pharmacyAddress
     * @return string
     */
    public function setPharmacyAddress($_pharmacyAddress)
    {
        return ($this->pharmacyAddress = $_pharmacyAddress);
    }
    /**
     * Get pharmacyPostcode value
     * @return string|null
     */
    public function getPharmacyPostcode()
    {
        return $this->pharmacyPostcode;
    }
    /**
     * Set pharmacyPostcode value
     * @param string $_pharmacyPostcode the pharmacyPostcode
     * @return string
     */
    public function setPharmacyPostcode($_pharmacyPostcode)
    {
        return ($this->pharmacyPostcode = $_pharmacyPostcode);
    }
    /**
     * Get pharmacyCity value
     * @return string|null
     */
    public function getPharmacyCity()
    {
        return $this->pharmacyCity;
    }
    /**
     * Set pharmacyCity value
     * @param string $_pharmacyCity the pharmacyCity
     * @return string
     */
    public function setPharmacyCity($_pharmacyCity)
    {
        return ($this->pharmacyCity = $_pharmacyCity);
    }
    /**
     * Get pharmacyCommune value
     * @return string|null
     */
    public function getPharmacyCommune()
    {
        return $this->pharmacyCommune;
    }
    /**
     * Set pharmacyCommune value
     * @param string $_pharmacyCommune the pharmacyCommune
     * @return string
     */
    public function setPharmacyCommune($_pharmacyCommune)
    {
        return ($this->pharmacyCommune = $_pharmacyCommune);
    }
    /**
     * Get pharmacyCountryId value
     * @return int|null
     */
    public function getPharmacyCountryId()
    {
        return $this->pharmacyCountryId;
    }
    /**
     * Set pharmacyCountryId value
     * @param int $_pharmacyCountryId the pharmacyCountryId
     * @return int
     */
    public function setPharmacyCountryId($_pharmacyCountryId)
    {
        return ($this->pharmacyCountryId = $_pharmacyCountryId);
    }
    /**
     * Get pharmacyStateId value
     * @return int|null
     */
    public function getPharmacyStateId()
    {
        return $this->pharmacyStateId;
    }
    /**
     * Set pharmacyStateId value
     * @param int $_pharmacyStateId the pharmacyStateId
     * @return int
     */
    public function setPharmacyStateId($_pharmacyStateId)
    {
        return ($this->pharmacyStateId = $_pharmacyStateId);
    }
    /**
     * Get pharmacyPermitNumber value
     * @return string|null
     */
    public function getPharmacyPermitNumber()
    {
        return $this->pharmacyPermitNumber;
    }
    /**
     * Set pharmacyPermitNumber value
     * @param string $_pharmacyPermitNumber the pharmacyPermitNumber
     * @return string
     */
    public function setPharmacyPermitNumber($_pharmacyPermitNumber)
    {
        return ($this->pharmacyPermitNumber = $_pharmacyPermitNumber);
    }
    /**
     * Get pharmacyPermitInfo value
     * @return string|null
     */
    public function getPharmacyPermitInfo()
    {
        return $this->pharmacyPermitInfo;
    }
    /**
     * Set pharmacyPermitInfo value
     * @param string $_pharmacyPermitInfo the pharmacyPermitInfo
     * @return string
     */
    public function setPharmacyPermitInfo($_pharmacyPermitInfo)
    {
        return ($this->pharmacyPermitInfo = $_pharmacyPermitInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPharmacyDataStruct
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
