<?php
/**
 * File for class AllegroStructDoSellSomeAgainInShopResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSellSomeAgainInShopResponse originally named doSellSomeAgainInShopResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSellSomeAgainInShopResponse extends AllegroWsdlClass
{
    /**
     * The itemsSellAgain
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfStructsellagain
     */
    public $itemsSellAgain;
    /**
     * The itemsSellFailed
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfStructsellfailed
     */
    public $itemsSellFailed;
    /**
     * The itemsSellNotFound
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsSellNotFound;
    /**
     * Constructor method for doSellSomeAgainInShopResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfStructsellagain $_itemsSellAgain
     * @param AllegroStructArrayOfStructsellfailed $_itemsSellFailed
     * @param AllegroStructArrayOfLong $_itemsSellNotFound
     * @return AllegroStructDoSellSomeAgainInShopResponse
     */
    public function __construct($_itemsSellAgain = NULL,$_itemsSellFailed = NULL,$_itemsSellNotFound = NULL)
    {
        parent::__construct(array('itemsSellAgain'=>($_itemsSellAgain instanceof AllegroStructArrayOfStructsellagain)?$_itemsSellAgain:new AllegroStructArrayOfStructsellagain($_itemsSellAgain),'itemsSellFailed'=>($_itemsSellFailed instanceof AllegroStructArrayOfStructsellfailed)?$_itemsSellFailed:new AllegroStructArrayOfStructsellfailed($_itemsSellFailed),'itemsSellNotFound'=>($_itemsSellNotFound instanceof AllegroStructArrayOfLong)?$_itemsSellNotFound:new AllegroStructArrayOfLong($_itemsSellNotFound)),false);
    }
    /**
     * Get itemsSellAgain value
     * @return AllegroStructArrayOfStructsellagain|null
     */
    public function getItemsSellAgain()
    {
        return $this->itemsSellAgain;
    }
    /**
     * Set itemsSellAgain value
     * @param AllegroStructArrayOfStructsellagain $_itemsSellAgain the itemsSellAgain
     * @return AllegroStructArrayOfStructsellagain
     */
    public function setItemsSellAgain($_itemsSellAgain)
    {
        return ($this->itemsSellAgain = $_itemsSellAgain);
    }
    /**
     * Get itemsSellFailed value
     * @return AllegroStructArrayOfStructsellfailed|null
     */
    public function getItemsSellFailed()
    {
        return $this->itemsSellFailed;
    }
    /**
     * Set itemsSellFailed value
     * @param AllegroStructArrayOfStructsellfailed $_itemsSellFailed the itemsSellFailed
     * @return AllegroStructArrayOfStructsellfailed
     */
    public function setItemsSellFailed($_itemsSellFailed)
    {
        return ($this->itemsSellFailed = $_itemsSellFailed);
    }
    /**
     * Get itemsSellNotFound value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsSellNotFound()
    {
        return $this->itemsSellNotFound;
    }
    /**
     * Set itemsSellNotFound value
     * @param AllegroStructArrayOfLong $_itemsSellNotFound the itemsSellNotFound
     * @return AllegroStructArrayOfLong
     */
    public function setItemsSellNotFound($_itemsSellNotFound)
    {
        return ($this->itemsSellNotFound = $_itemsSellNotFound);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSellSomeAgainInShopResponse
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
