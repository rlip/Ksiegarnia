<?php
/**
 * File for class AllegroStructDoGetMySellRatingResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMySellRatingResponse originally named doGetMySellRatingResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMySellRatingResponse extends AllegroWsdlClass
{
    /**
     * The sellRatingTotalCount
     * @var int
     */
    public $sellRatingTotalCount;
    /**
     * The sellRatingAverage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingaveragestruct
     */
    public $sellRatingAverage;
    /**
     * The sellRatingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingdetailstruct
     */
    public $sellRatingDetails;
    /**
     * The sellRatingStatsPerMonth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingaveragepermonthstruct
     */
    public $sellRatingStatsPerMonth;
    /**
     * Constructor method for doGetMySellRatingResponse
     * @see parent::__construct()
     * @param int $_sellRatingTotalCount
     * @param AllegroStructArrayOfSellratingaveragestruct $_sellRatingAverage
     * @param AllegroStructArrayOfSellratingdetailstruct $_sellRatingDetails
     * @param AllegroStructArrayOfSellratingaveragepermonthstruct $_sellRatingStatsPerMonth
     * @return AllegroStructDoGetMySellRatingResponse
     */
    public function __construct($_sellRatingTotalCount = NULL,$_sellRatingAverage = NULL,$_sellRatingDetails = NULL,$_sellRatingStatsPerMonth = NULL)
    {
        parent::__construct(array('sellRatingTotalCount'=>$_sellRatingTotalCount,'sellRatingAverage'=>($_sellRatingAverage instanceof AllegroStructArrayOfSellratingaveragestruct)?$_sellRatingAverage:new AllegroStructArrayOfSellratingaveragestruct($_sellRatingAverage),'sellRatingDetails'=>($_sellRatingDetails instanceof AllegroStructArrayOfSellratingdetailstruct)?$_sellRatingDetails:new AllegroStructArrayOfSellratingdetailstruct($_sellRatingDetails),'sellRatingStatsPerMonth'=>($_sellRatingStatsPerMonth instanceof AllegroStructArrayOfSellratingaveragepermonthstruct)?$_sellRatingStatsPerMonth:new AllegroStructArrayOfSellratingaveragepermonthstruct($_sellRatingStatsPerMonth)),false);
    }
    /**
     * Get sellRatingTotalCount value
     * @return int|null
     */
    public function getSellRatingTotalCount()
    {
        return $this->sellRatingTotalCount;
    }
    /**
     * Set sellRatingTotalCount value
     * @param int $_sellRatingTotalCount the sellRatingTotalCount
     * @return int
     */
    public function setSellRatingTotalCount($_sellRatingTotalCount)
    {
        return ($this->sellRatingTotalCount = $_sellRatingTotalCount);
    }
    /**
     * Get sellRatingAverage value
     * @return AllegroStructArrayOfSellratingaveragestruct|null
     */
    public function getSellRatingAverage()
    {
        return $this->sellRatingAverage;
    }
    /**
     * Set sellRatingAverage value
     * @param AllegroStructArrayOfSellratingaveragestruct $_sellRatingAverage the sellRatingAverage
     * @return AllegroStructArrayOfSellratingaveragestruct
     */
    public function setSellRatingAverage($_sellRatingAverage)
    {
        return ($this->sellRatingAverage = $_sellRatingAverage);
    }
    /**
     * Get sellRatingDetails value
     * @return AllegroStructArrayOfSellratingdetailstruct|null
     */
    public function getSellRatingDetails()
    {
        return $this->sellRatingDetails;
    }
    /**
     * Set sellRatingDetails value
     * @param AllegroStructArrayOfSellratingdetailstruct $_sellRatingDetails the sellRatingDetails
     * @return AllegroStructArrayOfSellratingdetailstruct
     */
    public function setSellRatingDetails($_sellRatingDetails)
    {
        return ($this->sellRatingDetails = $_sellRatingDetails);
    }
    /**
     * Get sellRatingStatsPerMonth value
     * @return AllegroStructArrayOfSellratingaveragepermonthstruct|null
     */
    public function getSellRatingStatsPerMonth()
    {
        return $this->sellRatingStatsPerMonth;
    }
    /**
     * Set sellRatingStatsPerMonth value
     * @param AllegroStructArrayOfSellratingaveragepermonthstruct $_sellRatingStatsPerMonth the sellRatingStatsPerMonth
     * @return AllegroStructArrayOfSellratingaveragepermonthstruct
     */
    public function setSellRatingStatsPerMonth($_sellRatingStatsPerMonth)
    {
        return ($this->sellRatingStatsPerMonth = $_sellRatingStatsPerMonth);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMySellRatingResponse
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
