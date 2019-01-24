<?php
/**
 * File for class AllegroStructDoSellSomeAgainInShopRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSellSomeAgainInShopRequest originally named DoSellSomeAgainInShopRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSellSomeAgainInShopRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The sellItemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $sellItemsArray;
    /**
     * The sellStartingTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $sellStartingTime;
    /**
     * The sellShopDuration
     * @var int
     */
    public $sellShopDuration;
    /**
     * The sellShopOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellShopOptions;
    /**
     * The sellProlongOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellProlongOptions;
    /**
     * The sellShopCategory
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $sellShopCategory;
    /**
     * The localIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $localIds;
    /**
     * Constructor method for DoSellSomeAgainInShopRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_sellItemsArray
     * @param long $_sellStartingTime
     * @param int $_sellShopDuration
     * @param int $_sellShopOptions
     * @param int $_sellProlongOptions
     * @param long $_sellShopCategory
     * @param AllegroStructArrayOfInt $_localIds
     * @return AllegroStructDoSellSomeAgainInShopRequest
     */
    public function __construct($_sessionHandle = NULL,$_sellItemsArray = NULL,$_sellStartingTime = NULL,$_sellShopDuration = NULL,$_sellShopOptions = NULL,$_sellProlongOptions = NULL,$_sellShopCategory = NULL,$_localIds = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'sellItemsArray'=>($_sellItemsArray instanceof AllegroStructArrayOfLong)?$_sellItemsArray:new AllegroStructArrayOfLong($_sellItemsArray),'sellStartingTime'=>$_sellStartingTime,'sellShopDuration'=>$_sellShopDuration,'sellShopOptions'=>$_sellShopOptions,'sellProlongOptions'=>$_sellProlongOptions,'sellShopCategory'=>$_sellShopCategory,'localIds'=>($_localIds instanceof AllegroStructArrayOfInt)?$_localIds:new AllegroStructArrayOfInt($_localIds)),false);
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
     * Get sellItemsArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getSellItemsArray()
    {
        return $this->sellItemsArray;
    }
    /**
     * Set sellItemsArray value
     * @param AllegroStructArrayOfLong $_sellItemsArray the sellItemsArray
     * @return AllegroStructArrayOfLong
     */
    public function setSellItemsArray($_sellItemsArray)
    {
        return ($this->sellItemsArray = $_sellItemsArray);
    }
    /**
     * Get sellStartingTime value
     * @return long|null
     */
    public function getSellStartingTime()
    {
        return $this->sellStartingTime;
    }
    /**
     * Set sellStartingTime value
     * @param long $_sellStartingTime the sellStartingTime
     * @return long
     */
    public function setSellStartingTime($_sellStartingTime)
    {
        return ($this->sellStartingTime = $_sellStartingTime);
    }
    /**
     * Get sellShopDuration value
     * @return int|null
     */
    public function getSellShopDuration()
    {
        return $this->sellShopDuration;
    }
    /**
     * Set sellShopDuration value
     * @param int $_sellShopDuration the sellShopDuration
     * @return int
     */
    public function setSellShopDuration($_sellShopDuration)
    {
        return ($this->sellShopDuration = $_sellShopDuration);
    }
    /**
     * Get sellShopOptions value
     * @return int|null
     */
    public function getSellShopOptions()
    {
        return $this->sellShopOptions;
    }
    /**
     * Set sellShopOptions value
     * @param int $_sellShopOptions the sellShopOptions
     * @return int
     */
    public function setSellShopOptions($_sellShopOptions)
    {
        return ($this->sellShopOptions = $_sellShopOptions);
    }
    /**
     * Get sellProlongOptions value
     * @return int|null
     */
    public function getSellProlongOptions()
    {
        return $this->sellProlongOptions;
    }
    /**
     * Set sellProlongOptions value
     * @param int $_sellProlongOptions the sellProlongOptions
     * @return int
     */
    public function setSellProlongOptions($_sellProlongOptions)
    {
        return ($this->sellProlongOptions = $_sellProlongOptions);
    }
    /**
     * Get sellShopCategory value
     * @return long|null
     */
    public function getSellShopCategory()
    {
        return $this->sellShopCategory;
    }
    /**
     * Set sellShopCategory value
     * @param long $_sellShopCategory the sellShopCategory
     * @return long
     */
    public function setSellShopCategory($_sellShopCategory)
    {
        return ($this->sellShopCategory = $_sellShopCategory);
    }
    /**
     * Get localIds value
     * @return AllegroStructArrayOfInt|null
     */
    public function getLocalIds()
    {
        return $this->localIds;
    }
    /**
     * Set localIds value
     * @param AllegroStructArrayOfInt $_localIds the localIds
     * @return AllegroStructArrayOfInt
     */
    public function setLocalIds($_localIds)
    {
        return ($this->localIds = $_localIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSellSomeAgainInShopRequest
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
