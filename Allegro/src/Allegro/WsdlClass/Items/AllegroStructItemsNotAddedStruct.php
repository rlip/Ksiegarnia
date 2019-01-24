<?php
/**
 * File for class AllegroStructItemsNotAddedStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemsNotAddedStruct originally named ItemsNotAddedStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemsNotAddedStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemErrorCode
     * @var string
     */
    public $itemErrorCode;
    /**
     * The itemErrorDescription
     * @var string
     */
    public $itemErrorDescription;
    /**
     * Constructor method for ItemsNotAddedStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemErrorCode
     * @param string $_itemErrorDescription
     * @return AllegroStructItemsNotAddedStruct
     */
    public function __construct($_itemId = NULL,$_itemErrorCode = NULL,$_itemErrorDescription = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemErrorCode'=>$_itemErrorCode,'itemErrorDescription'=>$_itemErrorDescription),false);
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
     * Get itemErrorCode value
     * @return string|null
     */
    public function getItemErrorCode()
    {
        return $this->itemErrorCode;
    }
    /**
     * Set itemErrorCode value
     * @param string $_itemErrorCode the itemErrorCode
     * @return string
     */
    public function setItemErrorCode($_itemErrorCode)
    {
        return ($this->itemErrorCode = $_itemErrorCode);
    }
    /**
     * Get itemErrorDescription value
     * @return string|null
     */
    public function getItemErrorDescription()
    {
        return $this->itemErrorDescription;
    }
    /**
     * Set itemErrorDescription value
     * @param string $_itemErrorDescription the itemErrorDescription
     * @return string
     */
    public function setItemErrorDescription($_itemErrorDescription)
    {
        return ($this->itemErrorDescription = $_itemErrorDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemsNotAddedStruct
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
