<?php
/**
 * File for class AllegroStructPayoutAutoFrequencyStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPayoutAutoFrequencyStruct originally named PayoutAutoFrequencyStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPayoutAutoFrequencyStruct extends AllegroWsdlClass
{
    /**
     * The frequencyType
     * @var short
     */
    public $frequencyType;
    /**
     * The frequencyWeekValue
     * @var short
     */
    public $frequencyWeekValue;
    /**
     * The frequencyMonthValue
     * @var short
     */
    public $frequencyMonthValue;
    /**
     * Constructor method for PayoutAutoFrequencyStruct
     * @see parent::__construct()
     * @param short $_frequencyType
     * @param short $_frequencyWeekValue
     * @param short $_frequencyMonthValue
     * @return AllegroStructPayoutAutoFrequencyStruct
     */
    public function __construct($_frequencyType = NULL,$_frequencyWeekValue = NULL,$_frequencyMonthValue = NULL)
    {
        parent::__construct(array('frequencyType'=>$_frequencyType,'frequencyWeekValue'=>$_frequencyWeekValue,'frequencyMonthValue'=>$_frequencyMonthValue),false);
    }
    /**
     * Get frequencyType value
     * @return short|null
     */
    public function getFrequencyType()
    {
        return $this->frequencyType;
    }
    /**
     * Set frequencyType value
     * @param short $_frequencyType the frequencyType
     * @return short
     */
    public function setFrequencyType($_frequencyType)
    {
        return ($this->frequencyType = $_frequencyType);
    }
    /**
     * Get frequencyWeekValue value
     * @return short|null
     */
    public function getFrequencyWeekValue()
    {
        return $this->frequencyWeekValue;
    }
    /**
     * Set frequencyWeekValue value
     * @param short $_frequencyWeekValue the frequencyWeekValue
     * @return short
     */
    public function setFrequencyWeekValue($_frequencyWeekValue)
    {
        return ($this->frequencyWeekValue = $_frequencyWeekValue);
    }
    /**
     * Get frequencyMonthValue value
     * @return short|null
     */
    public function getFrequencyMonthValue()
    {
        return $this->frequencyMonthValue;
    }
    /**
     * Set frequencyMonthValue value
     * @param short $_frequencyMonthValue the frequencyMonthValue
     * @return short
     */
    public function setFrequencyMonthValue($_frequencyMonthValue)
    {
        return ($this->frequencyMonthValue = $_frequencyMonthValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPayoutAutoFrequencyStruct
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
