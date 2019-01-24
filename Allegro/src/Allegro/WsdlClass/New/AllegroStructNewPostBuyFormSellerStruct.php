<?php
/**
 * File for class AllegroStructNewPostBuyFormSellerStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructNewPostBuyFormSellerStruct originally named NewPostBuyFormSellerStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructNewPostBuyFormSellerStruct extends AllegroWsdlClass
{
    /**
     * The sellerId
     * @var int
     */
    public $sellerId;
    /**
     * The sellerItemIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $sellerItemIds;
    /**
     * The sellerShipmentId
     * @var int
     */
    public $sellerShipmentId;
    /**
     * The sellerGdId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellerGdId;
    /**
     * The sellerShipmentAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $sellerShipmentAmount;
    /**
     * The sellerMessageTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sellerMessageTo;
    /**
     * Constructor method for NewPostBuyFormSellerStruct
     * @see parent::__construct()
     * @param int $_sellerId
     * @param AllegroStructArrayOfLong $_sellerItemIds
     * @param int $_sellerShipmentId
     * @param int $_sellerGdId
     * @param float $_sellerShipmentAmount
     * @param string $_sellerMessageTo
     * @return AllegroStructNewPostBuyFormSellerStruct
     */
    public function __construct($_sellerId = NULL,$_sellerItemIds = NULL,$_sellerShipmentId = NULL,$_sellerGdId = NULL,$_sellerShipmentAmount = NULL,$_sellerMessageTo = NULL)
    {
        parent::__construct(array('sellerId'=>$_sellerId,'sellerItemIds'=>($_sellerItemIds instanceof AllegroStructArrayOfLong)?$_sellerItemIds:new AllegroStructArrayOfLong($_sellerItemIds),'sellerShipmentId'=>$_sellerShipmentId,'sellerGdId'=>$_sellerGdId,'sellerShipmentAmount'=>$_sellerShipmentAmount,'sellerMessageTo'=>$_sellerMessageTo),false);
    }
    /**
     * Get sellerId value
     * @return int|null
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }
    /**
     * Set sellerId value
     * @param int $_sellerId the sellerId
     * @return int
     */
    public function setSellerId($_sellerId)
    {
        return ($this->sellerId = $_sellerId);
    }
    /**
     * Get sellerItemIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getSellerItemIds()
    {
        return $this->sellerItemIds;
    }
    /**
     * Set sellerItemIds value
     * @param AllegroStructArrayOfLong $_sellerItemIds the sellerItemIds
     * @return AllegroStructArrayOfLong
     */
    public function setSellerItemIds($_sellerItemIds)
    {
        return ($this->sellerItemIds = $_sellerItemIds);
    }
    /**
     * Get sellerShipmentId value
     * @return int|null
     */
    public function getSellerShipmentId()
    {
        return $this->sellerShipmentId;
    }
    /**
     * Set sellerShipmentId value
     * @param int $_sellerShipmentId the sellerShipmentId
     * @return int
     */
    public function setSellerShipmentId($_sellerShipmentId)
    {
        return ($this->sellerShipmentId = $_sellerShipmentId);
    }
    /**
     * Get sellerGdId value
     * @return int|null
     */
    public function getSellerGdId()
    {
        return $this->sellerGdId;
    }
    /**
     * Set sellerGdId value
     * @param int $_sellerGdId the sellerGdId
     * @return int
     */
    public function setSellerGdId($_sellerGdId)
    {
        return ($this->sellerGdId = $_sellerGdId);
    }
    /**
     * Get sellerShipmentAmount value
     * @return float|null
     */
    public function getSellerShipmentAmount()
    {
        return $this->sellerShipmentAmount;
    }
    /**
     * Set sellerShipmentAmount value
     * @param float $_sellerShipmentAmount the sellerShipmentAmount
     * @return float
     */
    public function setSellerShipmentAmount($_sellerShipmentAmount)
    {
        return ($this->sellerShipmentAmount = $_sellerShipmentAmount);
    }
    /**
     * Get sellerMessageTo value
     * @return string|null
     */
    public function getSellerMessageTo()
    {
        return $this->sellerMessageTo;
    }
    /**
     * Set sellerMessageTo value
     * @param string $_sellerMessageTo the sellerMessageTo
     * @return string
     */
    public function setSellerMessageTo($_sellerMessageTo)
    {
        return ($this->sellerMessageTo = $_sellerMessageTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructNewPostBuyFormSellerStruct
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
