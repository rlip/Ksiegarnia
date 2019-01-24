<?php
/**
 * File for class AllegroStructAmountStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAmountStruct originally named AmountStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAmountStruct extends AllegroWsdlClass
{
    /**
     * The amountValue
     * @var float
     */
    public $amountValue;
    /**
     * The amountCurrencySign
     * @var string
     */
    public $amountCurrencySign;
    /**
     * Constructor method for AmountStruct
     * @see parent::__construct()
     * @param float $_amountValue
     * @param string $_amountCurrencySign
     * @return AllegroStructAmountStruct
     */
    public function __construct($_amountValue = NULL,$_amountCurrencySign = NULL)
    {
        parent::__construct(array('amountValue'=>$_amountValue,'amountCurrencySign'=>$_amountCurrencySign),false);
    }
    /**
     * Get amountValue value
     * @return float|null
     */
    public function getAmountValue()
    {
        return $this->amountValue;
    }
    /**
     * Set amountValue value
     * @param float $_amountValue the amountValue
     * @return float
     */
    public function setAmountValue($_amountValue)
    {
        return ($this->amountValue = $_amountValue);
    }
    /**
     * Get amountCurrencySign value
     * @return string|null
     */
    public function getAmountCurrencySign()
    {
        return $this->amountCurrencySign;
    }
    /**
     * Set amountCurrencySign value
     * @param string $_amountCurrencySign the amountCurrencySign
     * @return string
     */
    public function setAmountCurrencySign($_amountCurrencySign)
    {
        return ($this->amountCurrencySign = $_amountCurrencySign);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAmountStruct
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
