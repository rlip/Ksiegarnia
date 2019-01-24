<?php
namespace Admin\Controller;

use Admin\Operation\Login;
use Common\Controller\ControllerAbstract;
use ExtJs\Controller\ControllerAbstractExtJs;
use ExtJs\JsonModel\ErrorModel;
use ExtJs\JsonModel\SuccessModel;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\SessionManager;
use Zend\View\Model\ViewModel;

class LoginController extends ControllerAbstractExtJs
{

    public function __construct()
    {
        parent:: __construct(new Login());
    }

    public function loginAction()
    {
        $this->_getOperation()->login();
        return new SuccessModel();
    }

    public function logoutAction()
    {
        $this->_getOperation()->logout();
        return new SuccessModel();
    }

    public function isAdminLoggedAction(){
        $oAuthService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
        if (!$oAuthService->hasIdentity()){
            throw new \Exception('Nie jesteś zalogowany');
        }
        $oUser = $oAuthService->getIdentity(); //todo! jeśli nie jest zalogowany, a jest ciasteczko to zalogować
        if($oUser && $oUser->getUserId() == 1){
            return new SuccessModel();
        }
        return new ErrorModel('Brak uprawnień');
    }
}
