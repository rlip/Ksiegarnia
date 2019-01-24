<?php
/**
 * File for class AllegroStructDoNewAuctionExtResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoNewAuctionExtResponse originally named doNewAuctionExtResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoNewAuctionExtResponse extends AllegroWsdlClass
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
     * The itemIsAllegroStandard
     * @var int
     */
    public $itemIsAllegroStandard;
    /**
     * Constructor method for doNewAuctionExtResponse
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemInfo
     * @param int $_itemIsAllegroStandard
     * @return AllegroStructDoNewAuctionExtResponse
     */
    public function __construct($_itemId = NULL,$_itemInfo = NULL,$_itemIsAllegroStandard = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemInfo'=>$_itemInfo,'itemIsAllegroStandard'=>$_itemIsAllegroStandard),false);
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
     * Get itemIsAllegroStandard value
     * @return int|null
     */
    public function getItemIsAllegroStandard()
    {
        return $this->itemIsAllegroStandard;
    }
    /**
     * Set itemIsAllegroStandard value
     * @param int $_itemIsAllegroStandard the itemIsAllegroStandard
     * @return int
     */
    public function setItemIsAllegroStandard($_itemIsAllegroStandard)
    {
        return ($this->itemIsAllegroStandard = $_itemIsAllegroStandard);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoNewAuctionExtResponse
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
