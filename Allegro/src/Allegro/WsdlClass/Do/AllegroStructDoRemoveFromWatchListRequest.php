<?php
/**
 * File for class AllegroStructDoRemoveFromWatchListRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRemoveFromWatchListRequest originally named DoRemoveFromWatchListRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRemoveFromWatchListRequest extends AllegroWsdlClass
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
     * Constructor method for DoRemoveFromWatchListRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_itemsIdArray
     * @return AllegroStructDoRemoveFromWatchListRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemsIdArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemsIdArray'=>($_itemsIdArray instanceof AllegroStructArrayOfLong)?$_itemsIdArray:new AllegroStructArrayOfLong($_itemsIdArray)),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRemoveFromWatchListRequest
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
