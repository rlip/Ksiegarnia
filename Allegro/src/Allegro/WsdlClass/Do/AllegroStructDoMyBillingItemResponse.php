<?php
/**
 * File for class AllegroStructDoMyBillingItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyBillingItemResponse originally named doMyBillingItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyBillingItemResponse extends AllegroWsdlClass
{
    /**
     * The entryFees
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItembilling
     */
    public $entryFees;
    /**
     * The endingFees
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItembilling
     */
    public $endingFees;
    /**
     * Constructor method for doMyBillingItemResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfItembilling $_entryFees
     * @param AllegroStructArrayOfItembilling $_endingFees
     * @return AllegroStructDoMyBillingItemResponse
     */
    public function __construct($_entryFees = NULL,$_endingFees = NULL)
    {
        parent::__construct(array('entryFees'=>($_entryFees instanceof AllegroStructArrayOfItembilling)?$_entryFees:new AllegroStructArrayOfItembilling($_entryFees),'endingFees'=>($_endingFees instanceof AllegroStructArrayOfItembilling)?$_endingFees:new AllegroStructArrayOfItembilling($_endingFees)),false);
    }
    /**
     * Get entryFees value
     * @return AllegroStructArrayOfItembilling|null
     */
    public function getEntryFees()
    {
        return $this->entryFees;
    }
    /**
     * Set entryFees value
     * @param AllegroStructArrayOfItembilling $_entryFees the entryFees
     * @return AllegroStructArrayOfItembilling
     */
    public function setEntryFees($_entryFees)
    {
        return ($this->entryFees = $_entryFees);
    }
    /**
     * Get endingFees value
     * @return AllegroStructArrayOfItembilling|null
     */
    public function getEndingFees()
    {
        return $this->endingFees;
    }
    /**
     * Set endingFees value
     * @param AllegroStructArrayOfItembilling $_endingFees the endingFees
     * @return AllegroStructArrayOfItembilling
     */
    public function setEndingFees($_endingFees)
    {
        return ($this->endingFees = $_endingFees);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyBillingItemResponse
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
