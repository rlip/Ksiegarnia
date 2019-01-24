<?php
/**
 * File for class AllegroStructFeedbackResultStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFeedbackResultStruct originally named FeedbackResultStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFeedbackResultStruct extends AllegroWsdlClass
{
    /**
     * The feItemId
     * @var long
     */
    public $feItemId;
    /**
     * The feId
     * @var int
     */
    public $feId;
    /**
     * The feFaultCode
     * @var string
     */
    public $feFaultCode;
    /**
     * The feFaultDesc
     * @var string
     */
    public $feFaultDesc;
    /**
     * Constructor method for FeedbackResultStruct
     * @see parent::__construct()
     * @param long $_feItemId
     * @param int $_feId
     * @param string $_feFaultCode
     * @param string $_feFaultDesc
     * @return AllegroStructFeedbackResultStruct
     */
    public function __construct($_feItemId = NULL,$_feId = NULL,$_feFaultCode = NULL,$_feFaultDesc = NULL)
    {
        parent::__construct(array('feItemId'=>$_feItemId,'feId'=>$_feId,'feFaultCode'=>$_feFaultCode,'feFaultDesc'=>$_feFaultDesc),false);
    }
    /**
     * Get feItemId value
     * @return long|null
     */
    public function getFeItemId()
    {
        return $this->feItemId;
    }
    /**
     * Set feItemId value
     * @param long $_feItemId the feItemId
     * @return long
     */
    public function setFeItemId($_feItemId)
    {
        return ($this->feItemId = $_feItemId);
    }
    /**
     * Get feId value
     * @return int|null
     */
    public function getFeId()
    {
        return $this->feId;
    }
    /**
     * Set feId value
     * @param int $_feId the feId
     * @return int
     */
    public function setFeId($_feId)
    {
        return ($this->feId = $_feId);
    }
    /**
     * Get feFaultCode value
     * @return string|null
     */
    public function getFeFaultCode()
    {
        return $this->feFaultCode;
    }
    /**
     * Set feFaultCode value
     * @param string $_feFaultCode the feFaultCode
     * @return string
     */
    public function setFeFaultCode($_feFaultCode)
    {
        return ($this->feFaultCode = $_feFaultCode);
    }
    /**
     * Get feFaultDesc value
     * @return string|null
     */
    public function getFeFaultDesc()
    {
        return $this->feFaultDesc;
    }
    /**
     * Set feFaultDesc value
     * @param string $_feFaultDesc the feFaultDesc
     * @return string
     */
    public function setFeFaultDesc($_feFaultDesc)
    {
        return ($this->feFaultDesc = $_feFaultDesc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFeedbackResultStruct
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
