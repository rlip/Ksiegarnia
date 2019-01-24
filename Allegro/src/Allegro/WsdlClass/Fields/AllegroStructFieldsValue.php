<?php
/**
 * File for class AllegroStructFieldsValue
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFieldsValue originally named FieldsValue
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFieldsValue extends AllegroWsdlClass
{
    /**
     * The fid
     * @var int
     */
    public $fid;
    /**
     * The fvalueString
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fvalueString;
    /**
     * The fvalueInt
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $fvalueInt;
    /**
     * The fvalueFloat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $fvalueFloat;
    /**
     * The fvalueImage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var base64Binary
     */
    public $fvalueImage;
    /**
     * The fvalueDatetime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $fvalueDatetime;
    /**
     * The fvalueDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fvalueDate;
    /**
     * The fvalueRangeInt
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructRangeIntValueStruct
     */
    public $fvalueRangeInt;
    /**
     * The fvalueRangeFloat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructRangeFloatValueStruct
     */
    public $fvalueRangeFloat;
    /**
     * The fvalueRangeDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructRangeDateValueStruct
     */
    public $fvalueRangeDate;
    /**
     * Constructor method for FieldsValue
     * @see parent::__construct()
     * @param int $_fid
     * @param string $_fvalueString
     * @param int $_fvalueInt
     * @param float $_fvalueFloat
     * @param base64Binary $_fvalueImage
     * @param float $_fvalueDatetime
     * @param string $_fvalueDate
     * @param AllegroStructRangeIntValueStruct $_fvalueRangeInt
     * @param AllegroStructRangeFloatValueStruct $_fvalueRangeFloat
     * @param AllegroStructRangeDateValueStruct $_fvalueRangeDate
     * @return AllegroStructFieldsValue
     */
    public function __construct($_fid = NULL,$_fvalueString = NULL,$_fvalueInt = NULL,$_fvalueFloat = NULL,$_fvalueImage = NULL,$_fvalueDatetime = NULL,$_fvalueDate = NULL,$_fvalueRangeInt = NULL,$_fvalueRangeFloat = NULL,$_fvalueRangeDate = NULL)
    {
        parent::__construct(array('fid'=>$_fid,'fvalueString'=>$_fvalueString,'fvalueInt'=>$_fvalueInt,'fvalueFloat'=>$_fvalueFloat,'fvalueImage'=>$_fvalueImage,'fvalueDatetime'=>$_fvalueDatetime,'fvalueDate'=>$_fvalueDate,'fvalueRangeInt'=>$_fvalueRangeInt,'fvalueRangeFloat'=>$_fvalueRangeFloat,'fvalueRangeDate'=>$_fvalueRangeDate),false);
    }
    /**
     * Get fid value
     * @return int|null
     */
    public function getFid()
    {
        return $this->fid;
    }
    /**
     * Set fid value
     * @param int $_fid the fid
     * @return int
     */
    public function setFid($_fid)
    {
        return ($this->fid = $_fid);
    }
    /**
     * Get fvalueString value
     * @return string|null
     */
    public function getFvalueString()
    {
        return $this->fvalueString;
    }
    /**
     * Set fvalueString value
     * @param string $_fvalueString the fvalueString
     * @return string
     */
    public function setFvalueString($_fvalueString)
    {
        return ($this->fvalueString = $_fvalueString);
    }
    /**
     * Get fvalueInt value
     * @return int|null
     */
    public function getFvalueInt()
    {
        return $this->fvalueInt;
    }
    /**
     * Set fvalueInt value
     * @param int $_fvalueInt the fvalueInt
     * @return int
     */
    public function setFvalueInt($_fvalueInt)
    {
        return ($this->fvalueInt = $_fvalueInt);
    }
    /**
     * Get fvalueFloat value
     * @return float|null
     */
    public function getFvalueFloat()
    {
        return $this->fvalueFloat;
    }
    /**
     * Set fvalueFloat value
     * @param float $_fvalueFloat the fvalueFloat
     * @return float
     */
    public function setFvalueFloat($_fvalueFloat)
    {
        return ($this->fvalueFloat = $_fvalueFloat);
    }
    /**
     * Get fvalueImage value
     * @return base64Binary|null
     */
    public function getFvalueImage()
    {
        return $this->fvalueImage;
    }
    /**
     * Set fvalueImage value
     * @param base64Binary $_fvalueImage the fvalueImage
     * @return base64Binary
     */
    public function setFvalueImage($_fvalueImage)
    {
        return ($this->fvalueImage = $_fvalueImage);
    }
    /**
     * Get fvalueDatetime value
     * @return float|null
     */
    public function getFvalueDatetime()
    {
        return $this->fvalueDatetime;
    }
    /**
     * Set fvalueDatetime value
     * @param float $_fvalueDatetime the fvalueDatetime
     * @return float
     */
    public function setFvalueDatetime($_fvalueDatetime)
    {
        return ($this->fvalueDatetime = $_fvalueDatetime);
    }
    /**
     * Get fvalueDate value
     * @return string|null
     */
    public function getFvalueDate()
    {
        return $this->fvalueDate;
    }
    /**
     * Set fvalueDate value
     * @param string $_fvalueDate the fvalueDate
     * @return string
     */
    public function setFvalueDate($_fvalueDate)
    {
        return ($this->fvalueDate = $_fvalueDate);
    }
    /**
     * Get fvalueRangeInt value
     * @return AllegroStructRangeIntValueStruct|null
     */
    public function getFvalueRangeInt()
    {
        return $this->fvalueRangeInt;
    }
    /**
     * Set fvalueRangeInt value
     * @param AllegroStructRangeIntValueStruct $_fvalueRangeInt the fvalueRangeInt
     * @return AllegroStructRangeIntValueStruct
     */
    public function setFvalueRangeInt($_fvalueRangeInt)
    {
        return ($this->fvalueRangeInt = $_fvalueRangeInt);
    }
    /**
     * Get fvalueRangeFloat value
     * @return AllegroStructRangeFloatValueStruct|null
     */
    public function getFvalueRangeFloat()
    {
        return $this->fvalueRangeFloat;
    }
    /**
     * Set fvalueRangeFloat value
     * @param AllegroStructRangeFloatValueStruct $_fvalueRangeFloat the fvalueRangeFloat
     * @return AllegroStructRangeFloatValueStruct
     */
    public function setFvalueRangeFloat($_fvalueRangeFloat)
    {
        return ($this->fvalueRangeFloat = $_fvalueRangeFloat);
    }
    /**
     * Get fvalueRangeDate value
     * @return AllegroStructRangeDateValueStruct|null
     */
    public function getFvalueRangeDate()
    {
        return $this->fvalueRangeDate;
    }
    /**
     * Set fvalueRangeDate value
     * @param AllegroStructRangeDateValueStruct $_fvalueRangeDate the fvalueRangeDate
     * @return AllegroStructRangeDateValueStruct
     */
    public function setFvalueRangeDate($_fvalueRangeDate)
    {
        return ($this->fvalueRangeDate = $_fvalueRangeDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFieldsValue
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
