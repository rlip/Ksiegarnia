<?php
/**
 * File for class AllegroStructDoAddToBlackListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddToBlackListResponse originally named doAddToBlackListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddToBlackListResponse extends AllegroWsdlClass
{
    /**
     * The userBlackListResultsArr
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserblacklistaddresultstruct
     */
    public $userBlackListResultsArr;
    /**
     * Constructor method for doAddToBlackListResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUserblacklistaddresultstruct $_userBlackListResultsArr
     * @return AllegroStructDoAddToBlackListResponse
     */
    public function __construct($_userBlackListResultsArr = NULL)
    {
        parent::__construct(array('userBlackListResultsArr'=>($_userBlackListResultsArr instanceof AllegroStructArrayOfUserblacklistaddresultstruct)?$_userBlackListResultsArr:new AllegroStructArrayOfUserblacklistaddresultstruct($_userBlackListResultsArr)),false);
    }
    /**
     * Get userBlackListResultsArr value
     * @return AllegroStructArrayOfUserblacklistaddresultstruct|null
     */
    public function getUserBlackListResultsArr()
    {
        return $this->userBlackListResultsArr;
    }
    /**
     * Set userBlackListResultsArr value
     * @param AllegroStructArrayOfUserblacklistaddresultstruct $_userBlackListResultsArr the userBlackListResultsArr
     * @return AllegroStructArrayOfUserblacklistaddresultstruct
     */
    public function setUserBlackListResultsArr($_userBlackListResultsArr)
    {
        return ($this->userBlackListResultsArr = $_userBlackListResultsArr);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddToBlackListResponse
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
