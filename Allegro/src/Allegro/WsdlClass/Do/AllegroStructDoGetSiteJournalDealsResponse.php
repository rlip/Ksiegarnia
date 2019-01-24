<?php
/**
 * File for class AllegroStructDoGetSiteJournalDealsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSiteJournalDealsResponse originally named doGetSiteJournalDealsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSiteJournalDealsResponse extends AllegroWsdlClass
{
    /**
     * The siteJournalDeals
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSitejournaldealsstruct
     */
    public $siteJournalDeals;
    /**
     * Constructor method for doGetSiteJournalDealsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSitejournaldealsstruct $_siteJournalDeals
     * @return AllegroStructDoGetSiteJournalDealsResponse
     */
    public function __construct($_siteJournalDeals = NULL)
    {
        parent::__construct(array('siteJournalDeals'=>($_siteJournalDeals instanceof AllegroStructArrayOfSitejournaldealsstruct)?$_siteJournalDeals:new AllegroStructArrayOfSitejournaldealsstruct($_siteJournalDeals)),false);
    }
    /**
     * Get siteJournalDeals value
     * @return AllegroStructArrayOfSitejournaldealsstruct|null
     */
    public function getSiteJournalDeals()
    {
        return $this->siteJournalDeals;
    }
    /**
     * Set siteJournalDeals value
     * @param AllegroStructArrayOfSitejournaldealsstruct $_siteJournalDeals the siteJournalDeals
     * @return AllegroStructArrayOfSitejournaldealsstruct
     */
    public function setSiteJournalDeals($_siteJournalDeals)
    {
        return ($this->siteJournalDeals = $_siteJournalDeals);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSiteJournalDealsResponse
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
