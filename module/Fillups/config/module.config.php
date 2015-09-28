<?php

/* 
 * Routes for the module go here!!
 */

namespace Fillups;

return array(
    'router' => array(
        'routes' => array(
            'fillups' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/fillups',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Fillups\Controllers',
                        'controller' => 'Fillups',
                        'action'     => 'collection',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
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
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Fillups\Controllers\Fillups' => Controllers\FillupsController::class
        ),
    ),
);