<?php
/**
 * File for class AllegroStructDoMyAccount2Request
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyAccount2Request originally named DoMyAccount2Request
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyAccount2Request extends AllegroWsdlClass
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
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The itemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsArray;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $limit;
    /**
     * Constructor method for DoMyAccount2Request
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param string $_accountType
     * @param int $_offset
     * @param AllegroStructArrayOfLong $_itemsArray
     * @param int $_limit
     * @return AllegroStructDoMyAccount2Request
     */
    public function __construct($_sessionHandle = NULL,$_accountType = NULL,$_offset = NULL,$_itemsArray = NULL,$_limit = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'accountType'=>$_accountType,'offset'=>$_offset,'itemsArray'=>($_itemsArray instanceof AllegroStructArrayOfLong)?$_itemsArray:new AllegroStructArrayOfLong($_itemsArray),'limit'=>$_limit),false);
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
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $_offset the offset
     * @return int
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
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
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $_limit the limit
     * @return int
     */
    public function setLimit($_limit)
    {
        return ($this->limit = $_limit);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyAccount2Request
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
