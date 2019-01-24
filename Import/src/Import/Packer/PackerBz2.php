<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 22:14
 */

namespace Import\Packer;


class PackerBz2 extends PackerAbstract
{
    public function startUnpack()
    {
        $this->_bz2Exists();
        $sSource = $this->_getSourceIfExist();
        $sDestination = getcwd() . '/data/import/' . $this->getImportTemplate()->getImportLocalFile();
        $oBz = bzopen($sSource, 'r');
        $fDestination = fopen($sDestination, 'w');
        while ($sData = bzread($oBz, 8192)) {
            fwrite($fDestination, $sData);
        }
        bzclose($oBz);
        fclose($fDestination);
    }

    protected function _bz2Exists()
    {
        if (!function_exists('bzopen')) {
            throw new \Exception('Bz2 nie jest zainstalowane');
        }
    }
} 