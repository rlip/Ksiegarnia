<?php
/**
 * File for class AllegroStructPostBuyFormAddressStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormAddressStruct originally named PostBuyFormAddressStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormAddressStruct extends AllegroWsdlClass
{
    /**
     * The postBuyFormAdrCountry
     * @var int
     */
    public $postBuyFormAdrCountry;
    /**
     * The postBuyFormAdrStreet
     * @var string
     */
    public $postBuyFormAdrStreet;
    /**
     * The postBuyFormAdrPostcode
     * @var string
     */
    public $postBuyFormAdrPostcode;
    /**
     * The postBuyFormAdrCity
     * @var string
     */
    public $postBuyFormAdrCity;
    /**
     * The postBuyFormAdrFullName
     * @var string
     */
    public $postBuyFormAdrFullName;
    /**
     * The postBuyFormAdrCompany
     * @var string
     */
    public $postBuyFormAdrCompany;
    /**
     * The postBuyFormAdrPhone
     * @var string
     */
    public $postBuyFormAdrPhone;
    /**
     * The postBuyFormAdrNip
     * @var string
     */
    public $postBuyFormAdrNip;
    /**
     * The postBuyFormCreatedDate
     * @var string
     */
    public $postBuyFormCreatedDate;
    /**
     * The postBuyFormAdrType
     * @var int
     */
    public $postBuyFormAdrType;
    /**
     * Constructor method for PostBuyFormAddressStruct
     * @see parent::__construct()
     * @param int $_postBuyFormAdrCountry
     * @param string $_postBuyFormAdrStreet
     * @param string $_postBuyFormAdrPostcode
     * @param string $_postBuyFormAdrCity
     * @param string $_postBuyFormAdrFullName
     * @param string $_postBuyFormAdrCompany
     * @param string $_postBuyFormAdrPhone
     * @param string $_postBuyFormAdrNip
     * @param string $_postBuyFormCreatedDate
     * @param int $_postBuyFormAdrType
     * @return AllegroStructPostBuyFormAddressStruct
     */
    public function __construct($_postBuyFormAdrCountry = NULL,$_postBuyFormAdrStreet = NULL,$_postBuyFormAdrPostcode = NULL,$_postBuyFormAdrCity = NULL,$_postBuyFormAdrFullName = NULL,$_postBuyFormAdrCompany = NULL,$_postBuyFormAdrPhone = NULL,$_postBuyFormAdrNip = NULL,$_postBuyFormCreatedDate = NULL,$_postBuyFormAdrType = NULL)
    {
        parent::__construct(array('postBuyFormAdrCountry'=>$_postBuyFormAdrCountry,'postBuyFormAdrStreet'=>$_postBuyFormAdrStreet,'postBuyFormAdrPostcode'=>$_postBuyFormAdrPostcode,'postBuyFormAdrCity'=>$_postBuyFormAdrCity,'postBuyFormAdrFullName'=>$_postBuyFormAdrFullName,'postBuyFormAdrCompany'=>$_postBuyFormAdrCompany,'postBuyFormAdrPhone'=>$_postBuyFormAdrPhone,'postBuyFormAdrNip'=>$_postBuyFormAdrNip,'postBuyFormCreatedDate'=>$_postBuyFormCreatedDate,'postBuyFormAdrType'=>$_postBuyFormAdrType),false);
    }
    /**
     * Get postBuyFormAdrCountry value
     * @return int|null
     */
    public function getPostBuyFormAdrCountry()
    {
        return $this->postBuyFormAdrCountry;
    }
    /**
     * Set postBuyFormAdrCountry value
     * @param int $_postBuyFormAdrCountry the postBuyFormAdrCountry
     * @return int
     */
    public function setPostBuyFormAdrCountry($_postBuyFormAdrCountry)
    {
        return ($this->postBuyFormAdrCountry = $_postBuyFormAdrCountry);
    }
    /**
     * Get postBuyFormAdrStreet value
     * @return string|null
     */
    public function getPostBuyFormAdrStreet()
    {
        return $this->postBuyFormAdrStreet;
    }
    /**
     * Set postBuyFormAdrStreet value
     * @param string $_postBuyFormAdrStreet the postBuyFormAdrStreet
     * @return string
     */
    public function setPostBuyFormAdrStreet($_postBuyFormAdrStreet)
    {
        return ($this->postBuyFormAdrStreet = $_postBuyFormAdrStreet);
    }
    /**
     * Get postBuyFormAdrPostcode value
     * @return string|null
     */
    public function getPostBuyFormAdrPostcode()
    {
        return $this->postBuyFormAdrPostcode;
    }
    /**
     * Set postBuyFormAdrPostcode value
     * @param string $_postBuyFormAdrPostcode the postBuyFormAdrPostcode
     * @return string
     */
    public function setPostBuyFormAdrPostcode($_postBuyFormAdrPostcode)
    {
        return ($this->postBuyFormAdrPostcode = $_postBuyFormAdrPostcode);
    }
    /**
     * Get postBuyFormAdrCity value
     * @return string|null
     */
    public function getPostBuyFormAdrCity()
    {
        return $this->postBuyFormAdrCity;
    }
    /**
     * Set postBuyFormAdrCity value
     * @param string $_postBuyFormAdrCity the postBuyFormAdrCity
     * @return string
     */
    public function setPostBuyFormAdrCity($_postBuyFormAdrCity)
    {
        return ($this->postBuyFormAdrCity = $_postBuyFormAdrCity);
    }
    /**
     * Get postBuyFormAdrFullName value
     * @return string|null
     */
    public function getPostBuyFormAdrFullName()
    {
        return $this->postBuyFormAdrFullName;
    }
    /**
     * Set postBuyFormAdrFullName value
     * @param string $_postBuyFormAdrFullName the postBuyFormAdrFullName
     * @return string
     */
    public function setPostBuyFormAdrFullName($_postBuyFormAdrFullName)
    {
        return ($this->postBuyFormAdrFullName = $_postBuyFormAdrFullName);
    }
    /**
     * Get postBuyFormAdrCompany value
     * @return string|null
     */
    public function getPostBuyFormAdrCompany()
    {
        return $this->postBuyFormAdrCompany;
    }
    /**
     * Set postBuyFormAdrCompany value
     * @param string $_postBuyFormAdrCompany the postBuyFormAdrCompany
     * @return string
     */
    public function setPostBuyFormAdrCompany($_postBuyFormAdrCompany)
    {
        return ($this->postBuyFormAdrCompany = $_postBuyFormAdrCompany);
    }
    /**
     * Get postBuyFormAdrPhone value
     * @return string|null
     */
    public function getPostBuyFormAdrPhone()
    {
        return $this->postBuyFormAdrPhone;
    }
    /**
     * Set postBuyFormAdrPhone value
     * @param string $_postBuyFormAdrPhone the postBuyFormAdrPhone
     * @return string
     */
    public function setPostBuyFormAdrPhone($_postBuyFormAdrPhone)
    {
        return ($this->postBuyFormAdrPhone = $_postBuyFormAdrPhone);
    }
    /**
     * Get postBuyFormAdrNip value
     * @return string|null
     */
    public function getPostBuyFormAdrNip()
    {
        return $this->postBuyFormAdrNip;
    }
    /**
     * Set postBuyFormAdrNip value
     * @param string $_postBuyFormAdrNip the postBuyFormAdrNip
     * @return string
     */
    public function setPostBuyFormAdrNip($_postBuyFormAdrNip)
    {
        return ($this->postBuyFormAdrNip = $_postBuyFormAdrNip);
    }
    /**
     * Get postBuyFormCreatedDate value
     * @return string|null
     */
    public function getPostBuyFormCreatedDate()
    {
        return $this->postBuyFormCreatedDate;
    }
    /**
     * Set postBuyFormCreatedDate value
     * @param string $_postBuyFormCreatedDate the postBuyFormCreatedDate
     * @return string
     */
    public function setPostBuyFormCreatedDate($_postBuyFormCreatedDate)
    {
        return ($this->postBuyFormCreatedDate = $_postBuyFormCreatedDate);
    }
    /**
     * Get postBuyFormAdrType value
     * @return int|null
     */
    public function getPostBuyFormAdrType()
    {
        return $this->postBuyFormAdrType;
    }
    /**
     * Set postBuyFormAdrType value
     * @param int $_postBuyFormAdrType the postBuyFormAdrType
     * @return int
     */
    public function setPostBuyFormAdrType($_postBuyFormAdrType)
    {
        return ($this->postBuyFormAdrType = $_postBuyFormAdrType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormAddressStruct
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
