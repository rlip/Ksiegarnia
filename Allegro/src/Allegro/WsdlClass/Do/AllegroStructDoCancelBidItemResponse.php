<?php
/**
 * File for class AllegroStructDoCancelBidItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCancelBidItemResponse originally named doCancelBidItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCancelBidItemResponse extends AllegroWsdlClass
{
    /**
     * The cancelBidValue
     * @var int
     */
    public $cancelBidValue;
    /**
     * The cancelledBids
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $cancelledBids;
    /**
     * The notCancelledBids
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $notCancelledBids;
    /**
     * Constructor method for doCancelBidItemResponse
     * @see parent::__construct()
     * @param int $_cancelBidValue
     * @param AllegroStructArrayOfInt $_cancelledBids
     * @param AllegroStructArrayOfInt $_notCancelledBids
     * @return AllegroStructDoCancelBidItemResponse
     */
    public function __construct($_cancelBidValue = NULL,$_cancelledBids = NULL,$_notCancelledBids = NULL)
    {
        parent::__construct(array('cancelBidValue'=>$_cancelBidValue,'cancelledBids'=>($_cancelledBids instanceof AllegroStructArrayOfInt)?$_cancelledBids:new AllegroStructArrayOfInt($_cancelledBids),'notCancelledBids'=>($_notCancelledBids instanceof AllegroStructArrayOfInt)?$_notCancelledBids:new AllegroStructArrayOfInt($_notCancelledBids)),false);
    }
    /**
     * Get cancelBidValue value
     * @return int|null
     */
    public function getCancelBidValue()
    {
        return $this->cancelBidValue;
    }
    /**
     * Set cancelBidValue value
     * @param int $_cancelBidValue the cancelBidValue
     * @return int
     */
    public function setCancelBidValue($_cancelBidValue)
    {
        return ($this->cancelBidValue = $_cancelBidValue);
    }
    /**
     * Get cancelledBids value
     * @return AllegroStructArrayOfInt|null
     */
    public function getCancelledBids()
    {
        return $this->cancelledBids;
    }
    /**
     * Set cancelledBids value
     * @param AllegroStructArrayOfInt $_cancelledBids the cancelledBids
     * @return AllegroStructArrayOfInt
     */
    public function setCancelledBids($_cancelledBids)
    {
        return ($this->cancelledBids = $_cancelledBids);
    }
    /**
     * Get notCancelledBids value
     * @return AllegroStructArrayOfInt|null
     */
    public function getNotCancelledBids()
    {
        return $this->notCancelledBids;
    }
    /**
     * Set notCancelledBids value
     * @param AllegroStructArrayOfInt $_notCancelledBids the notCancelledBids
     * @return AllegroStructArrayOfInt
     */
    public function setNotCancelledBids($_notCancelledBids)
    {
        return ($this->notCancelledBids = $_notCancelledBids);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCancelBidItemResponse
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
