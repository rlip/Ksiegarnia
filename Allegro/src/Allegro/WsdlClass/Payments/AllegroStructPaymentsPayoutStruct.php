<?php
/**
 * File for class AllegroStructPaymentsPayoutStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPaymentsPayoutStruct originally named PaymentsPayoutStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPaymentsPayoutStruct extends AllegroWsdlClass
{
    /**
     * The payoutType
     * @var int
     */
    public $payoutType;
    /**
     * The payoutAutoSettings
     * @var AllegroStructPayoutAutoSettingsStruct
     */
    public $payoutAutoSettings;
    /**
     * Constructor method for PaymentsPayoutStruct
     * @see parent::__construct()
     * @param int $_payoutType
     * @param AllegroStructPayoutAutoSettingsStruct $_payoutAutoSettings
     * @return AllegroStructPaymentsPayoutStruct
     */
    public function __construct($_payoutType = NULL,$_payoutAutoSettings = NULL)
    {
        parent::__construct(array('payoutType'=>$_payoutType,'payoutAutoSettings'=>$_payoutAutoSettings),false);
    }
    /**
     * Get payoutType value
     * @return int|null
     */
    public function getPayoutType()
    {
        return $this->payoutType;
    }
    /**
     * Set payoutType value
     * @param int $_payoutType the payoutType
     * @return int
     */
    public function setPayoutType($_payoutType)
    {
        return ($this->payoutType = $_payoutType);
    }
    /**
     * Get payoutAutoSettings value
     * @return AllegroStructPayoutAutoSettingsStruct|null
     */
    public function getPayoutAutoSettings()
    {
        return $this->payoutAutoSettings;
    }
    /**
     * Set payoutAutoSettings value
     * @param AllegroStructPayoutAutoSettingsStruct $_payoutAutoSettings the payoutAutoSettings
     * @return AllegroStructPayoutAutoSettingsStruct
     */
    public function setPayoutAutoSettings($_payoutAutoSettings)
    {
        return ($this->payoutAutoSettings = $_payoutAutoSettings);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPaymentsPayoutStruct
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
