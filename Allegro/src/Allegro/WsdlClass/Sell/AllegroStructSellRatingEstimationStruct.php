<?php
/**
 * File for class AllegroStructSellRatingEstimationStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingEstimationStruct originally named SellRatingEstimationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingEstimationStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingGroupId
     * @var int
     */
    public $sellRatingGroupId;
    /**
     * The sellRatingGroupEstimation
     * @var int
     */
    public $sellRatingGroupEstimation;
    /**
     * The sellRatingReasonId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellRatingReasonId;
    /**
     * Constructor method for SellRatingEstimationStruct
     * @see parent::__construct()
     * @param int $_sellRatingGroupId
     * @param int $_sellRatingGroupEstimation
     * @param int $_sellRatingReasonId
     * @return AllegroStructSellRatingEstimationStruct
     */
    public function __construct($_sellRatingGroupId = NULL,$_sellRatingGroupEstimation = NULL,$_sellRatingReasonId = NULL)
    {
        parent::__construct(array('sellRatingGroupId'=>$_sellRatingGroupId,'sellRatingGroupEstimation'=>$_sellRatingGroupEstimation,'sellRatingReasonId'=>$_sellRatingReasonId),false);
    }
    /**
     * Get sellRatingGroupId value
     * @return int|null
     */
    public function getSellRatingGroupId()
    {
        return $this->sellRatingGroupId;
    }
    /**
     * Set sellRatingGroupId value
     * @param int $_sellRatingGroupId the sellRatingGroupId
     * @return int
     */
    public function setSellRatingGroupId($_sellRatingGroupId)
    {
        return ($this->sellRatingGroupId = $_sellRatingGroupId);
    }
    /**
     * Get sellRatingGroupEstimation value
     * @return int|null
     */
    public function getSellRatingGroupEstimation()
    {
        return $this->sellRatingGroupEstimation;
    }
    /**
     * Set sellRatingGroupEstimation value
     * @param int $_sellRatingGroupEstimation the sellRatingGroupEstimation
     * @return int
     */
    public function setSellRatingGroupEstimation($_sellRatingGroupEstimation)
    {
        return ($this->sellRatingGroupEstimation = $_sellRatingGroupEstimation);
    }
    /**
     * Get sellRatingReasonId value
     * @return int|null
     */
    public function getSellRatingReasonId()
    {
        return $this->sellRatingReasonId;
    }
    /**
     * Set sellRatingReasonId value
     * @param int $_sellRatingReasonId the sellRatingReasonId
     * @return int
     */
    public function setSellRatingReasonId($_sellRatingReasonId)
    {
        return ($this->sellRatingReasonId = $_sellRatingReasonId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingEstimationStruct
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
