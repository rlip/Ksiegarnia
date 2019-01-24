<?php
/**
 * File for class AllegroStructDoRemoveItemTemplatesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRemoveItemTemplatesResponse originally named doRemoveItemTemplatesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRemoveItemTemplatesResponse extends AllegroWsdlClass
{
    /**
     * The removedItemTemplates
     * @var AllegroStructRemovedItemTemplatesStruct
     */
    public $removedItemTemplates;
    /**
     * Constructor method for doRemoveItemTemplatesResponse
     * @see parent::__construct()
     * @param AllegroStructRemovedItemTemplatesStruct $_removedItemTemplates
     * @return AllegroStructDoRemoveItemTemplatesResponse
     */
    public function __construct($_removedItemTemplates = NULL)
    {
        parent::__construct(array('removedItemTemplates'=>$_removedItemTemplates),false);
    }
    /**
     * Get removedItemTemplates value
     * @return AllegroStructRemovedItemTemplatesStruct|null
     */
    public function getRemovedItemTemplates()
    {
        return $this->removedItemTemplates;
    }
    /**
     * Set removedItemTemplates value
     * @param AllegroStructRemovedItemTemplatesStruct $_removedItemTemplates the removedItemTemplates
     * @return AllegroStructRemovedItemTemplatesStruct
     */
    public function setRemovedItemTemplates($_removedItemTemplates)
    {
        return ($this->removedItemTemplates = $_removedItemTemplates);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRemoveItemTemplatesResponse
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
