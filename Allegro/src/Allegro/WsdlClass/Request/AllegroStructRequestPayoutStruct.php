<?php
/**
 * File for class AllegroStructRequestPayoutStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRequestPayoutStruct originally named RequestPayoutStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRequestPayoutStruct extends AllegroWsdlClass
{
    /**
     * The payoutId
     * @var long
     */
    public $payoutId;
    /**
     * The payoutAmount
     * @var float
     */
    public $payoutAmount;
    /**
     * The payoutTime
     * @var long
     */
    public $payoutTime;
    /**
     * Constructor method for RequestPayoutStruct
     * @see parent::__construct()
     * @param long $_payoutId
     * @param float $_payoutAmount
     * @param long $_payoutTime
     * @return AllegroStructRequestPayoutStruct
     */
    public function __construct($_payoutId = NULL,$_payoutAmount = NULL,$_payoutTime = NULL)
    {
        parent::__construct(array('payoutId'=>$_payoutId,'payoutAmount'=>$_payoutAmount,'payoutTime'=>$_payoutTime),false);
    }
    /**
     * Get payoutId value
     * @return long|null
     */
    public function getPayoutId()
    {
        return $this->payoutId;
    }
    /**
     * Set payoutId value
     * @param long $_payoutId the payoutId
     * @return long
     */
    public function setPayoutId($_payoutId)
    {
        return ($this->payoutId = $_payoutId);
    }
    /**
     * Get payoutAmount value
     * @return float|null
     */
    public function getPayoutAmount()
    {
        return $this->payoutAmount;
    }
    /**
     * Set payoutAmount value
     * @param float $_payoutAmount the payoutAmount
     * @return float
     */
    public function setPayoutAmount($_payoutAmount)
    {
        return ($this->payoutAmount = $_payoutAmount);
    }
    /**
     * Get payoutTime value
     * @return long|null
     */
    public function getPayoutTime()
    {
        return $this->payoutTime;
    }
    /**
     * Set payoutTime value
     * @param long $_payoutTime the payoutTime
     * @return long
     */
    public function setPayoutTime($_payoutTime)
    {
        return ($this->payoutTime = $_payoutTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRequestPayoutStruct
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
