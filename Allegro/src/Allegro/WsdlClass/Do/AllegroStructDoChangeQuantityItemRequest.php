<?php
/**
 * File for class AllegroStructDoChangeQuantityItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoChangeQuantityItemRequest originally named DoChangeQuantityItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoChangeQuantityItemRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The newItemQuantity
     * @var int
     */
    public $newItemQuantity;
    /**
     * Constructor method for DoChangeQuantityItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_itemId
     * @param int $_newItemQuantity
     * @return AllegroStructDoChangeQuantityItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemId = NULL,$_newItemQuantity = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemId'=>$_itemId,'newItemQuantity'=>$_newItemQuantity),false);
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
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
    }
    /**
     * Get newItemQuantity value
     * @return int|null
     */
    public function getNewItemQuantity()
    {
        return $this->newItemQuantity;
    }
    /**
     * Set newItemQuantity value
     * @param int $_newItemQuantity the newItemQuantity
     * @return int
     */
    public function setNewItemQuantity($_newItemQuantity)
    {
        return ($this->newItemQuantity = $_newItemQuantity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoChangeQuantityItemRequest
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
