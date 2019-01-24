<?php
/**
 * File for class AllegroStructDoGetArchiveRefundsListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetArchiveRefundsListResponse originally named doGetArchiveRefundsListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetArchiveRefundsListResponse extends AllegroWsdlClass
{
    /**
     * The refundsCount
     * @var int
     */
    public $refundsCount;
    /**
     * The refundsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfArchiverefundslisttypestruct
     */
    public $refundsList;
    /**
     * Constructor method for doGetArchiveRefundsListResponse
     * @see parent::__construct()
     * @param int $_refundsCount
     * @param AllegroStructArrayOfArchiverefundslisttypestruct $_refundsList
     * @return AllegroStructDoGetArchiveRefundsListResponse
     */
    public function __construct($_refundsCount = NULL,$_refundsList = NULL)
    {
        parent::__construct(array('refundsCount'=>$_refundsCount,'refundsList'=>($_refundsList instanceof AllegroStructArrayOfArchiverefundslisttypestruct)?$_refundsList:new AllegroStructArrayOfArchiverefundslisttypestruct($_refundsList)),false);
    }
    /**
     * Get refundsCount value
     * @return int|null
     */
    public function getRefundsCount()
    {
        return $this->refundsCount;
    }
    /**
     * Set refundsCount value
     * @param int $_refundsCount the refundsCount
     * @return int
     */
    public function setRefundsCount($_refundsCount)
    {
        return ($this->refundsCount = $_refundsCount);
    }
    /**
     * Get refundsList value
     * @return AllegroStructArrayOfArchiverefundslisttypestruct|null
     */
    public function getRefundsList()
    {
        return $this->refundsList;
    }
    /**
     * Set refundsList value
     * @param AllegroStructArrayOfArchiverefundslisttypestruct $_refundsList the refundsList
     * @return AllegroStructArrayOfArchiverefundslisttypestruct
     */
    public function setRefundsList($_refundsList)
    {
        return ($this->refundsList = $_refundsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetArchiveRefundsListResponse
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
