<?php
/**
 * File for class AllegroStructDoGetSellFormFieldsExtLimitResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellFormFieldsExtLimitResponse originally named doGetSellFormFieldsExtLimitResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellFormFieldsExtLimitResponse extends AllegroWsdlClass
{
    /**
     * The sellFormFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellformtype
     */
    public $sellFormFields;
    /**
     * The verKey
     * @var long
     */
    public $verKey;
    /**
     * The verStr
     * @var string
     */
    public $verStr;
    /**
     * The formFieldsCount
     * @var int
     */
    public $formFieldsCount;
    /**
     * Constructor method for doGetSellFormFieldsExtLimitResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSellformtype $_sellFormFields
     * @param long $_verKey
     * @param string $_verStr
     * @param int $_formFieldsCount
     * @return AllegroStructDoGetSellFormFieldsExtLimitResponse
     */
    public function __construct($_sellFormFields = NULL,$_verKey = NULL,$_verStr = NULL,$_formFieldsCount = NULL)
    {
        parent::__construct(array('sellFormFields'=>($_sellFormFields instanceof AllegroStructArrayOfSellformtype)?$_sellFormFields:new AllegroStructArrayOfSellformtype($_sellFormFields),'verKey'=>$_verKey,'verStr'=>$_verStr,'formFieldsCount'=>$_formFieldsCount),false);
    }
    /**
     * Get sellFormFields value
     * @return AllegroStructArrayOfSellformtype|null
     */
    public function getSellFormFields()
    {
        return $this->sellFormFields;
    }
    /**
     * Set sellFormFields value
     * @param AllegroStructArrayOfSellformtype $_sellFormFields the sellFormFields
     * @return AllegroStructArrayOfSellformtype
     */
    public function setSellFormFields($_sellFormFields)
    {
        return ($this->sellFormFields = $_sellFormFields);
    }
    /**
     * Get verKey value
     * @return long|null
     */
    public function getVerKey()
    {
        return $this->verKey;
    }
    /**
     * Set verKey value
     * @param long $_verKey the verKey
     * @return long
     */
    public function setVerKey($_verKey)
    {
        return ($this->verKey = $_verKey);
    }
    /**
     * Get verStr value
     * @return string|null
     */
    public function getVerStr()
    {
        return $this->verStr;
    }
    /**
     * Set verStr value
     * @param string $_verStr the verStr
     * @return string
     */
    public function setVerStr($_verStr)
    {
        return ($this->verStr = $_verStr);
    }
    /**
     * Get formFieldsCount value
     * @return int|null
     */
    public function getFormFieldsCount()
    {
        return $this->formFieldsCount;
    }
    /**
     * Set formFieldsCount value
     * @param int $_formFieldsCount the formFieldsCount
     * @return int
     */
    public function setFormFieldsCount($_formFieldsCount)
    {
        return ($this->formFieldsCount = $_formFieldsCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellFormFieldsExtLimitResponse
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
