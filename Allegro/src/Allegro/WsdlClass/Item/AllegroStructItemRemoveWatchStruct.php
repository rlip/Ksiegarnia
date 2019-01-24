<?php
/**
 * File for class AllegroStructItemRemoveWatchStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemRemoveWatchStruct originally named ItemRemoveWatchStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemRemoveWatchStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The result
     * @var int
     */
    public $result;
    /**
     * Constructor method for ItemRemoveWatchStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param int $_result
     * @return AllegroStructItemRemoveWatchStruct
     */
    public function __construct($_itemId = NULL,$_result = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'result'=>$_result),false);
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
     * Get result value
     * @return int|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param int $_result the result
     * @return int
     */
    public function setResult($_result)
    {
        return ($this->result = $_result);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemRemoveWatchStruct
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
