<?php
/**
 * File for class AllegroStructDoGetSiteJournalDealsInfoRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSiteJournalDealsInfoRequest originally named DoGetSiteJournalDealsInfoRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSiteJournalDealsInfoRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The journalStart
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $journalStart;
    /**
     * Constructor method for DoGetSiteJournalDealsInfoRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_journalStart
     * @return AllegroStructDoGetSiteJournalDealsInfoRequest
     */
    public function __construct($_sessionId = NULL,$_journalStart = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'journalStart'=>$_journalStart),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get journalStart value
     * @return long|null
     */
    public function getJournalStart()
    {
        return $this->journalStart;
    }
    /**
     * Set journalStart value
     * @param long $_journalStart the journalStart
     * @return long
     */
    public function setJournalStart($_journalStart)
    {
        return ($this->journalStart = $_journalStart);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSiteJournalDealsInfoRequest
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
