<?php
/**
 * File for class AllegroStructDoGetMyPayoutsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyPayoutsRequest originally named DoGetMyPayoutsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyPayoutsRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The transCreateDateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $transCreateDateFrom;
    /**
     * The transCreateDateTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $transCreateDateTo;
    /**
     * The transPageLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $transPageLimit;
    /**
     * The transOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $transOffset;
    /**
     * Constructor method for DoGetMyPayoutsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_transCreateDateFrom
     * @param long $_transCreateDateTo
     * @param int $_transPageLimit
     * @param int $_transOffset
     * @return AllegroStructDoGetMyPayoutsRequest
     */
    public function __construct($_sessionHandle = NULL,$_transCreateDateFrom = NULL,$_transCreateDateTo = NULL,$_transPageLimit = NULL,$_transOffset = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'transCreateDateFrom'=>$_transCreateDateFrom,'transCreateDateTo'=>$_transCreateDateTo,'transPageLimit'=>$_transPageLimit,'transOffset'=>$_transOffset),false);
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
     * Get transCreateDateFrom value
     * @return long|null
     */
    public function getTransCreateDateFrom()
    {
        return $this->transCreateDateFrom;
    }
    /**
     * Set transCreateDateFrom value
     * @param long $_transCreateDateFrom the transCreateDateFrom
     * @return long
     */
    public function setTransCreateDateFrom($_transCreateDateFrom)
    {
        return ($this->transCreateDateFrom = $_transCreateDateFrom);
    }
    /**
     * Get transCreateDateTo value
     * @return long|null
     */
    public function getTransCreateDateTo()
    {
        return $this->transCreateDateTo;
    }
    /**
     * Set transCreateDateTo value
     * @param long $_transCreateDateTo the transCreateDateTo
     * @return long
     */
    public function setTransCreateDateTo($_transCreateDateTo)
    {
        return ($this->transCreateDateTo = $_transCreateDateTo);
    }
    /**
     * Get transPageLimit value
     * @return int|null
     */
    public function getTransPageLimit()
    {
        return $this->transPageLimit;
    }
    /**
     * Set transPageLimit value
     * @param int $_transPageLimit the transPageLimit
     * @return int
     */
    public function setTransPageLimit($_transPageLimit)
    {
        return ($this->transPageLimit = $_transPageLimit);
    }
    /**
     * Get transOffset value
     * @return int|null
     */
    public function getTransOffset()
    {
        return $this->transOffset;
    }
    /**
     * Set transOffset value
     * @param int $_transOffset the transOffset
     * @return int
     */
    public function setTransOffset($_transOffset)
    {
        return ($this->transOffset = $_transOffset);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyPayoutsRequest
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
