<?php
/**
 * File for class AllegroStructDoMyAccountItemsCountRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyAccountItemsCountRequest originally named DoMyAccountItemsCountRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyAccountItemsCountRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The accountType
     * @var string
     */
    public $accountType;
    /**
     * The itemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsArray;
    /**
     * Constructor method for DoMyAccountItemsCountRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param string $_accountType
     * @param AllegroStructArrayOfLong $_itemsArray
     * @return AllegroStructDoMyAccountItemsCountRequest
     */
    public function __construct($_sessionHandle = NULL,$_accountType = NULL,$_itemsArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'accountType'=>$_accountType,'itemsArray'=>($_itemsArray instanceof AllegroStructArrayOfLong)?$_itemsArray:new AllegroStructArrayOfLong($_itemsArray)),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get accountType value
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $_accountType the accountType
     * @return string
     */
    public function setAccountType($_accountType)
    {
        return ($this->accountType = $_accountType);
    }
    /**
     * Get itemsArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }
    /**
     * Set itemsArray value
     * @param AllegroStructArrayOfLong $_itemsArray the itemsArray
     * @return AllegroStructArrayOfLong
     */
    public function setItemsArray($_itemsArray)
    {
        return ($this->itemsArray = $_itemsArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyAccountItemsCountRequest
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
