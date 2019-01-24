<?php
/**
 * File for class AllegroStructDoGetSiteJournalResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSiteJournalResponse originally named doGetSiteJournalResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSiteJournalResponse extends AllegroWsdlClass
{
    /**
     * The siteJournalArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSitejournal
     */
    public $siteJournalArray;
    /**
     * Constructor method for doGetSiteJournalResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSitejournal $_siteJournalArray
     * @return AllegroStructDoGetSiteJournalResponse
     */
    public function __construct($_siteJournalArray = NULL)
    {
        parent::__construct(array('siteJournalArray'=>($_siteJournalArray instanceof AllegroStructArrayOfSitejournal)?$_siteJournalArray:new AllegroStructArrayOfSitejournal($_siteJournalArray)),false);
    }
    /**
     * Get siteJournalArray value
     * @return AllegroStructArrayOfSitejournal|null
     */
    public function getSiteJournalArray()
    {
        return $this->siteJournalArray;
    }
    /**
     * Set siteJournalArray value
     * @param AllegroStructArrayOfSitejournal $_siteJournalArray the siteJournalArray
     * @return AllegroStructArrayOfSitejournal
     */
    public function setSiteJournalArray($_siteJournalArray)
    {
        return ($this->siteJournalArray = $_siteJournalArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSiteJournalResponse
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
