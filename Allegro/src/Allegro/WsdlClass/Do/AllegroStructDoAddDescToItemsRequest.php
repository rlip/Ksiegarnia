<?php
/**
 * File for class AllegroStructDoAddDescToItemsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddDescToItemsRequest originally named DoAddDescToItemsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddDescToItemsRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemsIdArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsIdArray;
    /**
     * The itDescription
     * @var string
     */
    public $itDescription;
    /**
     * Constructor method for DoAddDescToItemsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_itemsIdArray
     * @param string $_itDescription
     * @return AllegroStructDoAddDescToItemsRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemsIdArray = NULL,$_itDescription = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemsIdArray'=>($_itemsIdArray instanceof AllegroStructArrayOfLong)?$_itemsIdArray:new AllegroStructArrayOfLong($_itemsIdArray),'itDescription'=>$_itDescription),false);
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
     * Get itemsIdArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsIdArray()
    {
        return $this->itemsIdArray;
    }
    /**
     * Set itemsIdArray value
     * @param AllegroStructArrayOfLong $_itemsIdArray the itemsIdArray
     * @return AllegroStructArrayOfLong
     */
    public function setItemsIdArray($_itemsIdArray)
    {
        return ($this->itemsIdArray = $_itemsIdArray);
    }
    /**
     * Get itDescription value
     * @return string|null
     */
    public function getItDescription()
    {
        return $this->itDescription;
    }
    /**
     * Set itDescription value
     * @param string $_itDescription the itDescription
     * @return string
     */
    public function setItDescription($_itDescription)
    {
        return ($this->itDescription = $_itDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddDescToItemsRequest
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
