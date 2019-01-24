<?php
/**
 * File for class AllegroStructDoGetFreeDeliveryAmountResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFreeDeliveryAmountResponse originally named doGetFreeDeliveryAmountResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFreeDeliveryAmountResponse extends AllegroWsdlClass
{
    /**
     * The freeDeliveryAmount
     * @var float
     */
    public $freeDeliveryAmount;
    /**
     * The activeFlag
     * @var int
     */
    public $activeFlag;
    /**
     * Constructor method for doGetFreeDeliveryAmountResponse
     * @see parent::__construct()
     * @param float $_freeDeliveryAmount
     * @param int $_activeFlag
     * @return AllegroStructDoGetFreeDeliveryAmountResponse
     */
    public function __construct($_freeDeliveryAmount = NULL,$_activeFlag = NULL)
    {
        parent::__construct(array('freeDeliveryAmount'=>$_freeDeliveryAmount,'activeFlag'=>$_activeFlag),false);
    }
    /**
     * Get freeDeliveryAmount value
     * @return float|null
     */
    public function getFreeDeliveryAmount()
    {
        return $this->freeDeliveryAmount;
    }
    /**
     * Set freeDeliveryAmount value
     * @param float $_freeDeliveryAmount the freeDeliveryAmount
     * @return float
     */
    public function setFreeDeliveryAmount($_freeDeliveryAmount)
    {
        return ($this->freeDeliveryAmount = $_freeDeliveryAmount);
    }
    /**
     * Get activeFlag value
     * @return int|null
     */
    public function getActiveFlag()
    {
        return $this->activeFlag;
    }
    /**
     * Set activeFlag value
     * @param int $_activeFlag the activeFlag
     * @return int
     */
    public function setActiveFlag($_activeFlag)
    {
        return ($this->activeFlag = $_activeFlag);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetFreeDeliveryAmountResponse
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
