<?php
/**
 * File for class AllegroStructReasonInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructReasonInfoType originally named ReasonInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructReasonInfoType extends AllegroWsdlClass
{
    /**
     * The reasonId
     * @var int
     */
    public $reasonId;
    /**
     * The reasonName
     * @var string
     */
    public $reasonName;
    /**
     * The maxQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $maxQuantity;
    /**
     * Constructor method for ReasonInfoType
     * @see parent::__construct()
     * @param int $_reasonId
     * @param string $_reasonName
     * @param int $_maxQuantity
     * @return AllegroStructReasonInfoType
     */
    public function __construct($_reasonId = NULL,$_reasonName = NULL,$_maxQuantity = NULL)
    {
        parent::__construct(array('reasonId'=>$_reasonId,'reasonName'=>$_reasonName,'maxQuantity'=>$_maxQuantity),false);
    }
    /**
     * Get reasonId value
     * @return int|null
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param int $_reasonId the reasonId
     * @return int
     */
    public function setReasonId($_reasonId)
    {
        return ($this->reasonId = $_reasonId);
    }
    /**
     * Get reasonName value
     * @return string|null
     */
    public function getReasonName()
    {
        return $this->reasonName;
    }
    /**
     * Set reasonName value
     * @param string $_reasonName the reasonName
     * @return string
     */
    public function setReasonName($_reasonName)
    {
        return ($this->reasonName = $_reasonName);
    }
    /**
     * Get maxQuantity value
     * @return int|null
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }
    /**
     * Set maxQuantity value
     * @param int $_maxQuantity the maxQuantity
     * @return int
     */
    public function setMaxQuantity($_maxQuantity)
    {
        return ($this->maxQuantity = $_maxQuantity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructReasonInfoType
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
