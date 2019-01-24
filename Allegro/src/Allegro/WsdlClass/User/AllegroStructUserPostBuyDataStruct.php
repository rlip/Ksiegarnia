<?php
/**
 * File for class AllegroStructUserPostBuyDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserPostBuyDataStruct originally named UserPostBuyDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserPostBuyDataStruct extends AllegroWsdlClass
{
    /**
     * The userData
     * @var AllegroStructUserDataStruct
     */
    public $userData;
    /**
     * The userSentToData
     * @var AllegroStructUserSentToDataStruct
     */
    public $userSentToData;
    /**
     * The userBankAccounts
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $userBankAccounts;
    /**
     * The companySecondAddress
     * @var AllegroStructCompanySecondAddressStruct
     */
    public $companySecondAddress;
    /**
     * Constructor method for UserPostBuyDataStruct
     * @see parent::__construct()
     * @param AllegroStructUserDataStruct $_userData
     * @param AllegroStructUserSentToDataStruct $_userSentToData
     * @param AllegroStructArrayOfString $_userBankAccounts
     * @param AllegroStructCompanySecondAddressStruct $_companySecondAddress
     * @return AllegroStructUserPostBuyDataStruct
     */
    public function __construct($_userData = NULL,$_userSentToData = NULL,$_userBankAccounts = NULL,$_companySecondAddress = NULL)
    {
        parent::__construct(array('userData'=>$_userData,'userSentToData'=>$_userSentToData,'userBankAccounts'=>($_userBankAccounts instanceof AllegroStructArrayOfString)?$_userBankAccounts:new AllegroStructArrayOfString($_userBankAccounts),'companySecondAddress'=>$_companySecondAddress),false);
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
     * Get userSentToData value
     * @return AllegroStructUserSentToDataStruct|null
     */
    public function getUserSentToData()
    {
        return $this->userSentToData;
    }
    /**
     * Set userSentToData value
     * @param AllegroStructUserSentToDataStruct $_userSentToData the userSentToData
     * @return AllegroStructUserSentToDataStruct
     */
    public function setUserSentToData($_userSentToData)
    {
        return ($this->userSentToData = $_userSentToData);
    }
    /**
     * Get userBankAccounts value
     * @return AllegroStructArrayOfString|null
     */
    public function getUserBankAccounts()
    {
        return $this->userBankAccounts;
    }
    /**
     * Set userBankAccounts value
     * @param AllegroStructArrayOfString $_userBankAccounts the userBankAccounts
     * @return AllegroStructArrayOfString
     */
    public function setUserBankAccounts($_userBankAccounts)
    {
        return ($this->userBankAccounts = $_userBankAccounts);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserPostBuyDataStruct
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
