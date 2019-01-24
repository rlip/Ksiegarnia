<?php
/**
 * File for class AllegroStructDoGetSiteJournalInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSiteJournalInfoResponse originally named doGetSiteJournalInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSiteJournalInfoResponse extends AllegroWsdlClass
{
    /**
     * The siteJournalInfo
     * @var AllegroStructSiteJournalInfo
     */
    public $siteJournalInfo;
    /**
     * Constructor method for doGetSiteJournalInfoResponse
     * @see parent::__construct()
     * @param AllegroStructSiteJournalInfo $_siteJournalInfo
     * @return AllegroStructDoGetSiteJournalInfoResponse
     */
    public function __construct($_siteJournalInfo = NULL)
    {
        parent::__construct(array('siteJournalInfo'=>$_siteJournalInfo),false);
    }
    /**
     * Get siteJournalInfo value
     * @return AllegroStructSiteJournalInfo|null
     */
    public function getSiteJournalInfo()
    {
        return $this->siteJournalInfo;
    }
    /**
     * Set siteJournalInfo value
     * @param AllegroStructSiteJournalInfo $_siteJournalInfo the siteJournalInfo
     * @return AllegroStructSiteJournalInfo
     */
    public function setSiteJournalInfo($_siteJournalInfo)
    {
        return ($this->siteJournalInfo = $_siteJournalInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSiteJournalInfoResponse
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
