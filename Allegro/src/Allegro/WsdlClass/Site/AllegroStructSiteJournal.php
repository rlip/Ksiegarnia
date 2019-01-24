<?php
/**
 * File for class AllegroStructSiteJournal
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSiteJournal originally named SiteJournal
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSiteJournal extends AllegroWsdlClass
{
    /**
     * The rowId
     * @var long
     */
    public $rowId;
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The changeType
     * @var string
     */
    public $changeType;
    /**
     * The changeDate
     * @var long
     */
    public $changeDate;
    /**
     * The currentPrice
     * @var float
     */
    public $currentPrice;
    /**
     * The itemSellerId
     * @var long
     */
    public $itemSellerId;
    /**
     * Constructor method for SiteJournal
     * @see parent::__construct()
     * @param long $_rowId
     * @param long $_itemId
     * @param string $_changeType
     * @param long $_changeDate
     * @param float $_currentPrice
     * @param long $_itemSellerId
     * @return AllegroStructSiteJournal
     */
    public function __construct($_rowId = NULL,$_itemId = NULL,$_changeType = NULL,$_changeDate = NULL,$_currentPrice = NULL,$_itemSellerId = NULL)
    {
        parent::__construct(array('rowId'=>$_rowId,'itemId'=>$_itemId,'changeType'=>$_changeType,'changeDate'=>$_changeDate,'currentPrice'=>$_currentPrice,'itemSellerId'=>$_itemSellerId),false);
    }
    /**
     * Get rowId value
     * @return long|null
     */
    public function getRowId()
    {
        return $this->rowId;
    }
    /**
     * Set rowId value
     * @param long $_rowId the rowId
     * @return long
     */
    public function setRowId($_rowId)
    {
        return ($this->rowId = $_rowId);
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
     * Get changeType value
     * @return string|null
     */
    public function getChangeType()
    {
        return $this->changeType;
    }
    /**
     * Set changeType value
     * @param string $_changeType the changeType
     * @return string
     */
    public function setChangeType($_changeType)
    {
        return ($this->changeType = $_changeType);
    }
    /**
     * Get changeDate value
     * @return long|null
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }
    /**
     * Set changeDate value
     * @param long $_changeDate the changeDate
     * @return long
     */
    public function setChangeDate($_changeDate)
    {
        return ($this->changeDate = $_changeDate);
    }
    /**
     * Get currentPrice value
     * @return float|null
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }
    /**
     * Set currentPrice value
     * @param float $_currentPrice the currentPrice
     * @return float
     */
    public function setCurrentPrice($_currentPrice)
    {
        return ($this->currentPrice = $_currentPrice);
    }
    /**
     * Get itemSellerId value
     * @return long|null
     */
    public function getItemSellerId()
    {
        return $this->itemSellerId;
    }
    /**
     * Set itemSellerId value
     * @param long $_itemSellerId the itemSellerId
     * @return long
     */
    public function setItemSellerId($_itemSellerId)
    {
        return ($this->itemSellerId = $_itemSellerId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSiteJournal
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
