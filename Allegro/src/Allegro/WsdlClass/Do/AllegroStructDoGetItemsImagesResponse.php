<?php
/**
 * File for class AllegroStructDoGetItemsImagesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemsImagesResponse originally named doGetItemsImagesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemsImagesResponse extends AllegroWsdlClass
{
    /**
     * The get_items_images_result
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemimagesstruct
     */
    public $get_items_images_result;
    /**
     * Constructor method for doGetItemsImagesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfItemimagesstruct $_get_items_images_result
     * @return AllegroStructDoGetItemsImagesResponse
     */
    public function __construct($_get_items_images_result = NULL)
    {
        parent::__construct(array('get_items_images_result'=>($_get_items_images_result instanceof AllegroStructArrayOfItemimagesstruct)?$_get_items_images_result:new AllegroStructArrayOfItemimagesstruct($_get_items_images_result)),false);
    }
    /**
     * Get get_items_images_result value
     * @return AllegroStructArrayOfItemimagesstruct|null
     */
    public function getGet_items_images_result()
    {
        return $this->get_items_images_result;
    }
    /**
     * Set get_items_images_result value
     * @param AllegroStructArrayOfItemimagesstruct $_get_items_images_result the get_items_images_result
     * @return AllegroStructArrayOfItemimagesstruct
     */
    public function setGet_items_images_result($_get_items_images_result)
    {
        return ($this->get_items_images_result = $_get_items_images_result);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemsImagesResponse
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
