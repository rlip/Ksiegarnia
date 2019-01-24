<?php
/**
 * File for class AllegroStructShowUserFeedbacks
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructShowUserFeedbacks originally named ShowUserFeedbacks
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructShowUserFeedbacks extends AllegroWsdlClass
{
    /**
     * The userFLastWeek
     * @var int
     */
    public $userFLastWeek;
    /**
     * The userFLastMonth
     * @var int
     */
    public $userFLastMonth;
    /**
     * The userFAll
     * @var int
     */
    public $userFAll;
    /**
     * The userFSoldItems
     * @var int
     */
    public $userFSoldItems;
    /**
     * The userFBuyItems
     * @var int
     */
    public $userFBuyItems;
    /**
     * Constructor method for ShowUserFeedbacks
     * @see parent::__construct()
     * @param int $_userFLastWeek
     * @param int $_userFLastMonth
     * @param int $_userFAll
     * @param int $_userFSoldItems
     * @param int $_userFBuyItems
     * @return AllegroStructShowUserFeedbacks
     */
    public function __construct($_userFLastWeek = NULL,$_userFLastMonth = NULL,$_userFAll = NULL,$_userFSoldItems = NULL,$_userFBuyItems = NULL)
    {
        parent::__construct(array('userFLastWeek'=>$_userFLastWeek,'userFLastMonth'=>$_userFLastMonth,'userFAll'=>$_userFAll,'userFSoldItems'=>$_userFSoldItems,'userFBuyItems'=>$_userFBuyItems),false);
    }
    /**
     * Get userFLastWeek value
     * @return int|null
     */
    public function getUserFLastWeek()
    {
        return $this->userFLastWeek;
    }
    /**
     * Set userFLastWeek value
     * @param int $_userFLastWeek the userFLastWeek
     * @return int
     */
    public function setUserFLastWeek($_userFLastWeek)
    {
        return ($this->userFLastWeek = $_userFLastWeek);
    }
    /**
     * Get userFLastMonth value
     * @return int|null
     */
    public function getUserFLastMonth()
    {
        return $this->userFLastMonth;
    }
    /**
     * Set userFLastMonth value
     * @param int $_userFLastMonth the userFLastMonth
     * @return int
     */
    public function setUserFLastMonth($_userFLastMonth)
    {
        return ($this->userFLastMonth = $_userFLastMonth);
    }
    /**
     * Get userFAll value
     * @return int|null
     */
    public function getUserFAll()
    {
        return $this->userFAll;
    }
    /**
     * Set userFAll value
     * @param int $_userFAll the userFAll
     * @return int
     */
    public function setUserFAll($_userFAll)
    {
        return ($this->userFAll = $_userFAll);
    }
    /**
     * Get userFSoldItems value
     * @return int|null
     */
    public function getUserFSoldItems()
    {
        return $this->userFSoldItems;
    }
    /**
     * Set userFSoldItems value
     * @param int $_userFSoldItems the userFSoldItems
     * @return int
     */
    public function setUserFSoldItems($_userFSoldItems)
    {
        return ($this->userFSoldItems = $_userFSoldItems);
    }
    /**
     * Get userFBuyItems value
     * @return int|null
     */
    public function getUserFBuyItems()
    {
        return $this->userFBuyItems;
    }
    /**
     * Set userFBuyItems value
     * @param int $_userFBuyItems the userFBuyItems
     * @return int
     */
    public function setUserFBuyItems($_userFBuyItems)
    {
        return ($this->userFBuyItems = $_userFBuyItems);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructShowUserFeedbacks
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
