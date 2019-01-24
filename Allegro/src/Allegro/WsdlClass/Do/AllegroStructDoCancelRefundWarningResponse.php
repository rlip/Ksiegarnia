<?php
/**
 * File for class AllegroStructDoCancelRefundWarningResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCancelRefundWarningResponse originally named doCancelRefundWarningResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCancelRefundWarningResponse extends AllegroWsdlClass
{
    /**
     * The cancellationResult
     * @var boolean
     */
    public $cancellationResult;
    /**
     * Constructor method for doCancelRefundWarningResponse
     * @see parent::__construct()
     * @param boolean $_cancellationResult
     * @return AllegroStructDoCancelRefundWarningResponse
     */
    public function __construct($_cancellationResult = NULL)
    {
        parent::__construct(array('cancellationResult'=>$_cancellationResult),false);
    }
    /**
     * Get cancellationResult value
     * @return boolean|null
     */
    public function getCancellationResult()
    {
        return $this->cancellationResult;
    }
    /**
     * Set cancellationResult value
     * @param boolean $_cancellationResult the cancellationResult
     * @return boolean
     */
    public function setCancellationResult($_cancellationResult)
    {
        return ($this->cancellationResult = $_cancellationResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCancelRefundWarningResponse
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
