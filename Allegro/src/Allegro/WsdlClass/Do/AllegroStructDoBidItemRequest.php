<?php
/**
 * File for class AllegroStructDoBidItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoBidItemRequest originally named DoBidItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoBidItemRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The bidItId
     * @var long
     */
    public $bidItId;
    /**
     * The bidUserPrice
     * @var float
     */
    public $bidUserPrice;
    /**
     * The bidQuantity
     * @var long
     */
    public $bidQuantity;
    /**
     * The bidBuyNow
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $bidBuyNow;
    /**
     * The pharmacyRecipientData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructPharmacyRecipientDataStruct
     */
    public $pharmacyRecipientData;
    /**
     * The variantId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $variantId;
    /**
     * Constructor method for DoBidItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_bidItId
     * @param float $_bidUserPrice
     * @param long $_bidQuantity
     * @param long $_bidBuyNow
     * @param AllegroStructPharmacyRecipientDataStruct $_pharmacyRecipientData
     * @param string $_variantId
     * @return AllegroStructDoBidItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_bidItId = NULL,$_bidUserPrice = NULL,$_bidQuantity = NULL,$_bidBuyNow = NULL,$_pharmacyRecipientData = NULL,$_variantId = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'bidItId'=>$_bidItId,'bidUserPrice'=>$_bidUserPrice,'bidQuantity'=>$_bidQuantity,'bidBuyNow'=>$_bidBuyNow,'pharmacyRecipientData'=>$_pharmacyRecipientData,'variantId'=>$_variantId),false);
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
     * Get bidItId value
     * @return long|null
     */
    public function getBidItId()
    {
        return $this->bidItId;
    }
    /**
     * Set bidItId value
     * @param long $_bidItId the bidItId
     * @return long
     */
    public function setBidItId($_bidItId)
    {
        return ($this->bidItId = $_bidItId);
    }
    /**
     * Get bidUserPrice value
     * @return float|null
     */
    public function getBidUserPrice()
    {
        return $this->bidUserPrice;
    }
    /**
     * Set bidUserPrice value
     * @param float $_bidUserPrice the bidUserPrice
     * @return float
     */
    public function setBidUserPrice($_bidUserPrice)
    {
        return ($this->bidUserPrice = $_bidUserPrice);
    }
    /**
     * Get bidQuantity value
     * @return long|null
     */
    public function getBidQuantity()
    {
        return $this->bidQuantity;
    }
    /**
     * Set bidQuantity value
     * @param long $_bidQuantity the bidQuantity
     * @return long
     */
    public function setBidQuantity($_bidQuantity)
    {
        return ($this->bidQuantity = $_bidQuantity);
    }
    /**
     * Get bidBuyNow value
     * @return long|null
     */
    public function getBidBuyNow()
    {
        return $this->bidBuyNow;
    }
    /**
     * Set bidBuyNow value
     * @param long $_bidBuyNow the bidBuyNow
     * @return long
     */
    public function setBidBuyNow($_bidBuyNow)
    {
        return ($this->bidBuyNow = $_bidBuyNow);
    }
    /**
     * Get pharmacyRecipientData value
     * @return AllegroStructPharmacyRecipientDataStruct|null
     */
    public function getPharmacyRecipientData()
    {
        return $this->pharmacyRecipientData;
    }
    /**
     * Set pharmacyRecipientData value
     * @param AllegroStructPharmacyRecipientDataStruct $_pharmacyRecipientData the pharmacyRecipientData
     * @return AllegroStructPharmacyRecipientDataStruct
     */
    public function setPharmacyRecipientData($_pharmacyRecipientData)
    {
        return ($this->pharmacyRecipientData = $_pharmacyRecipientData);
    }
    /**
     * Get variantId value
     * @return string|null
     */
    public function getVariantId()
    {
        return $this->variantId;
    }
    /**
     * Set variantId value
     * @param string $_variantId the variantId
     * @return string
     */
    public function setVariantId($_variantId)
    {
        return ($this->variantId = $_variantId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoBidItemRequest
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
