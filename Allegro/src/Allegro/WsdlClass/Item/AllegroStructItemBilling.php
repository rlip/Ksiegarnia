<?php
/**
 * File for class AllegroStructItemBilling
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemBilling originally named ItemBilling
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemBilling extends AllegroWsdlClass
{
    /**
     * The biName
     * @var string
     */
    public $biName;
    /**
     * The biValue
     * @var string
     */
    public $biValue;
    /**
     * Constructor method for ItemBilling
     * @see parent::__construct()
     * @param string $_biName
     * @param string $_biValue
     * @return AllegroStructItemBilling
     */
    public function __construct($_biName = NULL,$_biValue = NULL)
    {
        parent::__construct(array('biName'=>$_biName,'biValue'=>$_biValue),false);
    }
    /**
     * Get biName value
     * @return string|null
     */
    public function getBiName()
    {
        return $this->biName;
    }
    /**
     * Set biName value
     * @param string $_biName the biName
     * @return string
     */
    public function setBiName($_biName)
    {
        return ($this->biName = $_biName);
    }
    /**
     * Get biValue value
     * @return string|null
     */
    public function getBiValue()
    {
        return $this->biValue;
    }
    /**
     * Set biValue value
     * @param string $_biValue the biValue
     * @return string
     */
    public function setBiValue($_biValue)
    {
        return ($this->biValue = $_biValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemBilling
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
