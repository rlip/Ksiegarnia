<?php
namespace Application\Controller;

use Allegro\Operation\AllegroScenario;
use Application\Entity\EntityProductList;
use Import\Image\ImageFactory;
use Zend\View\Model\ViewModel;
use Common\Controller\ControllerConsoleAbstract;

class CronController extends ControllerConsoleAbstract
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function productImportAction()
    {
        $this->_consoleCheck();
        /** @var \Import\Import\ImportFactory $oImportFactory */
        $oImportFactory = $this->getServiceLocator()->get('ImportFactory');
        $oRepository = $this->_getEntityManager()->getRepository('Application\Entity\EntityImport');
        foreach ($oRepository->findAll() as $oImportEntity) {
            try {
                /** @var \Application\Entity\EntityImport $oImportEntity */
                if ($oImportEntity->getImportInterval() == 0) {
                    continue;
                }
                $dLastUpdate = $oImportEntity->getImportLastUpdate();
                $dLastUpdate->add(new \DateInterval('PT' . $oImportEntity->getImportInterval() . 'M'));
                $dNow = new \DateTime();
                if ($dNow < $dLastUpdate) {
                    continue;
                }
                $oImport = $oImportFactory->getImport($oImportEntity);
                $oImport->start();
                $oImportEntity->setImportLastUpdate($dNow);
                // $oImportEntity->save(); //todo! odkomentować
            } catch (\Exception $e) {
                $this->getServiceLocator()->get('Common')->trace('BŁĄD: ' . $e->getMessage());
            }
        }
    }

    public function imageImportAction(){
        $this->_consoleCheck();
        $this->getServiceLocator()->get('Common')->trace("Rozpoczynam import obrazków");
        $oEntityManager = $this->_getEntityManager();
        $oQueryBuilder = $oEntityManager->createQueryBuilder();
        /** @var $oImageImporter \Import\Image\ImageImporter */
        $oImageImporter =  $this->getServiceLocator()->get('ImageImporter');
        $oImageImporter->setServiceLocator($this->getServiceLocator());
        $iLimit = 1000;
        $iOffset = 0;
        $oQueryBuilder
            ->select('product')
            ->from('Application\Entity\EntityProductList', 'product')
            ->where('product.productlLocalImageWidth IS NULL')
            ->orderBy('product.productlId', 'DESC')
            ->setFirstResult($iOffset)
            ->setMaxResults($iLimit);
        while (count($oProducts = $oQueryBuilder->getQuery()->getResult())) {
            $this->getServiceLocator()->get('Common')->trace('Czytam produkty od ' . $iOffset . ' do ' . ($iLimit + $iOffset));
            /** @var EntityProductList $oProduct */
            foreach ($oProducts as $oProduct) {
                $oImageImporter->setProduct($oProduct);
                $iImageWidth = $oImageImporter->getImage();
                if($iImageWidth){
                    $oProduct->setProductlLocalImageWidth($iImageWidth);
                } else {
                    $oProduct->setProductlLocalImageWidth(0);
                }
            }
            $iOffset += $iLimit;
            $oQueryBuilder->setFirstResult($iOffset)
                ->setMaxResults($iLimit);
            $oEntityManager->flush();
            $oEntityManager->clear('Application\Entity\EntityProductList');
        }
        $this->getServiceLocator()->get('Common')->trace("Import obrazków został zakończony");
    }

    /**
     * Aktualizuje kategorie w produktach po zmianie mapowania
     */
    public function updateProductMappingAction(){
        $this->_consoleCheck();
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam aktualizację mapowania kategorii w produktach');
        $oChangedRemoteCategories = $this->_getEntityManager()->getRepository('Application\Entity\EntityCategoryRemote')->findBy(array(
            'categoryrMappingChanged' => 1
        ));
        /** @var \Application\Entity\EntityCategoryRemote $oCategoryRemote */
        foreach ($oChangedRemoteCategories as $oCategoryRemote){
            $oProducts = $this->_getEntityManager()->getRepository('Application\Entity\EntityProductList')->findBy(array(
                'productlCategoryr' => $oCategoryRemote
            ));
            /** @var \Application\Entity\EntityProductList $oProduct */
            foreach($oProducts as $oProduct){
                $this->_getEntityManager()->persist($oProduct);
                $oProduct->setProductlCategorya($oCategoryRemote->getCatergoryrCategorya());
            }

            $this->_getEntityManager()->persist($oCategoryRemote);
            $oCategoryRemote->setCategoryrMappingChanged(false);
        }
        $this->_getEntityManager()->flush();
        $this->getServiceLocator()->get('Common')->trace('Aktualizację mapowania kategorii została zakończona');
    }

    public function doNewAllegroAuctionAction(){
        $this->_consoleCheck();
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam wystawienie aukcji');
        //chyba zamiast brania z publikacji zrobić z tabeli
    }

    /**
     * Funkcja przetwarza scenariusze dodając aukcje do wystawienia
     */
    public function processScenariosAction(){
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam przetwarzanie szablonów');
        $this->_setOperation(new AllegroScenario());
        $this->_getOperation()->processScenarios();
        $this->getServiceLocator()->get('Common')->trace('Przetwarzanie szablonów zakończone');
    }

}