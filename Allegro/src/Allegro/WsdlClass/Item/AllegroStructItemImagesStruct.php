<?php
/**
 * File for class AllegroStructItemImagesStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemImagesStruct originally named ItemImagesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemImagesStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemImages
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemimagelist
     */
    public $itemImages;
    /**
     * Constructor method for ItemImagesStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param AllegroStructArrayOfItemimagelist $_itemImages
     * @return AllegroStructItemImagesStruct
     */
    public function __construct($_itemId = NULL,$_itemImages = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemImages'=>($_itemImages instanceof AllegroStructArrayOfItemimagelist)?$_itemImages:new AllegroStructArrayOfItemimagelist($_itemImages)),false);
    }
    /**
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
    }
    /**
     * Get itemImages value
     * @return AllegroStructArrayOfItemimagelist|null
     */
    public function getItemImages()
    {
        return $this->itemImages;
    }
    /**
     * Set itemImages value
     * @param AllegroStructArrayOfItemimagelist $_itemImages the itemImages
     * @return AllegroStructArrayOfItemimagelist
     */
    public function setItemImages($_itemImages)
    {
        return ($this->itemImages = $_itemImages);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemImagesStruct
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
