<?php
/**
 * File for class AllegroStructSellerInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellerInfoStruct originally named SellerInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellerInfoStruct extends AllegroWsdlClass
{
    /**
     * The sellerId
     * @var int
     */
    public $sellerId;
    /**
     * The sellerName
     * @var string
     */
    public $sellerName;
    /**
     * The sellerRating
     * @var int
     */
    public $sellerRating;
    /**
     * The sellerInfo
     * @var int
     */
    public $sellerInfo;
    /**
     * Constructor method for SellerInfoStruct
     * @see parent::__construct()
     * @param int $_sellerId
     * @param string $_sellerName
     * @param int $_sellerRating
     * @param int $_sellerInfo
     * @return AllegroStructSellerInfoStruct
     */
    public function __construct($_sellerId = NULL,$_sellerName = NULL,$_sellerRating = NULL,$_sellerInfo = NULL)
    {
        parent::__construct(array('sellerId'=>$_sellerId,'sellerName'=>$_sellerName,'sellerRating'=>$_sellerRating,'sellerInfo'=>$_sellerInfo),false);
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
     * Get sellerName value
     * @return string|null
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }
    /**
     * Set sellerName value
     * @param string $_sellerName the sellerName
     * @return string
     */
    public function setSellerName($_sellerName)
    {
        return ($this->sellerName = $_sellerName);
    }
    /**
     * Get sellerRating value
     * @return int|null
     */
    public function getSellerRating()
    {
        return $this->sellerRating;
    }
    /**
     * Set sellerRating value
     * @param int $_sellerRating the sellerRating
     * @return int
     */
    public function setSellerRating($_sellerRating)
    {
        return ($this->sellerRating = $_sellerRating);
    }
    /**
     * Get sellerInfo value
     * @return int|null
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }
    /**
     * Set sellerInfo value
     * @param int $_sellerInfo the sellerInfo
     * @return int
     */
    public function setSellerInfo($_sellerInfo)
    {
        return ($this->sellerInfo = $_sellerInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellerInfoStruct
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
