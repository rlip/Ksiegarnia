<?php
/**
 * File for class AllegroStructPostBuyFormItemStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormItemStruct originally named PostBuyFormItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormItemStruct extends AllegroWsdlClass
{
    /**
     * The postBuyFormItQuantity
     * @var int
     */
    public $postBuyFormItQuantity;
    /**
     * The postBuyFormItAmount
     * @var float
     */
    public $postBuyFormItAmount;
    /**
     * The postBuyFormItId
     * @var long
     */
    public $postBuyFormItId;
    /**
     * The postBuyFormItTitle
     * @var string
     */
    public $postBuyFormItTitle;
    /**
     * The postBuyFormItCountry
     * @var int
     */
    public $postBuyFormItCountry;
    /**
     * The postBuyFormItPrice
     * @var float
     */
    public $postBuyFormItPrice;
    /**
     * The postBuyFormItDeals
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformitemdealsstruct
     */
    public $postBuyFormItDeals;
    /**
     * Constructor method for PostBuyFormItemStruct
     * @see parent::__construct()
     * @param int $_postBuyFormItQuantity
     * @param float $_postBuyFormItAmount
     * @param long $_postBuyFormItId
     * @param string $_postBuyFormItTitle
     * @param int $_postBuyFormItCountry
     * @param float $_postBuyFormItPrice
     * @param AllegroStructArrayOfPostbuyformitemdealsstruct $_postBuyFormItDeals
     * @return AllegroStructPostBuyFormItemStruct
     */
    public function __construct($_postBuyFormItQuantity = NULL,$_postBuyFormItAmount = NULL,$_postBuyFormItId = NULL,$_postBuyFormItTitle = NULL,$_postBuyFormItCountry = NULL,$_postBuyFormItPrice = NULL,$_postBuyFormItDeals = NULL)
    {
        parent::__construct(array('postBuyFormItQuantity'=>$_postBuyFormItQuantity,'postBuyFormItAmount'=>$_postBuyFormItAmount,'postBuyFormItId'=>$_postBuyFormItId,'postBuyFormItTitle'=>$_postBuyFormItTitle,'postBuyFormItCountry'=>$_postBuyFormItCountry,'postBuyFormItPrice'=>$_postBuyFormItPrice,'postBuyFormItDeals'=>($_postBuyFormItDeals instanceof AllegroStructArrayOfPostbuyformitemdealsstruct)?$_postBuyFormItDeals:new AllegroStructArrayOfPostbuyformitemdealsstruct($_postBuyFormItDeals)),false);
    }
    /**
     * Get postBuyFormItQuantity value
     * @return int|null
     */
    public function getPostBuyFormItQuantity()
    {
        return $this->postBuyFormItQuantity;
    }
    /**
     * Set postBuyFormItQuantity value
     * @param int $_postBuyFormItQuantity the postBuyFormItQuantity
     * @return int
     */
    public function setPostBuyFormItQuantity($_postBuyFormItQuantity)
    {
        return ($this->postBuyFormItQuantity = $_postBuyFormItQuantity);
    }
    /**
     * Get postBuyFormItAmount value
     * @return float|null
     */
    public function getPostBuyFormItAmount()
    {
        return $this->postBuyFormItAmount;
    }
    /**
     * Set postBuyFormItAmount value
     * @param float $_postBuyFormItAmount the postBuyFormItAmount
     * @return float
     */
    public function setPostBuyFormItAmount($_postBuyFormItAmount)
    {
        return ($this->postBuyFormItAmount = $_postBuyFormItAmount);
    }
    /**
     * Get postBuyFormItId value
     * @return long|null
     */
    public function getPostBuyFormItId()
    {
        return $this->postBuyFormItId;
    }
    /**
     * Set postBuyFormItId value
     * @param long $_postBuyFormItId the postBuyFormItId
     * @return long
     */
    public function setPostBuyFormItId($_postBuyFormItId)
    {
        return ($this->postBuyFormItId = $_postBuyFormItId);
    }
    /**
     * Get postBuyFormItTitle value
     * @return string|null
     */
    public function getPostBuyFormItTitle()
    {
        return $this->postBuyFormItTitle;
    }
    /**
     * Set postBuyFormItTitle value
     * @param string $_postBuyFormItTitle the postBuyFormItTitle
     * @return string
     */
    public function setPostBuyFormItTitle($_postBuyFormItTitle)
    {
        return ($this->postBuyFormItTitle = $_postBuyFormItTitle);
    }
    /**
     * Get postBuyFormItCountry value
     * @return int|null
     */
    public function getPostBuyFormItCountry()
    {
        return $this->postBuyFormItCountry;
    }
    /**
     * Set postBuyFormItCountry value
     * @param int $_postBuyFormItCountry the postBuyFormItCountry
     * @return int
     */
    public function setPostBuyFormItCountry($_postBuyFormItCountry)
    {
        return ($this->postBuyFormItCountry = $_postBuyFormItCountry);
    }
    /**
     * Get postBuyFormItPrice value
     * @return float|null
     */
    public function getPostBuyFormItPrice()
    {
        return $this->postBuyFormItPrice;
    }
    /**
     * Set postBuyFormItPrice value
     * @param float $_postBuyFormItPrice the postBuyFormItPrice
     * @return float
     */
    public function setPostBuyFormItPrice($_postBuyFormItPrice)
    {
        return ($this->postBuyFormItPrice = $_postBuyFormItPrice);
    }
    /**
     * Get postBuyFormItDeals value
     * @return AllegroStructArrayOfPostbuyformitemdealsstruct|null
     */
    public function getPostBuyFormItDeals()
    {
        return $this->postBuyFormItDeals;
    }
    /**
     * Set postBuyFormItDeals value
     * @param AllegroStructArrayOfPostbuyformitemdealsstruct $_postBuyFormItDeals the postBuyFormItDeals
     * @return AllegroStructArrayOfPostbuyformitemdealsstruct
     */
    public function setPostBuyFormItDeals($_postBuyFormItDeals)
    {
        return ($this->postBuyFormItDeals = $_postBuyFormItDeals);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormItemStruct
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
