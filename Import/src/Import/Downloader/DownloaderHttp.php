<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 14:22
 */

namespace Import\Downloader;


class DownloaderHttp extends DownloaderAbstract
{
    public function startDownload()
    {
        $oTemplate = $this->getImportTemplate();
        $this->_remoteFileExists($oTemplate->getImportRemoteFile());
        $fRemoteFile = fopen($oTemplate->getImportRemoteFile(), "r");
        $fLocalFile = fopen(getcwd() . '/data/import/' . $oTemplate->getImportDownloadedFile(), "w");
        while ($sData = fread($fRemoteFile, 8192)) {
            fwrite($fLocalFile, $sData);
        }
        fclose($fRemoteFile);
        fclose($fLocalFile);
    }

    protected function _remoteFileExists($url) {
        if(!function_exists('curl_version')){
            throw new \Exception('Curl nie jest zainstalowany');
        }
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        $result = curl_exec($curl);
        $ret = false;
        if ($result !== false) {
            $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($statusCode == 200) {
                $ret = true;
            }
        }
        curl_close($curl);
        if(!$ret){
            throw new \Exception('Plik na zewnętrznym serwerze nie został znaleziony');
        }
    }
} 