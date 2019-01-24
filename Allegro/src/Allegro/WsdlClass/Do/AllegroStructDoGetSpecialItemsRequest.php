<?php
/**
 * File for class AllegroStructDoGetSpecialItemsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSpecialItemsRequest originally named DoGetSpecialItemsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSpecialItemsRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The specialType
     * @var int
     */
    public $specialType;
    /**
     * The specialGroup
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $specialGroup;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The orderFulfillmentTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $orderFulfillmentTime;
    /**
     * Constructor method for DoGetSpecialItemsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_specialType
     * @param int $_specialGroup
     * @param int $_offset
     * @param int $_orderFulfillmentTime
     * @return AllegroStructDoGetSpecialItemsRequest
     */
    public function __construct($_sessionHandle = NULL,$_specialType = NULL,$_specialGroup = NULL,$_offset = NULL,$_orderFulfillmentTime = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'specialType'=>$_specialType,'specialGroup'=>$_specialGroup,'offset'=>$_offset,'orderFulfillmentTime'=>$_orderFulfillmentTime),false);
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
     * Get specialType value
     * @return int|null
     */
    public function getSpecialType()
    {
        return $this->specialType;
    }
    /**
     * Set specialType value
     * @param int $_specialType the specialType
     * @return int
     */
    public function setSpecialType($_specialType)
    {
        return ($this->specialType = $_specialType);
    }
    /**
     * Get specialGroup value
     * @return int|null
     */
    public function getSpecialGroup()
    {
        return $this->specialGroup;
    }
    /**
     * Set specialGroup value
     * @param int $_specialGroup the specialGroup
     * @return int
     */
    public function setSpecialGroup($_specialGroup)
    {
        return ($this->specialGroup = $_specialGroup);
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
     * Get orderFulfillmentTime value
     * @return int|null
     */
    public function getOrderFulfillmentTime()
    {
        return $this->orderFulfillmentTime;
    }
    /**
     * Set orderFulfillmentTime value
     * @param int $_orderFulfillmentTime the orderFulfillmentTime
     * @return int
     */
    public function setOrderFulfillmentTime($_orderFulfillmentTime)
    {
        return ($this->orderFulfillmentTime = $_orderFulfillmentTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSpecialItemsRequest
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
