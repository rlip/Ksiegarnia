<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Entity\EntityAbstract;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        EntityAbstract::setServiceLocator($e->getApplication()->getServiceManager());
    }

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
        /** @noinspection PhpUnusedParameterInspection */
        return array(
            'factories' => array(
                'Zend\Authentication\AuthenticationService' => function ($serviceManager) {
                        return $serviceManager->get('doctrine.authenticationservice.orm_default');
                    },
            ),
            'invokables' => array(
                'ImagineService' => 'Imagine\Gd\Imagine',
            ),
        );
    }
}
