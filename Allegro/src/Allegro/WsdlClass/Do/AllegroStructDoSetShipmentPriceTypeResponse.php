<?php
/**
 * File for class AllegroStructDoSetShipmentPriceTypeResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSetShipmentPriceTypeResponse originally named doSetShipmentPriceTypeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSetShipmentPriceTypeResponse extends AllegroWsdlClass
{
    /**
     * The operationResult
     * @var int
     */
    public $operationResult;
    /**
     * Constructor method for doSetShipmentPriceTypeResponse
     * @see parent::__construct()
     * @param int $_operationResult
     * @return AllegroStructDoSetShipmentPriceTypeResponse
     */
    public function __construct($_operationResult = NULL)
    {
        parent::__construct(array('operationResult'=>$_operationResult),false);
    }
    /**
     * Get operationResult value
     * @return int|null
     */
    public function getOperationResult()
    {
        return $this->operationResult;
    }
    /**
     * Set operationResult value
     * @param int $_operationResult the operationResult
     * @return int
     */
    public function setOperationResult($_operationResult)
    {
        return ($this->operationResult = $_operationResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSetShipmentPriceTypeResponse
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
