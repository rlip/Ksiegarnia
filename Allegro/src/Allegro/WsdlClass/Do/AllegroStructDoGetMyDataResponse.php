<?php
/**
 * File for class AllegroStructDoGetMyDataResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyDataResponse originally named doGetMyDataResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyDataResponse extends AllegroWsdlClass
{
    /**
     * The userData
     * @var AllegroStructUserDataStruct
     */
    public $userData;
    /**
     * The invoiceData
     * @var AllegroStructInvoiceDataStruct
     */
    public $invoiceData;
    /**
     * The companyExtraData
     * @var AllegroStructCompanyExtraDataStruct
     */
    public $companyExtraData;
    /**
     * The companySecondAddress
     * @var AllegroStructCompanySecondAddressStruct
     */
    public $companySecondAddress;
    /**
     * The pharmacyData
     * @var AllegroStructPharmacyDataStruct
     */
    public $pharmacyData;
    /**
     * The alcoholData
     * @var AllegroStructAlcoholDataStruct
     */
    public $alcoholData;
    /**
     * The relatedPersons
     * @var AllegroStructRelatedPersonsStruct
     */
    public $relatedPersons;
    /**
     * Constructor method for doGetMyDataResponse
     * @see parent::__construct()
     * @param AllegroStructUserDataStruct $_userData
     * @param AllegroStructInvoiceDataStruct $_invoiceData
     * @param AllegroStructCompanyExtraDataStruct $_companyExtraData
     * @param AllegroStructCompanySecondAddressStruct $_companySecondAddress
     * @param AllegroStructPharmacyDataStruct $_pharmacyData
     * @param AllegroStructAlcoholDataStruct $_alcoholData
     * @param AllegroStructRelatedPersonsStruct $_relatedPersons
     * @return AllegroStructDoGetMyDataResponse
     */
    public function __construct($_userData = NULL,$_invoiceData = NULL,$_companyExtraData = NULL,$_companySecondAddress = NULL,$_pharmacyData = NULL,$_alcoholData = NULL,$_relatedPersons = NULL)
    {
        parent::__construct(array('userData'=>$_userData,'invoiceData'=>$_invoiceData,'companyExtraData'=>$_companyExtraData,'companySecondAddress'=>$_companySecondAddress,'pharmacyData'=>$_pharmacyData,'alcoholData'=>$_alcoholData,'relatedPersons'=>$_relatedPersons),false);
    }
    /**
     * Get userData value
     * @return AllegroStructUserDataStruct|null
     */
    public function getUserData()
    {
        return $this->userData;
    }
    /**
     * Set userData value
     * @param AllegroStructUserDataStruct $_userData the userData
     * @return AllegroStructUserDataStruct
     */
    public function setUserData($_userData)
    {
        return ($this->userData = $_userData);
    }
    /**
     * Get invoiceData value
     * @return AllegroStructInvoiceDataStruct|null
     */
    public function getInvoiceData()
    {
        return $this->invoiceData;
    }
    /**
     * Set invoiceData value
     * @param AllegroStructInvoiceDataStruct $_invoiceData the invoiceData
     * @return AllegroStructInvoiceDataStruct
     */
    public function setInvoiceData($_invoiceData)
    {
        return ($this->invoiceData = $_invoiceData);
    }
    /**
     * Get companyExtraData value
     * @return AllegroStructCompanyExtraDataStruct|null
     */
    public function getCompanyExtraData()
    {
        return $this->companyExtraData;
    }
    /**
     * Set companyExtraData value
     * @param AllegroStructCompanyExtraDataStruct $_companyExtraData the companyExtraData
     * @return AllegroStructCompanyExtraDataStruct
     */
    public function setCompanyExtraData($_companyExtraData)
    {
        return ($this->companyExtraData = $_companyExtraData);
    }
    /**
     * Get companySecondAddress value
     * @return AllegroStructCompanySecondAddressStruct|null
     */
    public function getCompanySecondAddress()
    {
        return $this->companySecondAddress;
    }
    /**
     * Set companySecondAddress value
     * @param AllegroStructCompanySecondAddressStruct $_companySecondAddress the companySecondAddress
     * @return AllegroStructCompanySecondAddressStruct
     */
    public function setCompanySecondAddress($_companySecondAddress)
    {
        return ($this->companySecondAddress = $_companySecondAddress);
    }
    /**
     * Get pharmacyData value
     * @return AllegroStructPharmacyDataStruct|null
     */
    public function getPharmacyData()
    {
        return $this->pharmacyData;
    }
    /**
     * Set pharmacyData value
     * @param AllegroStructPharmacyDataStruct $_pharmacyData the pharmacyData
     * @return AllegroStructPharmacyDataStruct
     */
    public function setPharmacyData($_pharmacyData)
    {
        return ($this->pharmacyData = $_pharmacyData);
    }
    /**
     * Get alcoholData value
     * @return AllegroStructAlcoholDataStruct|null
     */
    public function getAlcoholData()
    {
        return $this->alcoholData;
    }
    /**
     * Set alcoholData value
     * @param AllegroStructAlcoholDataStruct $_alcoholData the alcoholData
     * @return AllegroStructAlcoholDataStruct
     */
    public function setAlcoholData($_alcoholData)
    {
        return ($this->alcoholData = $_alcoholData);
    }
    /**
     * Get relatedPersons value
     * @return AllegroStructRelatedPersonsStruct|null
     */
    public function getRelatedPersons()
    {
        return $this->relatedPersons;
    }
    /**
     * Set relatedPersons value
     * @param AllegroStructRelatedPersonsStruct $_relatedPersons the relatedPersons
     * @return AllegroStructRelatedPersonsStruct
     */
    public function setRelatedPersons($_relatedPersons)
    {
        return ($this->relatedPersons = $_relatedPersons);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyDataResponse
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
