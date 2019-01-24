<?php
/**
 * File for class AllegroStructDoGetTransactionsIDsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetTransactionsIDsRequest originally named DoGetTransactionsIDsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetTransactionsIDsRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemsIdArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsIdArray;
    /**
     * The userRole
     * @var string
     */
    public $userRole;
    /**
     * The shipmentIdArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $shipmentIdArray;
    /**
     * Constructor method for DoGetTransactionsIDsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_itemsIdArray
     * @param string $_userRole
     * @param AllegroStructArrayOfLong $_shipmentIdArray
     * @return AllegroStructDoGetTransactionsIDsRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemsIdArray = NULL,$_userRole = NULL,$_shipmentIdArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemsIdArray'=>($_itemsIdArray instanceof AllegroStructArrayOfLong)?$_itemsIdArray:new AllegroStructArrayOfLong($_itemsIdArray),'userRole'=>$_userRole,'shipmentIdArray'=>($_shipmentIdArray instanceof AllegroStructArrayOfLong)?$_shipmentIdArray:new AllegroStructArrayOfLong($_shipmentIdArray)),false);
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
     * Get itemsIdArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsIdArray()
    {
        return $this->itemsIdArray;
    }
    /**
     * Set itemsIdArray value
     * @param AllegroStructArrayOfLong $_itemsIdArray the itemsIdArray
     * @return AllegroStructArrayOfLong
     */
    public function setItemsIdArray($_itemsIdArray)
    {
        return ($this->itemsIdArray = $_itemsIdArray);
    }
    /**
     * Get userRole value
     * @return string|null
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
    /**
     * Set userRole value
     * @param string $_userRole the userRole
     * @return string
     */
    public function setUserRole($_userRole)
    {
        return ($this->userRole = $_userRole);
    }
    /**
     * Get shipmentIdArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getShipmentIdArray()
    {
        return $this->shipmentIdArray;
    }
    /**
     * Set shipmentIdArray value
     * @param AllegroStructArrayOfLong $_shipmentIdArray the shipmentIdArray
     * @return AllegroStructArrayOfLong
     */
    public function setShipmentIdArray($_shipmentIdArray)
    {
        return ($this->shipmentIdArray = $_shipmentIdArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetTransactionsIDsRequest
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
