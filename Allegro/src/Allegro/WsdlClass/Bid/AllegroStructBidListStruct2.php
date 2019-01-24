<?php
/**
 * File for class AllegroStructBidListStruct2
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructBidListStruct2 originally named BidListStruct2
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructBidListStruct2 extends AllegroWsdlClass
{
    /**
     * The bidsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $bidsArray;
    /**
     * Constructor method for BidListStruct2
     * @see parent::__construct()
     * @param AllegroStructArrayOfString $_bidsArray
     * @return AllegroStructBidListStruct2
     */
    public function __construct($_bidsArray = NULL)
    {
        parent::__construct(array('bidsArray'=>($_bidsArray instanceof AllegroStructArrayOfString)?$_bidsArray:new AllegroStructArrayOfString($_bidsArray)),false);
    }
    /**
     * Get bidsArray value
     * @return AllegroStructArrayOfString|null
     */
    public function getBidsArray()
    {
        return $this->bidsArray;
    }
    /**
     * Set bidsArray value
     * @param AllegroStructArrayOfString $_bidsArray the bidsArray
     * @return AllegroStructArrayOfString
     */
    public function setBidsArray($_bidsArray)
    {
        return ($this->bidsArray = $_bidsArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructBidListStruct2
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
