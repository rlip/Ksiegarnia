<?php
namespace AuthDoctrine;

use Zend\Mvc\MvcEvent;
use Zend\Console\Request as ConsoleRequest;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Zend\Authentication\AuthenticationService' => function ($serviceManager) {
                        return $serviceManager->get('doctrine.authenticationservice.orm_default');
                    },
            )
        );
    }

    public function onBootstrap(MvcEvent $e)
    {
        $this->initAcl($e);
        $e->getApplication()->getEventManager()->attach('route', array($this, 'checkAcl'));
    }

    public function initAcl(MvcEvent $e)
    {
        $acl = new \Zend\Permissions\Acl\Acl();
        $aConfig = $e->getApplication()->getServiceManager()->get('Config');
        $allResources = array();
        foreach ($aConfig['acl'] as $role => $resources) {
            $role = new \Zend\Permissions\Acl\Role\GenericRole($role);
            $acl->addRole($role);
            $allResources = array_merge($resources, $allResources);
            //adding resources
            foreach ($resources as $resource) {
                if (!$acl->hasResource($resource))
                    $acl->addResource(new \Zend\Permissions\Acl\Resource\GenericResource($resource));
            }
            foreach ($allResources as $resource) {
                $acl->allow($role, $resource);
            }
        }
        $e->getViewModel()->acl = $acl;
    }

    public function checkAcl(MvcEvent $e)
    {
        if ($e->getRequest() instanceof ConsoleRequest) {
            return; //zezwalam na dostęp z konsoli
        }
        $route = $e->getRouteMatch()->getMatchedRouteName();
        if (!$e->getViewModel()->acl->hasResource($route)) { //gdy nie ma danego zasobu - blokuję
            $this->noAccess($e);
            return;
        }
        if ($e->getViewModel()->acl->isAllowed('guest', $route)) {
            return; //jeśli gość ma dostęp, to każdy ma
        }
        $as = $e->getApplication()->getServiceManager()->get('Zend\Authentication\AuthenticationService');
        if ($as->hasIdentity()) {
            return; //na razie zakładam, że każdy zalogowany ma pełny dostęp
            //tu można pobrać role zalogowanego użytkownika z bazy i sprawdzić czy jakaś ma dostęp do aktualnego zasobu
            //  if($as->getIdentity()->getUserId() == 1){ //ale ja zakładam że tylko user o id 1 ma dostęp
//                return; //tu pyta za każdym razem bazę, można by zrobić jakiś cache
            //     }

        }
        $this->noAccess($e); //jak nie ma dostępu to blokuję
    }

    public function noAccess(MvcEvent $e)
    {
        //todo! wykryć czy to extjs
        $oResponse = $e->getApplication()->getServiceManager()->get('ExtJsErrorModel');
        $oResponse->setMessage('Brak dostępu');
        $e->setResult($oResponse);
        $e->stopPropagation(true);
    }
}