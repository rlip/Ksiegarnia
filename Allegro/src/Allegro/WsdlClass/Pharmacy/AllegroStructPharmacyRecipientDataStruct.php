<?php
/**
 * File for class AllegroStructPharmacyRecipientDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPharmacyRecipientDataStruct originally named PharmacyRecipientDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPharmacyRecipientDataStruct extends AllegroWsdlClass
{
    /**
     * The recipientFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $recipientFirstName;
    /**
     * The recipientLastName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $recipientLastName;
    /**
     * The recipientAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $recipientAddress;
    /**
     * The recipientPostcode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $recipientPostcode;
    /**
     * The recipientCity
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $recipientCity;
    /**
     * Constructor method for PharmacyRecipientDataStruct
     * @see parent::__construct()
     * @param string $_recipientFirstName
     * @param string $_recipientLastName
     * @param string $_recipientAddress
     * @param string $_recipientPostcode
     * @param string $_recipientCity
     * @return AllegroStructPharmacyRecipientDataStruct
     */
    public function __construct($_recipientFirstName = NULL,$_recipientLastName = NULL,$_recipientAddress = NULL,$_recipientPostcode = NULL,$_recipientCity = NULL)
    {
        parent::__construct(array('recipientFirstName'=>$_recipientFirstName,'recipientLastName'=>$_recipientLastName,'recipientAddress'=>$_recipientAddress,'recipientPostcode'=>$_recipientPostcode,'recipientCity'=>$_recipientCity),false);
    }
    /**
     * Get recipientFirstName value
     * @return string|null
     */
    public function getRecipientFirstName()
    {
        return $this->recipientFirstName;
    }
    /**
     * Set recipientFirstName value
     * @param string $_recipientFirstName the recipientFirstName
     * @return string
     */
    public function setRecipientFirstName($_recipientFirstName)
    {
        return ($this->recipientFirstName = $_recipientFirstName);
    }
    /**
     * Get recipientLastName value
     * @return string|null
     */
    public function getRecipientLastName()
    {
        return $this->recipientLastName;
    }
    /**
     * Set recipientLastName value
     * @param string $_recipientLastName the recipientLastName
     * @return string
     */
    public function setRecipientLastName($_recipientLastName)
    {
        return ($this->recipientLastName = $_recipientLastName);
    }
    /**
     * Get recipientAddress value
     * @return string|null
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param string $_recipientAddress the recipientAddress
     * @return string
     */
    public function setRecipientAddress($_recipientAddress)
    {
        return ($this->recipientAddress = $_recipientAddress);
    }
    /**
     * Get recipientPostcode value
     * @return string|null
     */
    public function getRecipientPostcode()
    {
        return $this->recipientPostcode;
    }
    /**
     * Set recipientPostcode value
     * @param string $_recipientPostcode the recipientPostcode
     * @return string
     */
    public function setRecipientPostcode($_recipientPostcode)
    {
        return ($this->recipientPostcode = $_recipientPostcode);
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity()
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $_recipientCity the recipientCity
     * @return string
     */
    public function setRecipientCity($_recipientCity)
    {
        return ($this->recipientCity = $_recipientCity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPharmacyRecipientDataStruct
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
