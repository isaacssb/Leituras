<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Tropa;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\I18n\Translator;
use Tropa\Model\SetorTable;
use Zend\Db\ResultSet\ResultSet;
use Tropa\Model\Setor;
use Zend\Db\TableGateway\TableGateway;
use Tropa\Controller\SetorController;
use Zend\Session\SessionManager;
use Tropa\Model\LanternaTable;
use Tropa\Model\Lanterna;
use Tropa\Controller\LanternaController;

return [
    'router' => [
        'routes' => [
            'tropa' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/tropa[/:controller[/:action[/:key]]][/page/:page]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'aliases' => [
            'lanterna' => Controller\LanternaController::class,
            'setor' => Controller\SetorController::class
        ],
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\SetorController::class => function($sm){
                $table = $sm->get(SetorTable::class);
                $sessionManager = new SessionManager();
                return new SetorController($table, $sessionManager);
            },
            Controller\LanternaController::class => function($sm){
                $table = $sm->get(LanternaTable::class);
                $parentTable = $sm->get(SetorTable::class);
                $sessionManager = new SessionManager();
                return new LanternaController($table, $parentTable, $sessionManager);
            }
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'tropa/index/index' => __DIR__ . '/../view/tropa/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'service_manager' => [
            'factories' => array(
                LanternaTable::class =>  function($sm) {
                    $tableGateway = $sm->get('LanternaTableGateway');
                    $table = new LanternaTable($tableGateway);
                    return $table;
                },
                'LanternaTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Lanterna());
                    return new TableGateway('lanterna', $dbAdapter, null, $resultSetPrototype);
                },
                SetorTable::class =>  function($sm) {
                    $tableGateway = $sm->get('SetorTableGateway');
                    $table = new SetorTable($tableGateway);
                    return $table;
                },
                'SetorTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Setor());
                    return new TableGateway('setor', $dbAdapter, null, $resultSetPrototype);
                },
            ),
    ]
];
