<?php
/**
 * File for class AllegroStructProductParametersStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructProductParametersStruct originally named ProductParametersStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructProductParametersStruct extends AllegroWsdlClass
{
    /**
     * The productParameterName
     * @var string
     */
    public $productParameterName;
    /**
     * The productParameterValues
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $productParameterValues;
    /**
     * The productParameterDescription
     * @var string
     */
    public $productParameterDescription;
    /**
     * Constructor method for ProductParametersStruct
     * @see parent::__construct()
     * @param string $_productParameterName
     * @param AllegroStructArrayOfString $_productParameterValues
     * @param string $_productParameterDescription
     * @return AllegroStructProductParametersStruct
     */
    public function __construct($_productParameterName = NULL,$_productParameterValues = NULL,$_productParameterDescription = NULL)
    {
        parent::__construct(array('productParameterName'=>$_productParameterName,'productParameterValues'=>($_productParameterValues instanceof AllegroStructArrayOfString)?$_productParameterValues:new AllegroStructArrayOfString($_productParameterValues),'productParameterDescription'=>$_productParameterDescription),false);
    }
    /**
     * Get productParameterName value
     * @return string|null
     */
    public function getProductParameterName()
    {
        return $this->productParameterName;
    }
    /**
     * Set productParameterName value
     * @param string $_productParameterName the productParameterName
     * @return string
     */
    public function setProductParameterName($_productParameterName)
    {
        return ($this->productParameterName = $_productParameterName);
    }
    /**
     * Get productParameterValues value
     * @return AllegroStructArrayOfString|null
     */
    public function getProductParameterValues()
    {
        return $this->productParameterValues;
    }
    /**
     * Set productParameterValues value
     * @param AllegroStructArrayOfString $_productParameterValues the productParameterValues
     * @return AllegroStructArrayOfString
     */
    public function setProductParameterValues($_productParameterValues)
    {
        return ($this->productParameterValues = $_productParameterValues);
    }
    /**
     * Get productParameterDescription value
     * @return string|null
     */
    public function getProductParameterDescription()
    {
        return $this->productParameterDescription;
    }
    /**
     * Set productParameterDescription value
     * @param string $_productParameterDescription the productParameterDescription
     * @return string
     */
    public function setProductParameterDescription($_productParameterDescription)
    {
        return ($this->productParameterDescription = $_productParameterDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructProductParametersStruct
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
