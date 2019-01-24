<?php
/**
 * File for class AllegroStructBillingDataType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructBillingDataType originally named BillingDataType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructBillingDataType extends AllegroWsdlClass
{
    /**
     * The billingId
     * @var int
     */
    public $billingId;
    /**
     * The billingType
     * @var string
     */
    public $billingType;
    /**
     * The billingFixperc
     * @var string
     */
    public $billingFixperc;
    /**
     * The billingName
     * @var string
     */
    public $billingName;
    /**
     * The billingRangeFrom
     * @var string
     */
    public $billingRangeFrom;
    /**
     * The billingRangeTo
     * @var string
     */
    public $billingRangeTo;
    /**
     * The billingCat
     * @var string
     */
    public $billingCat;
    /**
     * The billingRate
     * @var string
     */
    public $billingRate;
    /**
     * The billingAuctionType
     * @var int
     */
    public $billingAuctionType;
    /**
     * Constructor method for BillingDataType
     * @see parent::__construct()
     * @param int $_billingId
     * @param string $_billingType
     * @param string $_billingFixperc
     * @param string $_billingName
     * @param string $_billingRangeFrom
     * @param string $_billingRangeTo
     * @param string $_billingCat
     * @param string $_billingRate
     * @param int $_billingAuctionType
     * @return AllegroStructBillingDataType
     */
    public function __construct($_billingId = NULL,$_billingType = NULL,$_billingFixperc = NULL,$_billingName = NULL,$_billingRangeFrom = NULL,$_billingRangeTo = NULL,$_billingCat = NULL,$_billingRate = NULL,$_billingAuctionType = NULL)
    {
        parent::__construct(array('billingId'=>$_billingId,'billingType'=>$_billingType,'billingFixperc'=>$_billingFixperc,'billingName'=>$_billingName,'billingRangeFrom'=>$_billingRangeFrom,'billingRangeTo'=>$_billingRangeTo,'billingCat'=>$_billingCat,'billingRate'=>$_billingRate,'billingAuctionType'=>$_billingAuctionType),false);
    }
    /**
     * Get billingId value
     * @return int|null
     */
    public function getBillingId()
    {
        return $this->billingId;
    }
    /**
     * Set billingId value
     * @param int $_billingId the billingId
     * @return int
     */
    public function setBillingId($_billingId)
    {
        return ($this->billingId = $_billingId);
    }
    /**
     * Get billingType value
     * @return string|null
     */
    public function getBillingType()
    {
        return $this->billingType;
    }
    /**
     * Set billingType value
     * @param string $_billingType the billingType
     * @return string
     */
    public function setBillingType($_billingType)
    {
        return ($this->billingType = $_billingType);
    }
    /**
     * Get billingFixperc value
     * @return string|null
     */
    public function getBillingFixperc()
    {
        return $this->billingFixperc;
    }
    /**
     * Set billingFixperc value
     * @param string $_billingFixperc the billingFixperc
     * @return string
     */
    public function setBillingFixperc($_billingFixperc)
    {
        return ($this->billingFixperc = $_billingFixperc);
    }
    /**
     * Get billingName value
     * @return string|null
     */
    public function getBillingName()
    {
        return $this->billingName;
    }
    /**
     * Set billingName value
     * @param string $_billingName the billingName
     * @return string
     */
    public function setBillingName($_billingName)
    {
        return ($this->billingName = $_billingName);
    }
    /**
     * Get billingRangeFrom value
     * @return string|null
     */
    public function getBillingRangeFrom()
    {
        return $this->billingRangeFrom;
    }
    /**
     * Set billingRangeFrom value
     * @param string $_billingRangeFrom the billingRangeFrom
     * @return string
     */
    public function setBillingRangeFrom($_billingRangeFrom)
    {
        return ($this->billingRangeFrom = $_billingRangeFrom);
    }
    /**
     * Get billingRangeTo value
     * @return string|null
     */
    public function getBillingRangeTo()
    {
        return $this->billingRangeTo;
    }
    /**
     * Set billingRangeTo value
     * @param string $_billingRangeTo the billingRangeTo
     * @return string
     */
    public function setBillingRangeTo($_billingRangeTo)
    {
        return ($this->billingRangeTo = $_billingRangeTo);
    }
    /**
     * Get billingCat value
     * @return string|null
     */
    public function getBillingCat()
    {
        return $this->billingCat;
    }
    /**
     * Set billingCat value
     * @param string $_billingCat the billingCat
     * @return string
     */
    public function setBillingCat($_billingCat)
    {
        return ($this->billingCat = $_billingCat);
    }
    /**
     * Get billingRate value
     * @return string|null
     */
    public function getBillingRate()
    {
        return $this->billingRate;
    }
    /**
     * Set billingRate value
     * @param string $_billingRate the billingRate
     * @return string
     */
    public function setBillingRate($_billingRate)
    {
        return ($this->billingRate = $_billingRate);
    }
    /**
     * Get billingAuctionType value
     * @return int|null
     */
    public function getBillingAuctionType()
    {
        return $this->billingAuctionType;
    }
    /**
     * Set billingAuctionType value
     * @param int $_billingAuctionType the billingAuctionType
     * @return int
     */
    public function setBillingAuctionType($_billingAuctionType)
    {
        return ($this->billingAuctionType = $_billingAuctionType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructBillingDataType
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
