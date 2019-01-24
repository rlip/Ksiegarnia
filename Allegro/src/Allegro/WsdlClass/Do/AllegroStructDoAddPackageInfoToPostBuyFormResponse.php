<?php
/**
 * File for class AllegroStructDoAddPackageInfoToPostBuyFormResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddPackageInfoToPostBuyFormResponse originally named doAddPackageInfoToPostBuyFormResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddPackageInfoToPostBuyFormResponse extends AllegroWsdlClass
{
    /**
     * The postBuyFormPackageInfo
     * @var AllegroStructPostBuyFormPackageInfoStruct
     */
    public $postBuyFormPackageInfo;
    /**
     * Constructor method for doAddPackageInfoToPostBuyFormResponse
     * @see parent::__construct()
     * @param AllegroStructPostBuyFormPackageInfoStruct $_postBuyFormPackageInfo
     * @return AllegroStructDoAddPackageInfoToPostBuyFormResponse
     */
    public function __construct($_postBuyFormPackageInfo = NULL)
    {
        parent::__construct(array('postBuyFormPackageInfo'=>$_postBuyFormPackageInfo),false);
    }
    /**
     * Get postBuyFormPackageInfo value
     * @return AllegroStructPostBuyFormPackageInfoStruct|null
     */
    public function getPostBuyFormPackageInfo()
    {
        return $this->postBuyFormPackageInfo;
    }
    /**
     * Set postBuyFormPackageInfo value
     * @param AllegroStructPostBuyFormPackageInfoStruct $_postBuyFormPackageInfo the postBuyFormPackageInfo
     * @return AllegroStructPostBuyFormPackageInfoStruct
     */
    public function setPostBuyFormPackageInfo($_postBuyFormPackageInfo)
    {
        return ($this->postBuyFormPackageInfo = $_postBuyFormPackageInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddPackageInfoToPostBuyFormResponse
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
