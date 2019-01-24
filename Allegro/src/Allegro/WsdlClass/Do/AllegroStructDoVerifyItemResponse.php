<?php
/**
 * File for class AllegroStructDoVerifyItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoVerifyItemResponse originally named doVerifyItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoVerifyItemResponse extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemListed
     * @var int
     */
    public $itemListed;
    /**
     * The itemStartingTime
     * @var long
     */
    public $itemStartingTime;
    /**
     * Constructor method for doVerifyItemResponse
     * @see parent::__construct()
     * @param long $_itemId
     * @param int $_itemListed
     * @param long $_itemStartingTime
     * @return AllegroStructDoVerifyItemResponse
     */
    public function __construct($_itemId = NULL,$_itemListed = NULL,$_itemStartingTime = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemListed'=>$_itemListed,'itemStartingTime'=>$_itemStartingTime),false);
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
     * Get itemListed value
     * @return int|null
     */
    public function getItemListed()
    {
        return $this->itemListed;
    }
    /**
     * Set itemListed value
     * @param int $_itemListed the itemListed
     * @return int
     */
    public function setItemListed($_itemListed)
    {
        return ($this->itemListed = $_itemListed);
    }
    /**
     * Get itemStartingTime value
     * @return long|null
     */
    public function getItemStartingTime()
    {
        return $this->itemStartingTime;
    }
    /**
     * Set itemStartingTime value
     * @param long $_itemStartingTime the itemStartingTime
     * @return long
     */
    public function setItemStartingTime($_itemStartingTime)
    {
        return ($this->itemStartingTime = $_itemStartingTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoVerifyItemResponse
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
