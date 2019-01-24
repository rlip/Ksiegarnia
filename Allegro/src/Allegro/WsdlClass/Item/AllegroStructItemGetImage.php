<?php
/**
 * File for class AllegroStructItemGetImage
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemGetImage originally named ItemGetImage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemGetImage extends AllegroWsdlClass
{
    /**
     * The itId
     * @var long
     */
    public $itId;
    /**
     * The itSellerId
     * @var long
     */
    public $itSellerId;
    /**
     * The itFotoCount
     * @var int
     */
    public $itFotoCount;
    /**
     * Constructor method for ItemGetImage
     * @see parent::__construct()
     * @param long $_itId
     * @param long $_itSellerId
     * @param int $_itFotoCount
     * @return AllegroStructItemGetImage
     */
    public function __construct($_itId = NULL,$_itSellerId = NULL,$_itFotoCount = NULL)
    {
        parent::__construct(array('itId'=>$_itId,'itSellerId'=>$_itSellerId,'itFotoCount'=>$_itFotoCount),false);
    }
    /**
     * Get itId value
     * @return long|null
     */
    public function getItId()
    {
        return $this->itId;
    }
    /**
     * Set itId value
     * @param long $_itId the itId
     * @return long
     */
    public function setItId($_itId)
    {
        return ($this->itId = $_itId);
    }
    /**
     * Get itSellerId value
     * @return long|null
     */
    public function getItSellerId()
    {
        return $this->itSellerId;
    }
    /**
     * Set itSellerId value
     * @param long $_itSellerId the itSellerId
     * @return long
     */
    public function setItSellerId($_itSellerId)
    {
        return ($this->itSellerId = $_itSellerId);
    }
    /**
     * Get itFotoCount value
     * @return int|null
     */
    public function getItFotoCount()
    {
        return $this->itFotoCount;
    }
    /**
     * Set itFotoCount value
     * @param int $_itFotoCount the itFotoCount
     * @return int
     */
    public function setItFotoCount($_itFotoCount)
    {
        return ($this->itFotoCount = $_itFotoCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemGetImage
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
