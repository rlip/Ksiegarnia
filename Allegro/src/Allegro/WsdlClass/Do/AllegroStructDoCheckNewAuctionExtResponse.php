<?php
/**
 * File for class AllegroStructDoCheckNewAuctionExtResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCheckNewAuctionExtResponse originally named doCheckNewAuctionExtResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCheckNewAuctionExtResponse extends AllegroWsdlClass
{
    /**
     * The itemPrice
     * @var string
     */
    public $itemPrice;
    /**
     * The itemPriceDesc
     * @var string
     */
    public $itemPriceDesc;
    /**
     * The itemIsAllegroStandard
     * @var int
     */
    public $itemIsAllegroStandard;
    /**
     * Constructor method for doCheckNewAuctionExtResponse
     * @see parent::__construct()
     * @param string $_itemPrice
     * @param string $_itemPriceDesc
     * @param int $_itemIsAllegroStandard
     * @return AllegroStructDoCheckNewAuctionExtResponse
     */
    public function __construct($_itemPrice = NULL,$_itemPriceDesc = NULL,$_itemIsAllegroStandard = NULL)
    {
        parent::__construct(array('itemPrice'=>$_itemPrice,'itemPriceDesc'=>$_itemPriceDesc,'itemIsAllegroStandard'=>$_itemIsAllegroStandard),false);
    }
    /**
     * Get itemPrice value
     * @return string|null
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param string $_itemPrice the itemPrice
     * @return string
     */
    public function setItemPrice($_itemPrice)
    {
        return ($this->itemPrice = $_itemPrice);
    }
    /**
     * Get itemPriceDesc value
     * @return string|null
     */
    public function getItemPriceDesc()
    {
        return $this->itemPriceDesc;
    }
    /**
     * Set itemPriceDesc value
     * @param string $_itemPriceDesc the itemPriceDesc
     * @return string
     */
    public function setItemPriceDesc($_itemPriceDesc)
    {
        return ($this->itemPriceDesc = $_itemPriceDesc);
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
     * @return AllegroStructDoCheckNewAuctionExtResponse
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
