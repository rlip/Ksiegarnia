<?php
/**
 * File for class AllegroStructPostBuyFormShipmentTrackingStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormShipmentTrackingStruct originally named PostBuyFormShipmentTrackingStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormShipmentTrackingStruct extends AllegroWsdlClass
{
    /**
     * The postBuyFormOperatorId
     * @var int
     */
    public $postBuyFormOperatorId;
    /**
     * The postBuyFormPackageId
     * @var string
     */
    public $postBuyFormPackageId;
    /**
     * The postBuyFormPackageStatus
     * @var string
     */
    public $postBuyFormPackageStatus;
    /**
     * Constructor method for PostBuyFormShipmentTrackingStruct
     * @see parent::__construct()
     * @param int $_postBuyFormOperatorId
     * @param string $_postBuyFormPackageId
     * @param string $_postBuyFormPackageStatus
     * @return AllegroStructPostBuyFormShipmentTrackingStruct
     */
    public function __construct($_postBuyFormOperatorId = NULL,$_postBuyFormPackageId = NULL,$_postBuyFormPackageStatus = NULL)
    {
        parent::__construct(array('postBuyFormOperatorId'=>$_postBuyFormOperatorId,'postBuyFormPackageId'=>$_postBuyFormPackageId,'postBuyFormPackageStatus'=>$_postBuyFormPackageStatus),false);
    }
    /**
     * Get postBuyFormOperatorId value
     * @return int|null
     */
    public function getPostBuyFormOperatorId()
    {
        return $this->postBuyFormOperatorId;
    }
    /**
     * Set postBuyFormOperatorId value
     * @param int $_postBuyFormOperatorId the postBuyFormOperatorId
     * @return int
     */
    public function setPostBuyFormOperatorId($_postBuyFormOperatorId)
    {
        return ($this->postBuyFormOperatorId = $_postBuyFormOperatorId);
    }
    /**
     * Get postBuyFormPackageId value
     * @return string|null
     */
    public function getPostBuyFormPackageId()
    {
        return $this->postBuyFormPackageId;
    }
    /**
     * Set postBuyFormPackageId value
     * @param string $_postBuyFormPackageId the postBuyFormPackageId
     * @return string
     */
    public function setPostBuyFormPackageId($_postBuyFormPackageId)
    {
        return ($this->postBuyFormPackageId = $_postBuyFormPackageId);
    }
    /**
     * Get postBuyFormPackageStatus value
     * @return string|null
     */
    public function getPostBuyFormPackageStatus()
    {
        return $this->postBuyFormPackageStatus;
    }
    /**
     * Set postBuyFormPackageStatus value
     * @param string $_postBuyFormPackageStatus the postBuyFormPackageStatus
     * @return string
     */
    public function setPostBuyFormPackageStatus($_postBuyFormPackageStatus)
    {
        return ($this->postBuyFormPackageStatus = $_postBuyFormPackageStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormShipmentTrackingStruct
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
