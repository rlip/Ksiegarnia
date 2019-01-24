<?php
/**
 * File for class AllegroStructSiteJournalInfo
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSiteJournalInfo originally named SiteJournalInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSiteJournalInfo extends AllegroWsdlClass
{
    /**
     * The itemsNumber
     * @var int
     */
    public $itemsNumber;
    /**
     * The lastItemDate
     * @var long
     */
    public $lastItemDate;
    /**
     * Constructor method for SiteJournalInfo
     * @see parent::__construct()
     * @param int $_itemsNumber
     * @param long $_lastItemDate
     * @return AllegroStructSiteJournalInfo
     */
    public function __construct($_itemsNumber = NULL,$_lastItemDate = NULL)
    {
        parent::__construct(array('itemsNumber'=>$_itemsNumber,'lastItemDate'=>$_lastItemDate),false);
    }
    /**
     * Get itemsNumber value
     * @return int|null
     */
    public function getItemsNumber()
    {
        return $this->itemsNumber;
    }
    /**
     * Set itemsNumber value
     * @param int $_itemsNumber the itemsNumber
     * @return int
     */
    public function setItemsNumber($_itemsNumber)
    {
        return ($this->itemsNumber = $_itemsNumber);
    }
    /**
     * Get lastItemDate value
     * @return long|null
     */
    public function getLastItemDate()
    {
        return $this->lastItemDate;
    }
    /**
     * Set lastItemDate value
     * @param long $_lastItemDate the lastItemDate
     * @return long
     */
    public function setLastItemDate($_lastItemDate)
    {
        return ($this->lastItemDate = $_lastItemDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSiteJournalInfo
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
