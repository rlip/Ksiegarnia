<?php
/**
 * File for class AllegroStructDoGetPostBuyDataRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyDataRequest originally named DoGetPostBuyDataRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyDataRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsArray;
    /**
     * Constructor method for DoGetPostBuyDataRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_itemsArray
     * @return AllegroStructDoGetPostBuyDataRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemsArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemsArray'=>($_itemsArray instanceof AllegroStructArrayOfLong)?$_itemsArray:new AllegroStructArrayOfLong($_itemsArray)),false);
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
     * @return AllegroStructDoGetPostBuyDataRequest
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
