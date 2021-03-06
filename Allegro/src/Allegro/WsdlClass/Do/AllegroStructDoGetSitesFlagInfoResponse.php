<?php
/**
 * File for class AllegroStructDoGetSitesFlagInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSitesFlagInfoResponse originally named doGetSitesFlagInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSitesFlagInfoResponse extends AllegroWsdlClass
{
    /**
     * The sitesInfoList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSiteflaginfotype
     */
    public $sitesInfoList;
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
     * Constructor method for doGetSitesFlagInfoResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSiteflaginfotype $_sitesInfoList
     * @param long $_verKey
     * @param string $_verStr
     * @return AllegroStructDoGetSitesFlagInfoResponse
     */
    public function __construct($_sitesInfoList = NULL,$_verKey = NULL,$_verStr = NULL)
    {
        parent::__construct(array('sitesInfoList'=>($_sitesInfoList instanceof AllegroStructArrayOfSiteflaginfotype)?$_sitesInfoList:new AllegroStructArrayOfSiteflaginfotype($_sitesInfoList),'verKey'=>$_verKey,'verStr'=>$_verStr),false);
    }
    /**
     * Get sitesInfoList value
     * @return AllegroStructArrayOfSiteflaginfotype|null
     */
    public function getSitesInfoList()
    {
        return $this->sitesInfoList;
    }
    /**
     * Set sitesInfoList value
     * @param AllegroStructArrayOfSiteflaginfotype $_sitesInfoList the sitesInfoList
     * @return AllegroStructArrayOfSiteflaginfotype
     */
    public function setSitesInfoList($_sitesInfoList)
    {
        return ($this->sitesInfoList = $_sitesInfoList);
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
     * @return AllegroStructDoGetSitesFlagInfoResponse
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
