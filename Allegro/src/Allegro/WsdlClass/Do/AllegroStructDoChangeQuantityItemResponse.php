<?php
/**
 * File for class AllegroStructDoChangeQuantityItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoChangeQuantityItemResponse originally named doChangeQuantityItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoChangeQuantityItemResponse extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemInfo
     * @var string
     */
    public $itemInfo;
    /**
     * The itemQuantityLeft
     * @var int
     */
    public $itemQuantityLeft;
    /**
     * The itemQuantitySold
     * @var int
     */
    public $itemQuantitySold;
    /**
     * Constructor method for doChangeQuantityItemResponse
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemInfo
     * @param int $_itemQuantityLeft
     * @param int $_itemQuantitySold
     * @return AllegroStructDoChangeQuantityItemResponse
     */
    public function __construct($_itemId = NULL,$_itemInfo = NULL,$_itemQuantityLeft = NULL,$_itemQuantitySold = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemInfo'=>$_itemInfo,'itemQuantityLeft'=>$_itemQuantityLeft,'itemQuantitySold'=>$_itemQuantitySold),false);
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
     * Get itemInfo value
     * @return string|null
     */
    public function getItemInfo()
    {
        return $this->itemInfo;
    }
    /**
     * Set itemInfo value
     * @param string $_itemInfo the itemInfo
     * @return string
     */
    public function setItemInfo($_itemInfo)
    {
        return ($this->itemInfo = $_itemInfo);
    }
    /**
     * Get itemQuantityLeft value
     * @return int|null
     */
    public function getItemQuantityLeft()
    {
        return $this->itemQuantityLeft;
    }
    /**
     * Set itemQuantityLeft value
     * @param int $_itemQuantityLeft the itemQuantityLeft
     * @return int
     */
    public function setItemQuantityLeft($_itemQuantityLeft)
    {
        return ($this->itemQuantityLeft = $_itemQuantityLeft);
    }
    /**
     * Get itemQuantitySold value
     * @return int|null
     */
    public function getItemQuantitySold()
    {
        return $this->itemQuantitySold;
    }
    /**
     * Set itemQuantitySold value
     * @param int $_itemQuantitySold the itemQuantitySold
     * @return int
     */
    public function setItemQuantitySold($_itemQuantitySold)
    {
        return ($this->itemQuantitySold = $_itemQuantitySold);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoChangeQuantityItemResponse
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
