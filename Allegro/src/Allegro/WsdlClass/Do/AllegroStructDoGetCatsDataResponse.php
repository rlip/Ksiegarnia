<?php
/**
 * File for class AllegroStructDoGetCatsDataResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetCatsDataResponse originally named doGetCatsDataResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetCatsDataResponse extends AllegroWsdlClass
{
    /**
     * The catsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCatinfotype
     */
    public $catsList;
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
     * Constructor method for doGetCatsDataResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfCatinfotype $_catsList
     * @param long $_verKey
     * @param string $_verStr
     * @return AllegroStructDoGetCatsDataResponse
     */
    public function __construct($_catsList = NULL,$_verKey = NULL,$_verStr = NULL)
    {
        parent::__construct(array('catsList'=>($_catsList instanceof AllegroStructArrayOfCatinfotype)?$_catsList:new AllegroStructArrayOfCatinfotype($_catsList),'verKey'=>$_verKey,'verStr'=>$_verStr),false);
    }
    /**
     * Get catsList value
     * @return AllegroStructArrayOfCatinfotype|null
     */
    public function getCatsList()
    {
        return $this->catsList;
    }
    /**
     * Set catsList value
     * @param AllegroStructArrayOfCatinfotype $_catsList the catsList
     * @return AllegroStructArrayOfCatinfotype
     */
    public function setCatsList($_catsList)
    {
        return ($this->catsList = $_catsList);
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
     * @return AllegroStructDoGetCatsDataResponse
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
