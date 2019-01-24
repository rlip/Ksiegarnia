<?php
/**
 * File for class AllegroStructPostBuyFormPackageInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormPackageInfoStruct originally named PostBuyFormPackageInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormPackageInfoStruct extends AllegroWsdlClass
{
    /**
     * The packageIdsAdded
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $packageIdsAdded;
    /**
     * The packageIdsNotAddedIncorrectOperatorId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $packageIdsNotAddedIncorrectOperatorId;
    /**
     * The packageIdsNotAddedIncorrectPackageId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $packageIdsNotAddedIncorrectPackageId;
    /**
     * Constructor method for PostBuyFormPackageInfoStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfString $_packageIdsAdded
     * @param AllegroStructArrayOfString $_packageIdsNotAddedIncorrectOperatorId
     * @param AllegroStructArrayOfString $_packageIdsNotAddedIncorrectPackageId
     * @return AllegroStructPostBuyFormPackageInfoStruct
     */
    public function __construct($_packageIdsAdded = NULL,$_packageIdsNotAddedIncorrectOperatorId = NULL,$_packageIdsNotAddedIncorrectPackageId = NULL)
    {
        parent::__construct(array('packageIdsAdded'=>($_packageIdsAdded instanceof AllegroStructArrayOfString)?$_packageIdsAdded:new AllegroStructArrayOfString($_packageIdsAdded),'packageIdsNotAddedIncorrectOperatorId'=>($_packageIdsNotAddedIncorrectOperatorId instanceof AllegroStructArrayOfString)?$_packageIdsNotAddedIncorrectOperatorId:new AllegroStructArrayOfString($_packageIdsNotAddedIncorrectOperatorId),'packageIdsNotAddedIncorrectPackageId'=>($_packageIdsNotAddedIncorrectPackageId instanceof AllegroStructArrayOfString)?$_packageIdsNotAddedIncorrectPackageId:new AllegroStructArrayOfString($_packageIdsNotAddedIncorrectPackageId)),false);
    }
    /**
     * Get packageIdsAdded value
     * @return AllegroStructArrayOfString|null
     */
    public function getPackageIdsAdded()
    {
        return $this->packageIdsAdded;
    }
    /**
     * Set packageIdsAdded value
     * @param AllegroStructArrayOfString $_packageIdsAdded the packageIdsAdded
     * @return AllegroStructArrayOfString
     */
    public function setPackageIdsAdded($_packageIdsAdded)
    {
        return ($this->packageIdsAdded = $_packageIdsAdded);
    }
    /**
     * Get packageIdsNotAddedIncorrectOperatorId value
     * @return AllegroStructArrayOfString|null
     */
    public function getPackageIdsNotAddedIncorrectOperatorId()
    {
        return $this->packageIdsNotAddedIncorrectOperatorId;
    }
    /**
     * Set packageIdsNotAddedIncorrectOperatorId value
     * @param AllegroStructArrayOfString $_packageIdsNotAddedIncorrectOperatorId the packageIdsNotAddedIncorrectOperatorId
     * @return AllegroStructArrayOfString
     */
    public function setPackageIdsNotAddedIncorrectOperatorId($_packageIdsNotAddedIncorrectOperatorId)
    {
        return ($this->packageIdsNotAddedIncorrectOperatorId = $_packageIdsNotAddedIncorrectOperatorId);
    }
    /**
     * Get packageIdsNotAddedIncorrectPackageId value
     * @return AllegroStructArrayOfString|null
     */
    public function getPackageIdsNotAddedIncorrectPackageId()
    {
        return $this->packageIdsNotAddedIncorrectPackageId;
    }
    /**
     * Set packageIdsNotAddedIncorrectPackageId value
     * @param AllegroStructArrayOfString $_packageIdsNotAddedIncorrectPackageId the packageIdsNotAddedIncorrectPackageId
     * @return AllegroStructArrayOfString
     */
    public function setPackageIdsNotAddedIncorrectPackageId($_packageIdsNotAddedIncorrectPackageId)
    {
        return ($this->packageIdsNotAddedIncorrectPackageId = $_packageIdsNotAddedIncorrectPackageId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormPackageInfoStruct
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
