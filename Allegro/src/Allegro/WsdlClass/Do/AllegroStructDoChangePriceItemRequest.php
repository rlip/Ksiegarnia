<?php
/**
 * File for class AllegroStructDoChangePriceItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoChangePriceItemRequest originally named DoChangePriceItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoChangePriceItemRequest extends AllegroWsdlClass
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
     * The newStartingPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $newStartingPrice;
    /**
     * The newReservePrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $newReservePrice;
    /**
     * The newBuyNowPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $newBuyNowPrice;
    /**
     * Constructor method for DoChangePriceItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_itemId
     * @param float $_newStartingPrice
     * @param float $_newReservePrice
     * @param float $_newBuyNowPrice
     * @return AllegroStructDoChangePriceItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemId = NULL,$_newStartingPrice = NULL,$_newReservePrice = NULL,$_newBuyNowPrice = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemId'=>$_itemId,'newStartingPrice'=>$_newStartingPrice,'newReservePrice'=>$_newReservePrice,'newBuyNowPrice'=>$_newBuyNowPrice),false);
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
     * Get newStartingPrice value
     * @return float|null
     */
    public function getNewStartingPrice()
    {
        return $this->newStartingPrice;
    }
    /**
     * Set newStartingPrice value
     * @param float $_newStartingPrice the newStartingPrice
     * @return float
     */
    public function setNewStartingPrice($_newStartingPrice)
    {
        return ($this->newStartingPrice = $_newStartingPrice);
    }
    /**
     * Get newReservePrice value
     * @return float|null
     */
    public function getNewReservePrice()
    {
        return $this->newReservePrice;
    }
    /**
     * Set newReservePrice value
     * @param float $_newReservePrice the newReservePrice
     * @return float
     */
    public function setNewReservePrice($_newReservePrice)
    {
        return ($this->newReservePrice = $_newReservePrice);
    }
    /**
     * Get newBuyNowPrice value
     * @return float|null
     */
    public function getNewBuyNowPrice()
    {
        return $this->newBuyNowPrice;
    }
    /**
     * Set newBuyNowPrice value
     * @param float $_newBuyNowPrice the newBuyNowPrice
     * @return float
     */
    public function setNewBuyNowPrice($_newBuyNowPrice)
    {
        return ($this->newBuyNowPrice = $_newBuyNowPrice);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoChangePriceItemRequest
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
