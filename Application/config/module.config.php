<?php
namespace Application;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/test',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'test',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Cron' => 'Application\Controller\CronController',
            'Application\Controller\Build' => 'Application\Controller\BuildController',
        ),
    ),
    'view_manager' => array(
        'dimodule_listener_optionssplay_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
                'application-cron-product-import' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'cron product import',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Cron',
                            'action' => 'productImport'
                        ),
                    ),
                ),
                'application-cron-image-import' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'cron image import',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Cron',
                            'action' => 'imageImport'
                        ),
                    ),
                ),
                'application-cron-update-product-mapping' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'cron update product mapping',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Cron',
                            'action' => 'updateProductMapping'
                        ),
                    ),
                ),
                'application-process-scenarios' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'cron process scenarios',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Cron',
                            'action' => 'processScenarios'
                        ),
                    ),
                ),
                'application-build-rebuild' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'build rebuild',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Build',
                            'action' => 'rebuild'
                        )
                    )
                ),
                'application-build-allegro-wsdl-generate' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'build allegro wsdl generate',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Build',
                            'action' => 'allegroWsdlGenerate'
                        )
                    )
                ),
                'application-build-allegro-import-categories' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'build allegro import categories',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Build',
                            'action' => 'allegroImportCategories'
                        )
                    )
                ),
                'application-build-allegro-import-shipments' => array(
                    'type' => 'simple',
                    'options' => array(
                        'route' => 'build allegro import shipments',
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\Controller',
                            'controller' => 'Application\Controller\Build',
                            'action' => 'allegroImportShipments'
                        )
                    )
                ),
            ),
        ),
    ),
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    )
);
