<?php
/**
 * File for class AllegroStructFavouritesCategoriesStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFavouritesCategoriesStruct originally named FavouritesCategoriesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFavouritesCategoriesStruct extends AllegroWsdlClass
{
    /**
     * The sCategoryId
     * @var int
     */
    public $sCategoryId;
    /**
     * The sSubscriptionStatus
     * @var int
     */
    public $sSubscriptionStatus;
    /**
     * The sPosition
     * @var int
     */
    public $sPosition;
    /**
     * The sBuyNowOnly
     * @var int
     */
    public $sBuyNowOnly;
    /**
     * Constructor method for FavouritesCategoriesStruct
     * @see parent::__construct()
     * @param int $_sCategoryId
     * @param int $_sSubscriptionStatus
     * @param int $_sPosition
     * @param int $_sBuyNowOnly
     * @return AllegroStructFavouritesCategoriesStruct
     */
    public function __construct($_sCategoryId = NULL,$_sSubscriptionStatus = NULL,$_sPosition = NULL,$_sBuyNowOnly = NULL)
    {
        parent::__construct(array('sCategoryId'=>$_sCategoryId,'sSubscriptionStatus'=>$_sSubscriptionStatus,'sPosition'=>$_sPosition,'sBuyNowOnly'=>$_sBuyNowOnly),false);
    }
    /**
     * Get sCategoryId value
     * @return int|null
     */
    public function getSCategoryId()
    {
        return $this->sCategoryId;
    }
    /**
     * Set sCategoryId value
     * @param int $_sCategoryId the sCategoryId
     * @return int
     */
    public function setSCategoryId($_sCategoryId)
    {
        return ($this->sCategoryId = $_sCategoryId);
    }
    /**
     * Get sSubscriptionStatus value
     * @return int|null
     */
    public function getSSubscriptionStatus()
    {
        return $this->sSubscriptionStatus;
    }
    /**
     * Set sSubscriptionStatus value
     * @param int $_sSubscriptionStatus the sSubscriptionStatus
     * @return int
     */
    public function setSSubscriptionStatus($_sSubscriptionStatus)
    {
        return ($this->sSubscriptionStatus = $_sSubscriptionStatus);
    }
    /**
     * Get sPosition value
     * @return int|null
     */
    public function getSPosition()
    {
        return $this->sPosition;
    }
    /**
     * Set sPosition value
     * @param int $_sPosition the sPosition
     * @return int
     */
    public function setSPosition($_sPosition)
    {
        return ($this->sPosition = $_sPosition);
    }
    /**
     * Get sBuyNowOnly value
     * @return int|null
     */
    public function getSBuyNowOnly()
    {
        return $this->sBuyNowOnly;
    }
    /**
     * Set sBuyNowOnly value
     * @param int $_sBuyNowOnly the sBuyNowOnly
     * @return int
     */
    public function setSBuyNowOnly($_sBuyNowOnly)
    {
        return ($this->sBuyNowOnly = $_sBuyNowOnly);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFavouritesCategoriesStruct
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
