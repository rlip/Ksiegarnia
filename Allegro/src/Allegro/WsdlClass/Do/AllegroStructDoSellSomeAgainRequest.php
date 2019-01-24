<?php
/**
 * File for class AllegroStructDoSellSomeAgainRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSellSomeAgainRequest originally named DoSellSomeAgainRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSellSomeAgainRequest extends AllegroWsdlClass
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
     * The sellAuctionDuration
     * @var int
     */
    public $sellAuctionDuration;
    /**
     * The sellOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellOptions;
    /**
     * The localIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $localIds;
    /**
     * The sellProlongOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellProlongOptions;
    /**
     * Constructor method for DoSellSomeAgainRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_sellItemsArray
     * @param long $_sellStartingTime
     * @param int $_sellAuctionDuration
     * @param int $_sellOptions
     * @param AllegroStructArrayOfInt $_localIds
     * @param int $_sellProlongOptions
     * @return AllegroStructDoSellSomeAgainRequest
     */
    public function __construct($_sessionHandle = NULL,$_sellItemsArray = NULL,$_sellStartingTime = NULL,$_sellAuctionDuration = NULL,$_sellOptions = NULL,$_localIds = NULL,$_sellProlongOptions = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'sellItemsArray'=>($_sellItemsArray instanceof AllegroStructArrayOfLong)?$_sellItemsArray:new AllegroStructArrayOfLong($_sellItemsArray),'sellStartingTime'=>$_sellStartingTime,'sellAuctionDuration'=>$_sellAuctionDuration,'sellOptions'=>$_sellOptions,'localIds'=>($_localIds instanceof AllegroStructArrayOfInt)?$_localIds:new AllegroStructArrayOfInt($_localIds),'sellProlongOptions'=>$_sellProlongOptions),false);
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
     * Get sellAuctionDuration value
     * @return int|null
     */
    public function getSellAuctionDuration()
    {
        return $this->sellAuctionDuration;
    }
    /**
     * Set sellAuctionDuration value
     * @param int $_sellAuctionDuration the sellAuctionDuration
     * @return int
     */
    public function setSellAuctionDuration($_sellAuctionDuration)
    {
        return ($this->sellAuctionDuration = $_sellAuctionDuration);
    }
    /**
     * Get sellOptions value
     * @return int|null
     */
    public function getSellOptions()
    {
        return $this->sellOptions;
    }
    /**
     * Set sellOptions value
     * @param int $_sellOptions the sellOptions
     * @return int
     */
    public function setSellOptions($_sellOptions)
    {
        return ($this->sellOptions = $_sellOptions);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSellSomeAgainRequest
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
