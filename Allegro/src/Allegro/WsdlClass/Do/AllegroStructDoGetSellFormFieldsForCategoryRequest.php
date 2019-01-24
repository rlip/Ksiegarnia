<?php
/**
 * File for class AllegroStructDoGetSellFormFieldsForCategoryRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellFormFieldsForCategoryRequest originally named DoGetSellFormFieldsForCategoryRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellFormFieldsForCategoryRequest extends AllegroWsdlClass
{
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The categoryId
     * @var int
     */
    public $categoryId;
    /**
     * Constructor method for DoGetSellFormFieldsForCategoryRequest
     * @see parent::__construct()
     * @param string $_webapiKey
     * @param int $_countryId
     * @param int $_categoryId
     * @return AllegroStructDoGetSellFormFieldsForCategoryRequest
     */
    public function __construct($_webapiKey = NULL,$_countryId = NULL,$_categoryId = NULL)
    {
        parent::__construct(array('webapiKey'=>$_webapiKey,'countryId'=>$_countryId,'categoryId'=>$_categoryId),false);
    }
    /**
     * Get webapiKey value
     * @return string|null
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }
    /**
     * Set webapiKey value
     * @param string $_webapiKey the webapiKey
     * @return string
     */
    public function setWebapiKey($_webapiKey)
    {
        return ($this->webapiKey = $_webapiKey);
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $_countryId the countryId
     * @return int
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $_categoryId the categoryId
     * @return int
     */
    public function setCategoryId($_categoryId)
    {
        return ($this->categoryId = $_categoryId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellFormFieldsForCategoryRequest
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
