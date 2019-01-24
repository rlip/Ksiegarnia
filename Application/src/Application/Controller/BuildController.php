<?php
namespace Application\Controller;

use Application\Entity\EntityAllegroShipment;
use Application\Entity\EntityCategoryAllegro;
use Common\Controller\ControllerConsoleAbstract;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\ORM\Tools\SchemaTool;
use WsdlToPhpGenerator;

class BuildController extends ControllerConsoleAbstract
{

    public function rebuildAction()
    {
        /** @var \Common\Operation\CommonFunction $oCommon */
        $oCommon = $this->getServiceLocator()->get('Common');
        $sLine = $this->_readLine($oCommon->cleanChars('Czy na pewno wszystko usunąć? [tak/nie]'));
        if ($sLine != 'tak') {
            die($oCommon->cleanChars('W takim razie kończę'));
        }
        $oEm = $this->_getEntityManager();
        $oSchemaTool = new SchemaTool($oEm);
        $oCommon->trace('Usuwam bazę danych');
        $oSchemaTool->dropDatabase();
        $oCommon->trace('Tworzę nową bazę');
        $oSchemaTool->createSchema($oEm->getMetadataFactory()->getAllMetadata());
        $oCommon->trace('Rozpoczynam ładowanie fixturek');
        $oLoader = new Loader();
        $oLoader->loadFromDirectory(__DIR__ . '/../Fixture');
        $oExecutor = new ORMExecutor($this->_getEntityManager(), new ORMPurger());
        $oExecutor->execute($oLoader->getFixtures());
        $oCommon->trace('Rozpoczynam import kategorii Allegro');
        $this->allegroImportCategoriesAction();
        $oCommon->trace('Rebuild zakończony');
    }

    /**
     * Funkcja generująca klasy dla obsługi api allegro
     */
    public function allegroWsdlGenerateAction()
    {
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam generowanie klas allegro');
        $oGenerator = new WsdlToPhpGenerator('https://webapi.allegro.pl/service.php?wsdl');
        WsdlToPhpGenerator::setOptionGenerateAutoloadFile(true);
        WsdlToPhpGenerator::setOptionGenerateWsdlClassFile(true);
        WsdlToPhpGenerator::setOptionResponseAsWsdlObject(false);
        WsdlToPhpGenerator::setOptionGenerateTutorialFile(true);
        WsdlToPhpGenerator::setOptionSendArrayAsParameter(false);
        WsdlToPhpGenerator::setOptionSendParametersAsArray(false);
        WsdlToPhpGenerator::setOptionCategory(WsdlToPhpGenerator::OPT_CAT_START_NAME);
        WsdlToPhpGenerator::setOptionSubCategory(WsdlToPhpGenerator::OPT_SUB_CAT_NONE_NAME);
        WsdlToPhpGenerator::setOptionGatherMethods(WsdlToPhpGenerator::OPT_GATH_METH_START_NAME);
        WsdlToPhpGenerator::setOptionAddComments(array(
            'date' => date('Y-m-d'),
            'author' => 'Roman Lip',
            'version' => 1));
        $oGenerator->generateClasses('Allegro', getcwd() . '/module/Allegro/src/Allegro/WsdlClass/');
        $this->getServiceLocator()->get('Common')->trace('Generowanie klas zostało zakończone');
    }

    public function allegroImportShipmentsAction(){
        $oCommon = $this->getServiceLocator()->get('Common');
        $sLine = $this->_readLine($oCommon->cleanChars('Czy na pewno usunąć i zaktualizować metody dostawy? [tak/nie]'));
        if ($sLine != 'tak') {
            die($oCommon->cleanChars('W takim razie kończę'));
        }
        $oCommon->trace('Czyszczę tablicę metod dostawy allegro');
        $oCommon->trace('Rozpoczynam import metod');
        $sApiKey = $oCommon->getConfigParam('allegro/settings/api_key');
        $iCountryCode = (int)$oCommon->getConfigParam('allegro/settings/country_code');
        /** @var \Allegro\Operation\AllegroClient $oClient */
        $oClient = $this->getServiceLocator()->get('AllegroClient');
        $oRequest = new \AllegroStructDoGetShipmentDataRequest($iCountryCode, $sApiKey);
        $oResult = $oClient->doGetShipmentData($oRequest);
        if(!$oResult){
            $oCommon->trace('Import metod dostawy zakończony niepowodzeniem');
            return;
        }
        $oEM = $this->_getEntityManager();
        $oEM->getConnection()->query('START TRANSACTION;SET FOREIGN_KEY_CHECKS=0; TRUNCATE allegro_shipment; SET FOREIGN_KEY_CHECKS=1; COMMIT;');
        /** @var \AllegroStructShipmentDataStruct $oShipment */
        foreach($oResult->getShipmentDataList()->getItem() as $oShipment){
            $oAllegroShipment = new EntityAllegroShipment();
            $oEM->persist($oAllegroShipment);
            $oAllegroShipment->setAllegrosIdAllegro($oShipment->getShipmentId());
            $oAllegroShipment->setAllegrosName($oShipment->getShipmentName());
            $oAllegroShipment->setAllegrosType($oShipment->getShipmentType());
            $oAllegroShipment->setAllegrosTimeFrom($oShipment->getShipmentTime()->getShipmentTimeFrom());
            $oAllegroShipment->setAllegrosTimeTo($oShipment->getShipmentTime()->getShipmentTimeTo());
        }
        $oCommon->trace('Zapisuję do bazy');
        $oEM->flush();
        $oCommon->trace('Import metod dostawy został zakończony');
    }

    public function allegroImportCategoriesAction()
    {
        $oCommon = $this->getServiceLocator()->get('Common');
        $sLine = $this->_readLine($oCommon->cleanChars('Czy na pewno usunąć i zaktualizować kategorie? [tak/nie]'));
        if ($sLine != 'tak') {
            die($oCommon->cleanChars('W takim razie kończę'));
        }
        $oEM = $this->_getEntityManager();
        $oCommon->trace('Rozpoczynam import kategorii');
        $sApiKey = $oCommon->getConfigParam('allegro/settings/api_key');
        $iCountryCode = (int)$oCommon->getConfigParam('allegro/settings/country_code');
        /** @var \Allegro\Operation\AllegroClient $oClient */
        $oClient = $this->getServiceLocator()->get('AllegroClient');
        $oRequest = new \AllegroStructDoGetCatsDataRequest($iCountryCode, null, $sApiKey);
        $oResult = $oClient->doGetCatsData($oRequest);
        if(!$oResult){
            $oCommon->trace('Import kategorii zakończony niepowodzeniem');
            return;
        }
        $oCommon->trace('Czyszczę tablicę kategorii allegro');
        $oEM->getConnection()->query('START TRANSACTION;SET FOREIGN_KEY_CHECKS=0; TRUNCATE category_allegro; SET FOREIGN_KEY_CHECKS=1; COMMIT;');
        $aCategories = array();
        $oCommon->trace('Ustawiam dane');
        /** @var \AllegroStructCatInfoType $oCategory */
        foreach($oResult->getCatsList()->getItem() as $oCategory){
            $oCategoryAllegro = new EntityCategoryAllegro();
            $oEM->persist($oCategoryAllegro);
            $oCategoryAllegro->setCategoryaId($oCategory->getCatId());
            $oCategoryAllegro->setCategoryaName($oCategory->getCatName());
            $aCategories[$oCategory->getCatId()] = $oCategoryAllegro;
        }
        $oCommon->trace('Tworzę drzewo');
        foreach($oResult->getCatsList()->getItem() as $oCategory){
            if ($oCategory->getCatParent()) {
                $aCategories[$oCategory->getCatId()]->setCategoryaParent($aCategories[$oCategory->getCatParent()]);
            }
        }
        $oCommon->trace('Zapisuję do bazy');
        $oEM->flush();
        $oCommon->trace('Import kategorii został zakończony');
    }
}