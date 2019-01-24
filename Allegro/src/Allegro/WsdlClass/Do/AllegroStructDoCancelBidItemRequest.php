<?php
/**
 * File for class AllegroStructDoCancelBidItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCancelBidItemRequest originally named DoCancelBidItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCancelBidItemRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The cancelItemId
     * @var long
     */
    public $cancelItemId;
    /**
     * The cancelBidsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $cancelBidsArray;
    /**
     * The cancelBidsReason
     * @var string
     */
    public $cancelBidsReason;
    /**
     * The cancelAddToBlackList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $cancelAddToBlackList;
    /**
     * Constructor method for DoCancelBidItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_cancelItemId
     * @param AllegroStructArrayOfInt $_cancelBidsArray
     * @param string $_cancelBidsReason
     * @param long $_cancelAddToBlackList
     * @return AllegroStructDoCancelBidItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_cancelItemId = NULL,$_cancelBidsArray = NULL,$_cancelBidsReason = NULL,$_cancelAddToBlackList = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'cancelItemId'=>$_cancelItemId,'cancelBidsArray'=>($_cancelBidsArray instanceof AllegroStructArrayOfInt)?$_cancelBidsArray:new AllegroStructArrayOfInt($_cancelBidsArray),'cancelBidsReason'=>$_cancelBidsReason,'cancelAddToBlackList'=>$_cancelAddToBlackList),false);
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
     * Get cancelItemId value
     * @return long|null
     */
    public function getCancelItemId()
    {
        return $this->cancelItemId;
    }
    /**
     * Set cancelItemId value
     * @param long $_cancelItemId the cancelItemId
     * @return long
     */
    public function setCancelItemId($_cancelItemId)
    {
        return ($this->cancelItemId = $_cancelItemId);
    }
    /**
     * Get cancelBidsArray value
     * @return AllegroStructArrayOfInt|null
     */
    public function getCancelBidsArray()
    {
        return $this->cancelBidsArray;
    }
    /**
     * Set cancelBidsArray value
     * @param AllegroStructArrayOfInt $_cancelBidsArray the cancelBidsArray
     * @return AllegroStructArrayOfInt
     */
    public function setCancelBidsArray($_cancelBidsArray)
    {
        return ($this->cancelBidsArray = $_cancelBidsArray);
    }
    /**
     * Get cancelBidsReason value
     * @return string|null
     */
    public function getCancelBidsReason()
    {
        return $this->cancelBidsReason;
    }
    /**
     * Set cancelBidsReason value
     * @param string $_cancelBidsReason the cancelBidsReason
     * @return string
     */
    public function setCancelBidsReason($_cancelBidsReason)
    {
        return ($this->cancelBidsReason = $_cancelBidsReason);
    }
    /**
     * Get cancelAddToBlackList value
     * @return long|null
     */
    public function getCancelAddToBlackList()
    {
        return $this->cancelAddToBlackList;
    }
    /**
     * Set cancelAddToBlackList value
     * @param long $_cancelAddToBlackList the cancelAddToBlackList
     * @return long
     */
    public function setCancelAddToBlackList($_cancelAddToBlackList)
    {
        return ($this->cancelAddToBlackList = $_cancelAddToBlackList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCancelBidItemRequest
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
