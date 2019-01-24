<?php
/**
 * File for class AllegroStructDoMyContactRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyContactRequest originally named DoMyContactRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyContactRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The auctionIdList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $auctionIdList;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The desc
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $desc;
    /**
     * Constructor method for DoMyContactRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_auctionIdList
     * @param int $_offset
     * @param int $_desc
     * @return AllegroStructDoMyContactRequest
     */
    public function __construct($_sessionHandle = NULL,$_auctionIdList = NULL,$_offset = NULL,$_desc = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'auctionIdList'=>($_auctionIdList instanceof AllegroStructArrayOfLong)?$_auctionIdList:new AllegroStructArrayOfLong($_auctionIdList),'offset'=>$_offset,'desc'=>$_desc),false);
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
     * Get auctionIdList value
     * @return AllegroStructArrayOfLong|null
     */
    public function getAuctionIdList()
    {
        return $this->auctionIdList;
    }
    /**
     * Set auctionIdList value
     * @param AllegroStructArrayOfLong $_auctionIdList the auctionIdList
     * @return AllegroStructArrayOfLong
     */
    public function setAuctionIdList($_auctionIdList)
    {
        return ($this->auctionIdList = $_auctionIdList);
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $_offset the offset
     * @return int
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
    }
    /**
     * Get desc value
     * @return int|null
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param int $_desc the desc
     * @return int
     */
    public function setDesc($_desc)
    {
        return ($this->desc = $_desc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyContactRequest
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
