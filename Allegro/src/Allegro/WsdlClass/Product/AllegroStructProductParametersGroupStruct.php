<?php
/**
 * File for class AllegroStructProductParametersGroupStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructProductParametersGroupStruct originally named ProductParametersGroupStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructProductParametersGroupStruct extends AllegroWsdlClass
{
    /**
     * The productParametersGroupName
     * @var string
     */
    public $productParametersGroupName;
    /**
     * The productParametersList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfProductparametersstruct
     */
    public $productParametersList;
    /**
     * Constructor method for ProductParametersGroupStruct
     * @see parent::__construct()
     * @param string $_productParametersGroupName
     * @param AllegroStructArrayOfProductparametersstruct $_productParametersList
     * @return AllegroStructProductParametersGroupStruct
     */
    public function __construct($_productParametersGroupName = NULL,$_productParametersList = NULL)
    {
        parent::__construct(array('productParametersGroupName'=>$_productParametersGroupName,'productParametersList'=>($_productParametersList instanceof AllegroStructArrayOfProductparametersstruct)?$_productParametersList:new AllegroStructArrayOfProductparametersstruct($_productParametersList)),false);
    }
    /**
     * Get productParametersGroupName value
     * @return string|null
     */
    public function getProductParametersGroupName()
    {
        return $this->productParametersGroupName;
    }
    /**
     * Set productParametersGroupName value
     * @param string $_productParametersGroupName the productParametersGroupName
     * @return string
     */
    public function setProductParametersGroupName($_productParametersGroupName)
    {
        return ($this->productParametersGroupName = $_productParametersGroupName);
    }
    /**
     * Get productParametersList value
     * @return AllegroStructArrayOfProductparametersstruct|null
     */
    public function getProductParametersList()
    {
        return $this->productParametersList;
    }
    /**
     * Set productParametersList value
     * @param AllegroStructArrayOfProductparametersstruct $_productParametersList the productParametersList
     * @return AllegroStructArrayOfProductparametersstruct
     */
    public function setProductParametersList($_productParametersList)
    {
        return ($this->productParametersList = $_productParametersList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructProductParametersGroupStruct
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
