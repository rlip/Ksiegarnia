<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 21:33
 */

namespace Import\Reader;


class ReaderLnl extends ReaderAbstract
{
    /** @var \XMLReader $_coreReader  */
    protected $_coreReader;
    protected $_current;

    protected function _initCoreReader()
    {
        $this->_coreReader = new \XMLReader();
        $this->_coreReader->open($this->_getSourceIfExist());
    }

    public function current(){
        if (!$this->_current) {
            $this->_current = $this->next();
        }
        return $this->_current;
    }

    public function next()
    {
        if(!$this->_coreReader){
            $this->_initCoreReader();
        }
        $bRead = true;
        while ($bRead) {
            $bRead = $this->_coreReader->read();
            if ($this->_coreReader->name == 'row') {
                break;
            }
        }
        $aApplication = array();
        while ($bRead) {
            if ($this->_coreReader->name == 'field' AND $this->_coreReader->nodeType == \XMLReader::ELEMENT) {
                $sName = $this->_coreReader->getAttribute('name');
                if(!$sName){
                    continue;
                }
                $sValue = '';
                $this->_coreReader->read();
                if ($this->_coreReader->nodeType == \XMLReader::TEXT) {
                    $sValue = $this->_coreReader->value;
                }
                $aApplication[$sName] = $sValue;
            } else {
                $this->_coreReader->read();
            }
            if ($this->_coreReader->name == 'row' AND $this->_coreReader->nodeType == \XMLReader::END_ELEMENT) {
                break;
            }
        }
        $this->_current = $aApplication;
        return $this->_current;
    }
}