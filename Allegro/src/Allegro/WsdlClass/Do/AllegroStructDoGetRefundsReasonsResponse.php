<?php
/**
 * File for class AllegroStructDoGetRefundsReasonsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetRefundsReasonsResponse originally named doGetRefundsReasonsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetRefundsReasonsResponse extends AllegroWsdlClass
{
    /**
     * The reasonsCount
     * @var int
     */
    public $reasonsCount;
    /**
     * The reasonsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfReasoninfotype
     */
    public $reasonsList;
    /**
     * Constructor method for doGetRefundsReasonsResponse
     * @see parent::__construct()
     * @param int $_reasonsCount
     * @param AllegroStructArrayOfReasoninfotype $_reasonsList
     * @return AllegroStructDoGetRefundsReasonsResponse
     */
    public function __construct($_reasonsCount = NULL,$_reasonsList = NULL)
    {
        parent::__construct(array('reasonsCount'=>$_reasonsCount,'reasonsList'=>($_reasonsList instanceof AllegroStructArrayOfReasoninfotype)?$_reasonsList:new AllegroStructArrayOfReasoninfotype($_reasonsList)),false);
    }
    /**
     * Get reasonsCount value
     * @return int|null
     */
    public function getReasonsCount()
    {
        return $this->reasonsCount;
    }
    /**
     * Set reasonsCount value
     * @param int $_reasonsCount the reasonsCount
     * @return int
     */
    public function setReasonsCount($_reasonsCount)
    {
        return ($this->reasonsCount = $_reasonsCount);
    }
    /**
     * Get reasonsList value
     * @return AllegroStructArrayOfReasoninfotype|null
     */
    public function getReasonsList()
    {
        return $this->reasonsList;
    }
    /**
     * Set reasonsList value
     * @param AllegroStructArrayOfReasoninfotype $_reasonsList the reasonsList
     * @return AllegroStructArrayOfReasoninfotype
     */
    public function setReasonsList($_reasonsList)
    {
        return ($this->reasonsList = $_reasonsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetRefundsReasonsResponse
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
