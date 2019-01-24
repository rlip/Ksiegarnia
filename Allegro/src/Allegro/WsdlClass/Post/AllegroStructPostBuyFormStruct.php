<?php
/**
 * File for class AllegroStructPostBuyFormStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormStruct originally named PostBuyFormStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormStruct extends AllegroWsdlClass
{
    /**
     * The transactionId
     * @var long
     */
    public $transactionId;
    /**
     * The transactionPackageIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $transactionPackageIds;
    /**
     * The transactionPayByLink
     * @var AllegroStructTransactionPayByLinkStruct
     */
    public $transactionPayByLink;
    /**
     * Constructor method for PostBuyFormStruct
     * @see parent::__construct()
     * @param long $_transactionId
     * @param AllegroStructArrayOfLong $_transactionPackageIds
     * @param AllegroStructTransactionPayByLinkStruct $_transactionPayByLink
     * @return AllegroStructPostBuyFormStruct
     */
    public function __construct($_transactionId = NULL,$_transactionPackageIds = NULL,$_transactionPayByLink = NULL)
    {
        parent::__construct(array('transactionId'=>$_transactionId,'transactionPackageIds'=>($_transactionPackageIds instanceof AllegroStructArrayOfLong)?$_transactionPackageIds:new AllegroStructArrayOfLong($_transactionPackageIds),'transactionPayByLink'=>$_transactionPayByLink),false);
    }
    /**
     * Get transactionId value
     * @return long|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param long $_transactionId the transactionId
     * @return long
     */
    public function setTransactionId($_transactionId)
    {
        return ($this->transactionId = $_transactionId);
    }
    /**
     * Get transactionPackageIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getTransactionPackageIds()
    {
        return $this->transactionPackageIds;
    }
    /**
     * Set transactionPackageIds value
     * @param AllegroStructArrayOfLong $_transactionPackageIds the transactionPackageIds
     * @return AllegroStructArrayOfLong
     */
    public function setTransactionPackageIds($_transactionPackageIds)
    {
        return ($this->transactionPackageIds = $_transactionPackageIds);
    }
    /**
     * Get transactionPayByLink value
     * @return AllegroStructTransactionPayByLinkStruct|null
     */
    public function getTransactionPayByLink()
    {
        return $this->transactionPayByLink;
    }
    /**
     * Set transactionPayByLink value
     * @param AllegroStructTransactionPayByLinkStruct $_transactionPayByLink the transactionPayByLink
     * @return AllegroStructTransactionPayByLinkStruct
     */
    public function setTransactionPayByLink($_transactionPayByLink)
    {
        return ($this->transactionPayByLink = $_transactionPayByLink);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormStruct
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
