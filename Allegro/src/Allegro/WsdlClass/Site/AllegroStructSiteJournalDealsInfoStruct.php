<?php
/**
 * File for class AllegroStructSiteJournalDealsInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSiteJournalDealsInfoStruct originally named SiteJournalDealsInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSiteJournalDealsInfoStruct extends AllegroWsdlClass
{
    /**
     * The dealEventsCount
     * @var int
     */
    public $dealEventsCount;
    /**
     * The dealLastEventTime
     * @var long
     */
    public $dealLastEventTime;
    /**
     * Constructor method for SiteJournalDealsInfoStruct
     * @see parent::__construct()
     * @param int $_dealEventsCount
     * @param long $_dealLastEventTime
     * @return AllegroStructSiteJournalDealsInfoStruct
     */
    public function __construct($_dealEventsCount = NULL,$_dealLastEventTime = NULL)
    {
        parent::__construct(array('dealEventsCount'=>$_dealEventsCount,'dealLastEventTime'=>$_dealLastEventTime),false);
    }
    /**
     * Get dealEventsCount value
     * @return int|null
     */
    public function getDealEventsCount()
    {
        return $this->dealEventsCount;
    }
    /**
     * Set dealEventsCount value
     * @param int $_dealEventsCount the dealEventsCount
     * @return int
     */
    public function setDealEventsCount($_dealEventsCount)
    {
        return ($this->dealEventsCount = $_dealEventsCount);
    }
    /**
     * Get dealLastEventTime value
     * @return long|null
     */
    public function getDealLastEventTime()
    {
        return $this->dealLastEventTime;
    }
    /**
     * Set dealLastEventTime value
     * @param long $_dealLastEventTime the dealLastEventTime
     * @return long
     */
    public function setDealLastEventTime($_dealLastEventTime)
    {
        return ($this->dealLastEventTime = $_dealLastEventTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSiteJournalDealsInfoStruct
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
