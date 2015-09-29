<?php
return array(
    'db' => array(
        'charset' => 'utf8',
        'database' => 'carsite',
        'driver' => 'PDO_Mysql',
        'port' => '3306',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);