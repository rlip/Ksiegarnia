<?php
/**
 * File for class AllegroStructPackageInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPackageInfoStruct originally named PackageInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPackageInfoStruct extends AllegroWsdlClass
{
    /**
     * The operatorId
     * @var int
     */
    public $operatorId;
    /**
     * The packageId
     * @var string
     */
    public $packageId;
    /**
     * Constructor method for PackageInfoStruct
     * @see parent::__construct()
     * @param int $_operatorId
     * @param string $_packageId
     * @return AllegroStructPackageInfoStruct
     */
    public function __construct($_operatorId = NULL,$_packageId = NULL)
    {
        parent::__construct(array('operatorId'=>$_operatorId,'packageId'=>$_packageId),false);
    }
    /**
     * Get operatorId value
     * @return int|null
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }
    /**
     * Set operatorId value
     * @param int $_operatorId the operatorId
     * @return int
     */
    public function setOperatorId($_operatorId)
    {
        return ($this->operatorId = $_operatorId);
    }
    /**
     * Get packageId value
     * @return string|null
     */
    public function getPackageId()
    {
        return $this->packageId;
    }
    /**
     * Set packageId value
     * @param string $_packageId the packageId
     * @return string
     */
    public function setPackageId($_packageId)
    {
        return ($this->packageId = $_packageId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPackageInfoStruct
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
