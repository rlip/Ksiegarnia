<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 20:28
 */

namespace Admin\Operation;

use Common\Operation\OperationAbstract;
use Zend\Authentication\Result;
use DoctrineModule\Authentication\Adapter\ObjectRepository;
use Zend\Session\SessionManager;

class Login extends OperationAbstract
{
    public function login()
    {
        $sUsername = $this->getContentParam('username');
        $sPassword = $this->getContentParam('password');
        if (!$sUsername || !$sPassword) {
            throw new \Exception('Nie przysłano żadnych parametrów');
        }
        $oAuthService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
        /* @var ObjectRepository $oAuthAdapter */
        $oAuthAdapter = $oAuthService->getAdapter();
        $oAuthAdapter->setIdentity($sUsername); //$data['usr_name']
        $oAuthAdapter->setCredential($sPassword); // $data['usr_password']
        $oResult = $oAuthService->authenticate();
        switch ($oResult->getCode()) {
            case Result::FAILURE_IDENTITY_NOT_FOUND:
                throw new \Exception('Nie znaleziono użytkownika');
                break;
            case Result::FAILURE_CREDENTIAL_INVALID:
                throw new \Exception('Hasło jest nieprawidłowe');
                break;
            case Result::SUCCESS:
                $identity = $oResult->getIdentity();
                $oAuthService->getStorage()->write($identity);
                $time = 1209600; // 14 days 1209600/3600 = 336 hours => 336/24 = 14 days
                if ($this->getContentParam('remember_me')) {
                    $sessionManager = new SessionManager();
                    $sessionManager->rememberMe($time);
                }
                break;
            default:
                throw new \Exception('Wystąpił błąd podczas logowania');
                break;
        }
        return true;
    }

    public function logout(){
        $auth = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
        $auth->clearIdentity();
        $sessionManager = new SessionManager();
        $sessionManager->forgetMe();
    }
} 