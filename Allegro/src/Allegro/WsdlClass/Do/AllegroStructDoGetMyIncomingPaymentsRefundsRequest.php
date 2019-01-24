<?php
/**
 * File for class AllegroStructDoGetMyIncomingPaymentsRefundsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyIncomingPaymentsRefundsRequest originally named DoGetMyIncomingPaymentsRefundsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyIncomingPaymentsRefundsRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The buyerId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $buyerId;
    /**
     * The itemId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $itemId;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $limit;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * Constructor method for DoGetMyIncomingPaymentsRefundsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_buyerId
     * @param long $_itemId
     * @param int $_limit
     * @param int $_offset
     * @return AllegroStructDoGetMyIncomingPaymentsRefundsRequest
     */
    public function __construct($_sessionHandle = NULL,$_buyerId = NULL,$_itemId = NULL,$_limit = NULL,$_offset = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'buyerId'=>$_buyerId,'itemId'=>$_itemId,'limit'=>$_limit,'offset'=>$_offset),false);
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
     * Get buyerId value
     * @return int|null
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }
    /**
     * Set buyerId value
     * @param int $_buyerId the buyerId
     * @return int
     */
    public function setBuyerId($_buyerId)
    {
        return ($this->buyerId = $_buyerId);
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
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $_limit the limit
     * @return int
     */
    public function setLimit($_limit)
    {
        return ($this->limit = $_limit);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyIncomingPaymentsRefundsRequest
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
