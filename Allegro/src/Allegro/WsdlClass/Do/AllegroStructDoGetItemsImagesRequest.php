<?php
/**
 * File for class AllegroStructDoGetItemsImagesRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemsImagesRequest originally named DoGetItemsImagesRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemsImagesRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemgetimage
     */
    public $itemsArray;
    /**
     * The imageType
     * @var int
     */
    public $imageType;
    /**
     * Constructor method for DoGetItemsImagesRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfItemgetimage $_itemsArray
     * @param int $_imageType
     * @return AllegroStructDoGetItemsImagesRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemsArray = NULL,$_imageType = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemsArray'=>($_itemsArray instanceof AllegroStructArrayOfItemgetimage)?$_itemsArray:new AllegroStructArrayOfItemgetimage($_itemsArray),'imageType'=>$_imageType),false);
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
     * Get itemsArray value
     * @return AllegroStructArrayOfItemgetimage|null
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }
    /**
     * Set itemsArray value
     * @param AllegroStructArrayOfItemgetimage $_itemsArray the itemsArray
     * @return AllegroStructArrayOfItemgetimage
     */
    public function setItemsArray($_itemsArray)
    {
        return ($this->itemsArray = $_itemsArray);
    }
    /**
     * Get imageType value
     * @return int|null
     */
    public function getImageType()
    {
        return $this->imageType;
    }
    /**
     * Set imageType value
     * @param int $_imageType the imageType
     * @return int
     */
    public function setImageType($_imageType)
    {
        return ($this->imageType = $_imageType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemsImagesRequest
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
