<?php
/**
 * File for class AllegroStructDoShowUserPageResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoShowUserPageResponse originally named doShowUserPageResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoShowUserPageResponse extends AllegroWsdlClass
{
    /**
     * The userPageContent
     * @var string
     */
    public $userPageContent;
    /**
     * The userPagePharmacyPermit
     * @var string
     */
    public $userPagePharmacyPermit;
    /**
     * The userPageAlcoholPermit
     * @var string
     */
    public $userPageAlcoholPermit;
    /**
     * Constructor method for doShowUserPageResponse
     * @see parent::__construct()
     * @param string $_userPageContent
     * @param string $_userPagePharmacyPermit
     * @param string $_userPageAlcoholPermit
     * @return AllegroStructDoShowUserPageResponse
     */
    public function __construct($_userPageContent = NULL,$_userPagePharmacyPermit = NULL,$_userPageAlcoholPermit = NULL)
    {
        parent::__construct(array('userPageContent'=>$_userPageContent,'userPagePharmacyPermit'=>$_userPagePharmacyPermit,'userPageAlcoholPermit'=>$_userPageAlcoholPermit),false);
    }
    /**
     * Get userPageContent value
     * @return string|null
     */
    public function getUserPageContent()
    {
        return $this->userPageContent;
    }
    /**
     * Set userPageContent value
     * @param string $_userPageContent the userPageContent
     * @return string
     */
    public function setUserPageContent($_userPageContent)
    {
        return ($this->userPageContent = $_userPageContent);
    }
    /**
     * Get userPagePharmacyPermit value
     * @return string|null
     */
    public function getUserPagePharmacyPermit()
    {
        return $this->userPagePharmacyPermit;
    }
    /**
     * Set userPagePharmacyPermit value
     * @param string $_userPagePharmacyPermit the userPagePharmacyPermit
     * @return string
     */
    public function setUserPagePharmacyPermit($_userPagePharmacyPermit)
    {
        return ($this->userPagePharmacyPermit = $_userPagePharmacyPermit);
    }
    /**
     * Get userPageAlcoholPermit value
     * @return string|null
     */
    public function getUserPageAlcoholPermit()
    {
        return $this->userPageAlcoholPermit;
    }
    /**
     * Set userPageAlcoholPermit value
     * @param string $_userPageAlcoholPermit the userPageAlcoholPermit
     * @return string
     */
    public function setUserPageAlcoholPermit($_userPageAlcoholPermit)
    {
        return ($this->userPageAlcoholPermit = $_userPageAlcoholPermit);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoShowUserPageResponse
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
