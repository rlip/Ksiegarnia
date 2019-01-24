<?php
/**
 * File for class AllegroStructItemPostBuyDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemPostBuyDataStruct originally named ItemPostBuyDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemPostBuyDataStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The usersPostBuyData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserpostbuydatastruct
     */
    public $usersPostBuyData;
    /**
     * Constructor method for ItemPostBuyDataStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param AllegroStructArrayOfUserpostbuydatastruct $_usersPostBuyData
     * @return AllegroStructItemPostBuyDataStruct
     */
    public function __construct($_itemId = NULL,$_usersPostBuyData = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'usersPostBuyData'=>($_usersPostBuyData instanceof AllegroStructArrayOfUserpostbuydatastruct)?$_usersPostBuyData:new AllegroStructArrayOfUserpostbuydatastruct($_usersPostBuyData)),false);
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
     * Get usersPostBuyData value
     * @return AllegroStructArrayOfUserpostbuydatastruct|null
     */
    public function getUsersPostBuyData()
    {
        return $this->usersPostBuyData;
    }
    /**
     * Set usersPostBuyData value
     * @param AllegroStructArrayOfUserpostbuydatastruct $_usersPostBuyData the usersPostBuyData
     * @return AllegroStructArrayOfUserpostbuydatastruct
     */
    public function setUsersPostBuyData($_usersPostBuyData)
    {
        return ($this->usersPostBuyData = $_usersPostBuyData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemPostBuyDataStruct
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
