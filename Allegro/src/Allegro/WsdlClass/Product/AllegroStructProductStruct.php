<?php
/**
 * File for class AllegroStructProductStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructProductStruct originally named ProductStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructProductStruct extends AllegroWsdlClass
{
    /**
     * The productId
     * @var long
     */
    public $productId;
    /**
     * The productName
     * @var string
     */
    public $productName;
    /**
     * The productDescription
     * @var string
     */
    public $productDescription;
    /**
     * The productImagesList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $productImagesList;
    /**
     * The productParametersGroupList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfProductparametersgroupstruct
     */
    public $productParametersGroupList;
    /**
     * Constructor method for ProductStruct
     * @see parent::__construct()
     * @param long $_productId
     * @param string $_productName
     * @param string $_productDescription
     * @param AllegroStructArrayOfString $_productImagesList
     * @param AllegroStructArrayOfProductparametersgroupstruct $_productParametersGroupList
     * @return AllegroStructProductStruct
     */
    public function __construct($_productId = NULL,$_productName = NULL,$_productDescription = NULL,$_productImagesList = NULL,$_productParametersGroupList = NULL)
    {
        parent::__construct(array('productId'=>$_productId,'productName'=>$_productName,'productDescription'=>$_productDescription,'productImagesList'=>($_productImagesList instanceof AllegroStructArrayOfString)?$_productImagesList:new AllegroStructArrayOfString($_productImagesList),'productParametersGroupList'=>($_productParametersGroupList instanceof AllegroStructArrayOfProductparametersgroupstruct)?$_productParametersGroupList:new AllegroStructArrayOfProductparametersgroupstruct($_productParametersGroupList)),false);
    }
    /**
     * Get productId value
     * @return long|null
     */
    public function getProductId()
    {
        return $this->productId;
    }
    /**
     * Set productId value
     * @param long $_productId the productId
     * @return long
     */
    public function setProductId($_productId)
    {
        return ($this->productId = $_productId);
    }
    /**
     * Get productName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }
    /**
     * Set productName value
     * @param string $_productName the productName
     * @return string
     */
    public function setProductName($_productName)
    {
        return ($this->productName = $_productName);
    }
    /**
     * Get productDescription value
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }
    /**
     * Set productDescription value
     * @param string $_productDescription the productDescription
     * @return string
     */
    public function setProductDescription($_productDescription)
    {
        return ($this->productDescription = $_productDescription);
    }
    /**
     * Get productImagesList value
     * @return AllegroStructArrayOfString|null
     */
    public function getProductImagesList()
    {
        return $this->productImagesList;
    }
    /**
     * Set productImagesList value
     * @param AllegroStructArrayOfString $_productImagesList the productImagesList
     * @return AllegroStructArrayOfString
     */
    public function setProductImagesList($_productImagesList)
    {
        return ($this->productImagesList = $_productImagesList);
    }
    /**
     * Get productParametersGroupList value
     * @return AllegroStructArrayOfProductparametersgroupstruct|null
     */
    public function getProductParametersGroupList()
    {
        return $this->productParametersGroupList;
    }
    /**
     * Set productParametersGroupList value
     * @param AllegroStructArrayOfProductparametersgroupstruct $_productParametersGroupList the productParametersGroupList
     * @return AllegroStructArrayOfProductparametersgroupstruct
     */
    public function setProductParametersGroupList($_productParametersGroupList)
    {
        return ($this->productParametersGroupList = $_productParametersGroupList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructProductStruct
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
