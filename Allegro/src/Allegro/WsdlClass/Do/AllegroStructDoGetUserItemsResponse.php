<?php
/**
 * File for class AllegroStructDoGetUserItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetUserItemsResponse originally named doGetUserItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetUserItemsResponse extends AllegroWsdlClass
{
    /**
     * The userItemList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUseritemlist
     */
    public $userItemList;
    /**
     * The userItemCount
     * @var int
     */
    public $userItemCount;
    /**
     * Constructor method for doGetUserItemsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUseritemlist $_userItemList
     * @param int $_userItemCount
     * @return AllegroStructDoGetUserItemsResponse
     */
    public function __construct($_userItemList = NULL,$_userItemCount = NULL)
    {
        parent::__construct(array('userItemList'=>($_userItemList instanceof AllegroStructArrayOfUseritemlist)?$_userItemList:new AllegroStructArrayOfUseritemlist($_userItemList),'userItemCount'=>$_userItemCount),false);
    }
    /**
     * Get userItemList value
     * @return AllegroStructArrayOfUseritemlist|null
     */
    public function getUserItemList()
    {
        return $this->userItemList;
    }
    /**
     * Set userItemList value
     * @param AllegroStructArrayOfUseritemlist $_userItemList the userItemList
     * @return AllegroStructArrayOfUseritemlist
     */
    public function setUserItemList($_userItemList)
    {
        return ($this->userItemList = $_userItemList);
    }
    /**
     * Get userItemCount value
     * @return int|null
     */
    public function getUserItemCount()
    {
        return $this->userItemCount;
    }
    /**
     * Set userItemCount value
     * @param int $_userItemCount the userItemCount
     * @return int
     */
    public function setUserItemCount($_userItemCount)
    {
        return ($this->userItemCount = $_userItemCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetUserItemsResponse
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
