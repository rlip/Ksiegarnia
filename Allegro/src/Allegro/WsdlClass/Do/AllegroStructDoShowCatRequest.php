<?php
/**
 * File for class AllegroStructDoShowCatRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoShowCatRequest originally named DoShowCatRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoShowCatRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The catId
     * @var int
     */
    public $catId;
    /**
     * The catItemState
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $catItemState;
    /**
     * The catItemOption
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $catItemOption;
    /**
     * The catItemDurationOption
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructDurationTimeInfo
     */
    public $catItemDurationOption;
    /**
     * The catAttribFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $catAttribFields;
    /**
     * The catSortOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $catSortOptions;
    /**
     * The catItemsPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructPriceCatInfo
     */
    public $catItemsPrice;
    /**
     * The catItemsOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $catItemsOffset;
    /**
     * The catItemsLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $catItemsLimit;
    /**
     * The catOrderFulfillmentTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $catOrderFulfillmentTime;
    /**
     * Constructor method for DoShowCatRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_catId
     * @param int $_catItemState
     * @param int $_catItemOption
     * @param AllegroStructDurationTimeInfo $_catItemDurationOption
     * @param AllegroStructArrayOfFieldsvalue $_catAttribFields
     * @param int $_catSortOptions
     * @param AllegroStructPriceCatInfo $_catItemsPrice
     * @param int $_catItemsOffset
     * @param int $_catItemsLimit
     * @param int $_catOrderFulfillmentTime
     * @return AllegroStructDoShowCatRequest
     */
    public function __construct($_sessionHandle = NULL,$_catId = NULL,$_catItemState = NULL,$_catItemOption = NULL,$_catItemDurationOption = NULL,$_catAttribFields = NULL,$_catSortOptions = NULL,$_catItemsPrice = NULL,$_catItemsOffset = NULL,$_catItemsLimit = NULL,$_catOrderFulfillmentTime = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'catId'=>$_catId,'catItemState'=>$_catItemState,'catItemOption'=>$_catItemOption,'catItemDurationOption'=>$_catItemDurationOption,'catAttribFields'=>($_catAttribFields instanceof AllegroStructArrayOfFieldsvalue)?$_catAttribFields:new AllegroStructArrayOfFieldsvalue($_catAttribFields),'catSortOptions'=>$_catSortOptions,'catItemsPrice'=>$_catItemsPrice,'catItemsOffset'=>$_catItemsOffset,'catItemsLimit'=>$_catItemsLimit,'catOrderFulfillmentTime'=>$_catOrderFulfillmentTime),false);
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
     * Get catId value
     * @return int|null
     */
    public function getCatId()
    {
        return $this->catId;
    }
    /**
     * Set catId value
     * @param int $_catId the catId
     * @return int
     */
    public function setCatId($_catId)
    {
        return ($this->catId = $_catId);
    }
    /**
     * Get catItemState value
     * @return int|null
     */
    public function getCatItemState()
    {
        return $this->catItemState;
    }
    /**
     * Set catItemState value
     * @param int $_catItemState the catItemState
     * @return int
     */
    public function setCatItemState($_catItemState)
    {
        return ($this->catItemState = $_catItemState);
    }
    /**
     * Get catItemOption value
     * @return int|null
     */
    public function getCatItemOption()
    {
        return $this->catItemOption;
    }
    /**
     * Set catItemOption value
     * @param int $_catItemOption the catItemOption
     * @return int
     */
    public function setCatItemOption($_catItemOption)
    {
        return ($this->catItemOption = $_catItemOption);
    }
    /**
     * Get catItemDurationOption value
     * @return AllegroStructDurationTimeInfo|null
     */
    public function getCatItemDurationOption()
    {
        return $this->catItemDurationOption;
    }
    /**
     * Set catItemDurationOption value
     * @param AllegroStructDurationTimeInfo $_catItemDurationOption the catItemDurationOption
     * @return AllegroStructDurationTimeInfo
     */
    public function setCatItemDurationOption($_catItemDurationOption)
    {
        return ($this->catItemDurationOption = $_catItemDurationOption);
    }
    /**
     * Get catAttribFields value
     * @return AllegroStructArrayOfFieldsvalue|null
     */
    public function getCatAttribFields()
    {
        return $this->catAttribFields;
    }
    /**
     * Set catAttribFields value
     * @param AllegroStructArrayOfFieldsvalue $_catAttribFields the catAttribFields
     * @return AllegroStructArrayOfFieldsvalue
     */
    public function setCatAttribFields($_catAttribFields)
    {
        return ($this->catAttribFields = $_catAttribFields);
    }
    /**
     * Get catSortOptions value
     * @return int|null
     */
    public function getCatSortOptions()
    {
        return $this->catSortOptions;
    }
    /**
     * Set catSortOptions value
     * @param int $_catSortOptions the catSortOptions
     * @return int
     */
    public function setCatSortOptions($_catSortOptions)
    {
        return ($this->catSortOptions = $_catSortOptions);
    }
    /**
     * Get catItemsPrice value
     * @return AllegroStructPriceCatInfo|null
     */
    public function getCatItemsPrice()
    {
        return $this->catItemsPrice;
    }
    /**
     * Set catItemsPrice value
     * @param AllegroStructPriceCatInfo $_catItemsPrice the catItemsPrice
     * @return AllegroStructPriceCatInfo
     */
    public function setCatItemsPrice($_catItemsPrice)
    {
        return ($this->catItemsPrice = $_catItemsPrice);
    }
    /**
     * Get catItemsOffset value
     * @return int|null
     */
    public function getCatItemsOffset()
    {
        return $this->catItemsOffset;
    }
    /**
     * Set catItemsOffset value
     * @param int $_catItemsOffset the catItemsOffset
     * @return int
     */
    public function setCatItemsOffset($_catItemsOffset)
    {
        return ($this->catItemsOffset = $_catItemsOffset);
    }
    /**
     * Get catItemsLimit value
     * @return int|null
     */
    public function getCatItemsLimit()
    {
        return $this->catItemsLimit;
    }
    /**
     * Set catItemsLimit value
     * @param int $_catItemsLimit the catItemsLimit
     * @return int
     */
    public function setCatItemsLimit($_catItemsLimit)
    {
        return ($this->catItemsLimit = $_catItemsLimit);
    }
    /**
     * Get catOrderFulfillmentTime value
     * @return int|null
     */
    public function getCatOrderFulfillmentTime()
    {
        return $this->catOrderFulfillmentTime;
    }
    /**
     * Set catOrderFulfillmentTime value
     * @param int $_catOrderFulfillmentTime the catOrderFulfillmentTime
     * @return int
     */
    public function setCatOrderFulfillmentTime($_catOrderFulfillmentTime)
    {
        return ($this->catOrderFulfillmentTime = $_catOrderFulfillmentTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoShowCatRequest
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
