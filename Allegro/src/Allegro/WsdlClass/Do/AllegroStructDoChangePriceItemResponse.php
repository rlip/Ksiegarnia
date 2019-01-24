<?php
/**
 * File for class AllegroStructDoChangePriceItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoChangePriceItemResponse originally named doChangePriceItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoChangePriceItemResponse extends AllegroWsdlClass
{
    /**
     * The itemInfo
     * @var string
     */
    public $itemInfo;
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * Constructor method for doChangePriceItemResponse
     * @see parent::__construct()
     * @param string $_itemInfo
     * @param long $_itemId
     * @return AllegroStructDoChangePriceItemResponse
     */
    public function __construct($_itemInfo = NULL,$_itemId = NULL)
    {
        parent::__construct(array('itemInfo'=>$_itemInfo,'itemId'=>$_itemId),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoChangePriceItemResponse
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
