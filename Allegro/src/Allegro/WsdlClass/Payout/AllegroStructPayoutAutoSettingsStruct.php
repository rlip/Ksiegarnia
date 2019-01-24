<?php
/**
 * File for class AllegroStructPayoutAutoSettingsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPayoutAutoSettingsStruct originally named PayoutAutoSettingsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPayoutAutoSettingsStruct extends AllegroWsdlClass
{
    /**
     * The payoutAutoAmount
     * @var float
     */
    public $payoutAutoAmount;
    /**
     * The payoutAutoFrequency
     * @var AllegroStructPayoutAutoFrequencyStruct
     */
    public $payoutAutoFrequency;
    /**
     * Constructor method for PayoutAutoSettingsStruct
     * @see parent::__construct()
     * @param float $_payoutAutoAmount
     * @param AllegroStructPayoutAutoFrequencyStruct $_payoutAutoFrequency
     * @return AllegroStructPayoutAutoSettingsStruct
     */
    public function __construct($_payoutAutoAmount = NULL,$_payoutAutoFrequency = NULL)
    {
        parent::__construct(array('payoutAutoAmount'=>$_payoutAutoAmount,'payoutAutoFrequency'=>$_payoutAutoFrequency),false);
    }
    /**
     * Get payoutAutoAmount value
     * @return float|null
     */
    public function getPayoutAutoAmount()
    {
        return $this->payoutAutoAmount;
    }
    /**
     * Set payoutAutoAmount value
     * @param float $_payoutAutoAmount the payoutAutoAmount
     * @return float
     */
    public function setPayoutAutoAmount($_payoutAutoAmount)
    {
        return ($this->payoutAutoAmount = $_payoutAutoAmount);
    }
    /**
     * Get payoutAutoFrequency value
     * @return AllegroStructPayoutAutoFrequencyStruct|null
     */
    public function getPayoutAutoFrequency()
    {
        return $this->payoutAutoFrequency;
    }
    /**
     * Set payoutAutoFrequency value
     * @param AllegroStructPayoutAutoFrequencyStruct $_payoutAutoFrequency the payoutAutoFrequency
     * @return AllegroStructPayoutAutoFrequencyStruct
     */
    public function setPayoutAutoFrequency($_payoutAutoFrequency)
    {
        return ($this->payoutAutoFrequency = $_payoutAutoFrequency);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPayoutAutoSettingsStruct
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
