<?php
/**
 * File for class AllegroStructSellFormFieldsForCategoryStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellFormFieldsForCategoryStruct originally named SellFormFieldsForCategoryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellFormFieldsForCategoryStruct extends AllegroWsdlClass
{
    /**
     * The sellFormFieldsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellformtype
     */
    public $sellFormFieldsList;
    /**
     * The sellFormFieldsVersionKey
     * @var long
     */
    public $sellFormFieldsVersionKey;
    /**
     * The sellFormFieldsComponentValue
     * @var string
     */
    public $sellFormFieldsComponentValue;
    /**
     * Constructor method for SellFormFieldsForCategoryStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfSellformtype $_sellFormFieldsList
     * @param long $_sellFormFieldsVersionKey
     * @param string $_sellFormFieldsComponentValue
     * @return AllegroStructSellFormFieldsForCategoryStruct
     */
    public function __construct($_sellFormFieldsList = NULL,$_sellFormFieldsVersionKey = NULL,$_sellFormFieldsComponentValue = NULL)
    {
        parent::__construct(array('sellFormFieldsList'=>($_sellFormFieldsList instanceof AllegroStructArrayOfSellformtype)?$_sellFormFieldsList:new AllegroStructArrayOfSellformtype($_sellFormFieldsList),'sellFormFieldsVersionKey'=>$_sellFormFieldsVersionKey,'sellFormFieldsComponentValue'=>$_sellFormFieldsComponentValue),false);
    }
    /**
     * Get sellFormFieldsList value
     * @return AllegroStructArrayOfSellformtype|null
     */
    public function getSellFormFieldsList()
    {
        return $this->sellFormFieldsList;
    }
    /**
     * Set sellFormFieldsList value
     * @param AllegroStructArrayOfSellformtype $_sellFormFieldsList the sellFormFieldsList
     * @return AllegroStructArrayOfSellformtype
     */
    public function setSellFormFieldsList($_sellFormFieldsList)
    {
        return ($this->sellFormFieldsList = $_sellFormFieldsList);
    }
    /**
     * Get sellFormFieldsVersionKey value
     * @return long|null
     */
    public function getSellFormFieldsVersionKey()
    {
        return $this->sellFormFieldsVersionKey;
    }
    /**
     * Set sellFormFieldsVersionKey value
     * @param long $_sellFormFieldsVersionKey the sellFormFieldsVersionKey
     * @return long
     */
    public function setSellFormFieldsVersionKey($_sellFormFieldsVersionKey)
    {
        return ($this->sellFormFieldsVersionKey = $_sellFormFieldsVersionKey);
    }
    /**
     * Get sellFormFieldsComponentValue value
     * @return string|null
     */
    public function getSellFormFieldsComponentValue()
    {
        return $this->sellFormFieldsComponentValue;
    }
    /**
     * Set sellFormFieldsComponentValue value
     * @param string $_sellFormFieldsComponentValue the sellFormFieldsComponentValue
     * @return string
     */
    public function setSellFormFieldsComponentValue($_sellFormFieldsComponentValue)
    {
        return ($this->sellFormFieldsComponentValue = $_sellFormFieldsComponentValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellFormFieldsForCategoryStruct
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
