<?php
/**
 * File for class AllegroStructFilledPostBuyFormsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFilledPostBuyFormsStruct originally named FilledPostBuyFormsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFilledPostBuyFormsStruct extends AllegroWsdlClass
{
    /**
     * The transactionIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $transactionIds;
    /**
     * Constructor method for FilledPostBuyFormsStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfLong $_transactionIds
     * @return AllegroStructFilledPostBuyFormsStruct
     */
    public function __construct($_transactionIds = NULL)
    {
        parent::__construct(array('transactionIds'=>($_transactionIds instanceof AllegroStructArrayOfLong)?$_transactionIds:new AllegroStructArrayOfLong($_transactionIds)),false);
    }
    /**
     * Get transactionIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getTransactionIds()
    {
        return $this->transactionIds;
    }
    /**
     * Set transactionIds value
     * @param AllegroStructArrayOfLong $_transactionIds the transactionIds
     * @return AllegroStructArrayOfLong
     */
    public function setTransactionIds($_transactionIds)
    {
        return ($this->transactionIds = $_transactionIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFilledPostBuyFormsStruct
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
