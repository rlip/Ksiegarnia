<?php
/**
 * File for class AllegroStructDoGetSiteJournalInfoRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSiteJournalInfoRequest originally named DoGetSiteJournalInfoRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSiteJournalInfoRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The startingPoint
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $startingPoint;
    /**
     * The infoType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $infoType;
    /**
     * Constructor method for DoGetSiteJournalInfoRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_startingPoint
     * @param int $_infoType
     * @return AllegroStructDoGetSiteJournalInfoRequest
     */
    public function __construct($_sessionHandle = NULL,$_startingPoint = NULL,$_infoType = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'startingPoint'=>$_startingPoint,'infoType'=>$_infoType),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get startingPoint value
     * @return long|null
     */
    public function getStartingPoint()
    {
        return $this->startingPoint;
    }
    /**
     * Set startingPoint value
     * @param long $_startingPoint the startingPoint
     * @return long
     */
    public function setStartingPoint($_startingPoint)
    {
        return ($this->startingPoint = $_startingPoint);
    }
    /**
     * Get infoType value
     * @return int|null
     */
    public function getInfoType()
    {
        return $this->infoType;
    }
    /**
     * Set infoType value
     * @param int $_infoType the infoType
     * @return int
     */
    public function setInfoType($_infoType)
    {
        return ($this->infoType = $_infoType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSiteJournalInfoRequest
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
