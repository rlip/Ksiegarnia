<?php
/**
 * File for class AllegroStructDoGetItemsInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemsInfoResponse originally named doGetItemsInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemsInfoResponse extends AllegroWsdlClass
{
    /**
     * The arrayItemListInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfIteminfostruct
     */
    public $arrayItemListInfo;
    /**
     * The arrayItemsNotFound
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $arrayItemsNotFound;
    /**
     * The arrayItemsAdminKilled
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $arrayItemsAdminKilled;
    /**
     * Constructor method for doGetItemsInfoResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfIteminfostruct $_arrayItemListInfo
     * @param AllegroStructArrayOfLong $_arrayItemsNotFound
     * @param AllegroStructArrayOfLong $_arrayItemsAdminKilled
     * @return AllegroStructDoGetItemsInfoResponse
     */
    public function __construct($_arrayItemListInfo = NULL,$_arrayItemsNotFound = NULL,$_arrayItemsAdminKilled = NULL)
    {
        parent::__construct(array('arrayItemListInfo'=>($_arrayItemListInfo instanceof AllegroStructArrayOfIteminfostruct)?$_arrayItemListInfo:new AllegroStructArrayOfIteminfostruct($_arrayItemListInfo),'arrayItemsNotFound'=>($_arrayItemsNotFound instanceof AllegroStructArrayOfLong)?$_arrayItemsNotFound:new AllegroStructArrayOfLong($_arrayItemsNotFound),'arrayItemsAdminKilled'=>($_arrayItemsAdminKilled instanceof AllegroStructArrayOfLong)?$_arrayItemsAdminKilled:new AllegroStructArrayOfLong($_arrayItemsAdminKilled)),false);
    }
    /**
     * Get arrayItemListInfo value
     * @return AllegroStructArrayOfIteminfostruct|null
     */
    public function getArrayItemListInfo()
    {
        return $this->arrayItemListInfo;
    }
    /**
     * Set arrayItemListInfo value
     * @param AllegroStructArrayOfIteminfostruct $_arrayItemListInfo the arrayItemListInfo
     * @return AllegroStructArrayOfIteminfostruct
     */
    public function setArrayItemListInfo($_arrayItemListInfo)
    {
        return ($this->arrayItemListInfo = $_arrayItemListInfo);
    }
    /**
     * Get arrayItemsNotFound value
     * @return AllegroStructArrayOfLong|null
     */
    public function getArrayItemsNotFound()
    {
        return $this->arrayItemsNotFound;
    }
    /**
     * Set arrayItemsNotFound value
     * @param AllegroStructArrayOfLong $_arrayItemsNotFound the arrayItemsNotFound
     * @return AllegroStructArrayOfLong
     */
    public function setArrayItemsNotFound($_arrayItemsNotFound)
    {
        return ($this->arrayItemsNotFound = $_arrayItemsNotFound);
    }
    /**
     * Get arrayItemsAdminKilled value
     * @return AllegroStructArrayOfLong|null
     */
    public function getArrayItemsAdminKilled()
    {
        return $this->arrayItemsAdminKilled;
    }
    /**
     * Set arrayItemsAdminKilled value
     * @param AllegroStructArrayOfLong $_arrayItemsAdminKilled the arrayItemsAdminKilled
     * @return AllegroStructArrayOfLong
     */
    public function setArrayItemsAdminKilled($_arrayItemsAdminKilled)
    {
        return ($this->arrayItemsAdminKilled = $_arrayItemsAdminKilled);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemsInfoResponse
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
