<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=corps;hostname=localhost',
        'driver_options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],
    'navigation' => [
        'default' => [
            [
                'label' => 'Setores Espaciais',
                'route' => 'tropa',
                'controller'=> 'setor',
                'pages' => [
                    [
                        'label' => 'Incluir setor',
                        'route' => 'tropa',
                        'controller'=> 'setor',
                        'action'=> 'edit'
                    ]
                ]
            ],
            [
                'label' => 'Lanternas Verdes',
                'route' => 'tropa',
                'controller' => 'lanterna',
                'pages' => [
                    [
                        'label' => 'Incluir Lanterna',
                        'route' => 'tropa',
                        'controller'=>'lanterna',
                        'action'=> 'edit'
                    ]
                ]
            ]
        ]
    ],
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter'
            => 'Zend\Db\Adapter\AdapterServiceFactory',
            'Navigation'
            => 'Zend\Navigation\Service\DefaultNavigationFactory'
        ],
    ],

];
