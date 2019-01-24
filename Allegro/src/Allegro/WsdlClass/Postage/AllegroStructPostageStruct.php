<?php
/**
 * File for class AllegroStructPostageStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostageStruct originally named PostageStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostageStruct extends AllegroWsdlClass
{
    /**
     * The postageAmount
     * @var float
     */
    public $postageAmount;
    /**
     * The postageAmountAdd
     * @var float
     */
    public $postageAmountAdd;
    /**
     * The postagePackSize
     * @var int
     */
    public $postagePackSize;
    /**
     * The postageId
     * @var int
     */
    public $postageId;
    /**
     * The postageFreeShipping
     * @var int
     */
    public $postageFreeShipping;
    /**
     * The postageFreeReturn
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $postageFreeReturn;
    /**
     * The postageFulfillmentTime
     * @var AllegroStructFulfillmentTimeStruct
     */
    public $postageFulfillmentTime;
    /**
     * Constructor method for PostageStruct
     * @see parent::__construct()
     * @param float $_postageAmount
     * @param float $_postageAmountAdd
     * @param int $_postagePackSize
     * @param int $_postageId
     * @param int $_postageFreeShipping
     * @param int $_postageFreeReturn
     * @param AllegroStructFulfillmentTimeStruct $_postageFulfillmentTime
     * @return AllegroStructPostageStruct
     */
    public function __construct($_postageAmount = NULL,$_postageAmountAdd = NULL,$_postagePackSize = NULL,$_postageId = NULL,$_postageFreeShipping = NULL,$_postageFreeReturn = NULL,$_postageFulfillmentTime = NULL)
    {
        parent::__construct(array('postageAmount'=>$_postageAmount,'postageAmountAdd'=>$_postageAmountAdd,'postagePackSize'=>$_postagePackSize,'postageId'=>$_postageId,'postageFreeShipping'=>$_postageFreeShipping,'postageFreeReturn'=>$_postageFreeReturn,'postageFulfillmentTime'=>$_postageFulfillmentTime),false);
    }
    /**
     * Get postageAmount value
     * @return float|null
     */
    public function getPostageAmount()
    {
        return $this->postageAmount;
    }
    /**
     * Set postageAmount value
     * @param float $_postageAmount the postageAmount
     * @return float
     */
    public function setPostageAmount($_postageAmount)
    {
        return ($this->postageAmount = $_postageAmount);
    }
    /**
     * Get postageAmountAdd value
     * @return float|null
     */
    public function getPostageAmountAdd()
    {
        return $this->postageAmountAdd;
    }
    /**
     * Set postageAmountAdd value
     * @param float $_postageAmountAdd the postageAmountAdd
     * @return float
     */
    public function setPostageAmountAdd($_postageAmountAdd)
    {
        return ($this->postageAmountAdd = $_postageAmountAdd);
    }
    /**
     * Get postagePackSize value
     * @return int|null
     */
    public function getPostagePackSize()
    {
        return $this->postagePackSize;
    }
    /**
     * Set postagePackSize value
     * @param int $_postagePackSize the postagePackSize
     * @return int
     */
    public function setPostagePackSize($_postagePackSize)
    {
        return ($this->postagePackSize = $_postagePackSize);
    }
    /**
     * Get postageId value
     * @return int|null
     */
    public function getPostageId()
    {
        return $this->postageId;
    }
    /**
     * Set postageId value
     * @param int $_postageId the postageId
     * @return int
     */
    public function setPostageId($_postageId)
    {
        return ($this->postageId = $_postageId);
    }
    /**
     * Get postageFreeShipping value
     * @return int|null
     */
    public function getPostageFreeShipping()
    {
        return $this->postageFreeShipping;
    }
    /**
     * Set postageFreeShipping value
     * @param int $_postageFreeShipping the postageFreeShipping
     * @return int
     */
    public function setPostageFreeShipping($_postageFreeShipping)
    {
        return ($this->postageFreeShipping = $_postageFreeShipping);
    }
    /**
     * Get postageFreeReturn value
     * @return int|null
     */
    public function getPostageFreeReturn()
    {
        return $this->postageFreeReturn;
    }
    /**
     * Set postageFreeReturn value
     * @param int $_postageFreeReturn the postageFreeReturn
     * @return int
     */
    public function setPostageFreeReturn($_postageFreeReturn)
    {
        return ($this->postageFreeReturn = $_postageFreeReturn);
    }
    /**
     * Get postageFulfillmentTime value
     * @return AllegroStructFulfillmentTimeStruct|null
     */
    public function getPostageFulfillmentTime()
    {
        return $this->postageFulfillmentTime;
    }
    /**
     * Set postageFulfillmentTime value
     * @param AllegroStructFulfillmentTimeStruct $_postageFulfillmentTime the postageFulfillmentTime
     * @return AllegroStructFulfillmentTimeStruct
     */
    public function setPostageFulfillmentTime($_postageFulfillmentTime)
    {
        return ($this->postageFulfillmentTime = $_postageFulfillmentTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostageStruct
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
