<?php
/**
 * File for class AllegroStructDealsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDealsStruct originally named DealsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDealsStruct extends AllegroWsdlClass
{
    /**
     * The dealId
     * @var long
     */
    public $dealId;
    /**
     * The dealDate
     * @var long
     */
    public $dealDate;
    /**
     * The dealQuantity
     * @var int
     */
    public $dealQuantity;
    /**
     * The dealAmountOriginal
     * @var float
     */
    public $dealAmountOriginal;
    /**
     * The dealAmountDiscounted
     * @var float
     */
    public $dealAmountDiscounted;
    /**
     * Constructor method for DealsStruct
     * @see parent::__construct()
     * @param long $_dealId
     * @param long $_dealDate
     * @param int $_dealQuantity
     * @param float $_dealAmountOriginal
     * @param float $_dealAmountDiscounted
     * @return AllegroStructDealsStruct
     */
    public function __construct($_dealId = NULL,$_dealDate = NULL,$_dealQuantity = NULL,$_dealAmountOriginal = NULL,$_dealAmountDiscounted = NULL)
    {
        parent::__construct(array('dealId'=>$_dealId,'dealDate'=>$_dealDate,'dealQuantity'=>$_dealQuantity,'dealAmountOriginal'=>$_dealAmountOriginal,'dealAmountDiscounted'=>$_dealAmountDiscounted),false);
    }
    /**
     * Get dealId value
     * @return long|null
     */
    public function getDealId()
    {
        return $this->dealId;
    }
    /**
     * Set dealId value
     * @param long $_dealId the dealId
     * @return long
     */
    public function setDealId($_dealId)
    {
        return ($this->dealId = $_dealId);
    }
    /**
     * Get dealDate value
     * @return long|null
     */
    public function getDealDate()
    {
        return $this->dealDate;
    }
    /**
     * Set dealDate value
     * @param long $_dealDate the dealDate
     * @return long
     */
    public function setDealDate($_dealDate)
    {
        return ($this->dealDate = $_dealDate);
    }
    /**
     * Get dealQuantity value
     * @return int|null
     */
    public function getDealQuantity()
    {
        return $this->dealQuantity;
    }
    /**
     * Set dealQuantity value
     * @param int $_dealQuantity the dealQuantity
     * @return int
     */
    public function setDealQuantity($_dealQuantity)
    {
        return ($this->dealQuantity = $_dealQuantity);
    }
    /**
     * Get dealAmountOriginal value
     * @return float|null
     */
    public function getDealAmountOriginal()
    {
        return $this->dealAmountOriginal;
    }
    /**
     * Set dealAmountOriginal value
     * @param float $_dealAmountOriginal the dealAmountOriginal
     * @return float
     */
    public function setDealAmountOriginal($_dealAmountOriginal)
    {
        return ($this->dealAmountOriginal = $_dealAmountOriginal);
    }
    /**
     * Get dealAmountDiscounted value
     * @return float|null
     */
    public function getDealAmountDiscounted()
    {
        return $this->dealAmountDiscounted;
    }
    /**
     * Set dealAmountDiscounted value
     * @param float $_dealAmountDiscounted the dealAmountDiscounted
     * @return float
     */
    public function setDealAmountDiscounted($_dealAmountDiscounted)
    {
        return ($this->dealAmountDiscounted = $_dealAmountDiscounted);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDealsStruct
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
