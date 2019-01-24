<?php
/**
 * File for class AllegroStructSiteInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSiteInfoType originally named SiteInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSiteInfoType extends AllegroWsdlClass
{
    /**
     * The siteName
     * @var string
     */
    public $siteName;
    /**
     * The siteUrl
     * @var string
     */
    public $siteUrl;
    /**
     * The siteCountryCode
     * @var int
     */
    public $siteCountryCode;
    /**
     * The siteCodePage
     * @var string
     */
    public $siteCodePage;
    /**
     * The siteLogoGif
     * @var base64Binary
     */
    public $siteLogoGif;
    /**
     * Constructor method for SiteInfoType
     * @see parent::__construct()
     * @param string $_siteName
     * @param string $_siteUrl
     * @param int $_siteCountryCode
     * @param string $_siteCodePage
     * @param base64Binary $_siteLogoGif
     * @return AllegroStructSiteInfoType
     */
    public function __construct($_siteName = NULL,$_siteUrl = NULL,$_siteCountryCode = NULL,$_siteCodePage = NULL,$_siteLogoGif = NULL)
    {
        parent::__construct(array('siteName'=>$_siteName,'siteUrl'=>$_siteUrl,'siteCountryCode'=>$_siteCountryCode,'siteCodePage'=>$_siteCodePage,'siteLogoGif'=>$_siteLogoGif),false);
    }
    /**
     * Get siteName value
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->siteName;
    }
    /**
     * Set siteName value
     * @param string $_siteName the siteName
     * @return string
     */
    public function setSiteName($_siteName)
    {
        return ($this->siteName = $_siteName);
    }
    /**
     * Get siteUrl value
     * @return string|null
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }
    /**
     * Set siteUrl value
     * @param string $_siteUrl the siteUrl
     * @return string
     */
    public function setSiteUrl($_siteUrl)
    {
        return ($this->siteUrl = $_siteUrl);
    }
    /**
     * Get siteCountryCode value
     * @return int|null
     */
    public function getSiteCountryCode()
    {
        return $this->siteCountryCode;
    }
    /**
     * Set siteCountryCode value
     * @param int $_siteCountryCode the siteCountryCode
     * @return int
     */
    public function setSiteCountryCode($_siteCountryCode)
    {
        return ($this->siteCountryCode = $_siteCountryCode);
    }
    /**
     * Get siteCodePage value
     * @return string|null
     */
    public function getSiteCodePage()
    {
        return $this->siteCodePage;
    }
    /**
     * Set siteCodePage value
     * @param string $_siteCodePage the siteCodePage
     * @return string
     */
    public function setSiteCodePage($_siteCodePage)
    {
        return ($this->siteCodePage = $_siteCodePage);
    }
    /**
     * Get siteLogoGif value
     * @return base64Binary|null
     */
    public function getSiteLogoGif()
    {
        return $this->siteLogoGif;
    }
    /**
     * Set siteLogoGif value
     * @param base64Binary $_siteLogoGif the siteLogoGif
     * @return base64Binary
     */
    public function setSiteLogoGif($_siteLogoGif)
    {
        return ($this->siteLogoGif = $_siteLogoGif);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSiteInfoType
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
