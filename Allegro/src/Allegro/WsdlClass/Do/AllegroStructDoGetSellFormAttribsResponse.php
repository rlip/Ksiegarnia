<?php
/**
 * File for class AllegroStructDoGetSellFormAttribsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellFormAttribsResponse originally named doGetSellFormAttribsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellFormAttribsResponse extends AllegroWsdlClass
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
     * Constructor method for doGetSellFormAttribsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSellformtype $_sellFormFields
     * @param long $_verKey
     * @param string $_verStr
     * @return AllegroStructDoGetSellFormAttribsResponse
     */
    public function __construct($_sellFormFields = NULL,$_verKey = NULL,$_verStr = NULL)
    {
        parent::__construct(array('sellFormFields'=>($_sellFormFields instanceof AllegroStructArrayOfSellformtype)?$_sellFormFields:new AllegroStructArrayOfSellformtype($_sellFormFields),'verKey'=>$_verKey,'verStr'=>$_verStr),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellFormAttribsResponse
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
