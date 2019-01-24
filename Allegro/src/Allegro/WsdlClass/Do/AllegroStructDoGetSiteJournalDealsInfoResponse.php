<?php
/**
 * File for class AllegroStructDoGetSiteJournalDealsInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSiteJournalDealsInfoResponse originally named doGetSiteJournalDealsInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSiteJournalDealsInfoResponse extends AllegroWsdlClass
{
    /**
     * The siteJournalDealsInfo
     * @var AllegroStructSiteJournalDealsInfoStruct
     */
    public $siteJournalDealsInfo;
    /**
     * Constructor method for doGetSiteJournalDealsInfoResponse
     * @see parent::__construct()
     * @param AllegroStructSiteJournalDealsInfoStruct $_siteJournalDealsInfo
     * @return AllegroStructDoGetSiteJournalDealsInfoResponse
     */
    public function __construct($_siteJournalDealsInfo = NULL)
    {
        parent::__construct(array('siteJournalDealsInfo'=>$_siteJournalDealsInfo),false);
    }
    /**
     * Get siteJournalDealsInfo value
     * @return AllegroStructSiteJournalDealsInfoStruct|null
     */
    public function getSiteJournalDealsInfo()
    {
        return $this->siteJournalDealsInfo;
    }
    /**
     * Set siteJournalDealsInfo value
     * @param AllegroStructSiteJournalDealsInfoStruct $_siteJournalDealsInfo the siteJournalDealsInfo
     * @return AllegroStructSiteJournalDealsInfoStruct
     */
    public function setSiteJournalDealsInfo($_siteJournalDealsInfo)
    {
        return ($this->siteJournalDealsInfo = $_siteJournalDealsInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSiteJournalDealsInfoResponse
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
