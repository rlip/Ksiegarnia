<?php
/**
 * File for class AllegroStructDoFinishItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFinishItemsResponse originally named doFinishItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFinishItemsResponse extends AllegroWsdlClass
{
    /**
     * The finishItemsSucceed
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $finishItemsSucceed;
    /**
     * The finishItemsFailed
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFinishfailurestruct
     */
    public $finishItemsFailed;
    /**
     * Constructor method for doFinishItemsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfLong $_finishItemsSucceed
     * @param AllegroStructArrayOfFinishfailurestruct $_finishItemsFailed
     * @return AllegroStructDoFinishItemsResponse
     */
    public function __construct($_finishItemsSucceed = NULL,$_finishItemsFailed = NULL)
    {
        parent::__construct(array('finishItemsSucceed'=>($_finishItemsSucceed instanceof AllegroStructArrayOfLong)?$_finishItemsSucceed:new AllegroStructArrayOfLong($_finishItemsSucceed),'finishItemsFailed'=>($_finishItemsFailed instanceof AllegroStructArrayOfFinishfailurestruct)?$_finishItemsFailed:new AllegroStructArrayOfFinishfailurestruct($_finishItemsFailed)),false);
    }
    /**
     * Get finishItemsSucceed value
     * @return AllegroStructArrayOfLong|null
     */
    public function getFinishItemsSucceed()
    {
        return $this->finishItemsSucceed;
    }
    /**
     * Set finishItemsSucceed value
     * @param AllegroStructArrayOfLong $_finishItemsSucceed the finishItemsSucceed
     * @return AllegroStructArrayOfLong
     */
    public function setFinishItemsSucceed($_finishItemsSucceed)
    {
        return ($this->finishItemsSucceed = $_finishItemsSucceed);
    }
    /**
     * Get finishItemsFailed value
     * @return AllegroStructArrayOfFinishfailurestruct|null
     */
    public function getFinishItemsFailed()
    {
        return $this->finishItemsFailed;
    }
    /**
     * Set finishItemsFailed value
     * @param AllegroStructArrayOfFinishfailurestruct $_finishItemsFailed the finishItemsFailed
     * @return AllegroStructArrayOfFinishfailurestruct
     */
    public function setFinishItemsFailed($_finishItemsFailed)
    {
        return ($this->finishItemsFailed = $_finishItemsFailed);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFinishItemsResponse
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
