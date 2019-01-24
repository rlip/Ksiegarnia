<?php
/**
 * File for class AllegroStructDoGetSitesInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSitesInfoResponse originally named doGetSitesInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSitesInfoResponse extends AllegroWsdlClass
{
    /**
     * The sitesInfoList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSiteinfotype
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
     * Constructor method for doGetSitesInfoResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSiteinfotype $_sitesInfoList
     * @param long $_verKey
     * @param string $_verStr
     * @return AllegroStructDoGetSitesInfoResponse
     */
    public function __construct($_sitesInfoList = NULL,$_verKey = NULL,$_verStr = NULL)
    {
        parent::__construct(array('sitesInfoList'=>($_sitesInfoList instanceof AllegroStructArrayOfSiteinfotype)?$_sitesInfoList:new AllegroStructArrayOfSiteinfotype($_sitesInfoList),'verKey'=>$_verKey,'verStr'=>$_verStr),false);
    }
    /**
     * Get sitesInfoList value
     * @return AllegroStructArrayOfSiteinfotype|null
     */
    public function getSitesInfoList()
    {
        return $this->sitesInfoList;
    }
    /**
     * Set sitesInfoList value
     * @param AllegroStructArrayOfSiteinfotype $_sitesInfoList the sitesInfoList
     * @return AllegroStructArrayOfSiteinfotype
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
     * @return AllegroStructDoGetSitesInfoResponse
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
