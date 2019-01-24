<?php
/**
 * File for class AllegroStructDoGetMyIncomingPaymentsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyIncomingPaymentsRequest originally named DoGetMyIncomingPaymentsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyIncomingPaymentsRequest extends AllegroWsdlClass
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
     * The transRecvDateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $transRecvDateFrom;
    /**
     * The transRecvDateTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $transRecvDateTo;
    /**
     * The transPageLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $transPageLimit;
    /**
     * The transOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $transOffset;
    /**
     * Constructor method for DoGetMyIncomingPaymentsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_buyerId
     * @param long $_itemId
     * @param long $_transRecvDateFrom
     * @param long $_transRecvDateTo
     * @param int $_transPageLimit
     * @param int $_transOffset
     * @return AllegroStructDoGetMyIncomingPaymentsRequest
     */
    public function __construct($_sessionHandle = NULL,$_buyerId = NULL,$_itemId = NULL,$_transRecvDateFrom = NULL,$_transRecvDateTo = NULL,$_transPageLimit = NULL,$_transOffset = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'buyerId'=>$_buyerId,'itemId'=>$_itemId,'transRecvDateFrom'=>$_transRecvDateFrom,'transRecvDateTo'=>$_transRecvDateTo,'transPageLimit'=>$_transPageLimit,'transOffset'=>$_transOffset),false);
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
     * Get transRecvDateFrom value
     * @return long|null
     */
    public function getTransRecvDateFrom()
    {
        return $this->transRecvDateFrom;
    }
    /**
     * Set transRecvDateFrom value
     * @param long $_transRecvDateFrom the transRecvDateFrom
     * @return long
     */
    public function setTransRecvDateFrom($_transRecvDateFrom)
    {
        return ($this->transRecvDateFrom = $_transRecvDateFrom);
    }
    /**
     * Get transRecvDateTo value
     * @return long|null
     */
    public function getTransRecvDateTo()
    {
        return $this->transRecvDateTo;
    }
    /**
     * Set transRecvDateTo value
     * @param long $_transRecvDateTo the transRecvDateTo
     * @return long
     */
    public function setTransRecvDateTo($_transRecvDateTo)
    {
        return ($this->transRecvDateTo = $_transRecvDateTo);
    }
    /**
     * Get transPageLimit value
     * @return int|null
     */
    public function getTransPageLimit()
    {
        return $this->transPageLimit;
    }
    /**
     * Set transPageLimit value
     * @param int $_transPageLimit the transPageLimit
     * @return int
     */
    public function setTransPageLimit($_transPageLimit)
    {
        return ($this->transPageLimit = $_transPageLimit);
    }
    /**
     * Get transOffset value
     * @return int|null
     */
    public function getTransOffset()
    {
        return $this->transOffset;
    }
    /**
     * Set transOffset value
     * @param int $_transOffset the transOffset
     * @return int
     */
    public function setTransOffset($_transOffset)
    {
        return ($this->transOffset = $_transOffset);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyIncomingPaymentsRequest
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
