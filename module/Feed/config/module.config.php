<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'feed' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/feed',
                    'defaults' => array(
                        'controller' => 'Feed\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'feed' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/feed',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Feed\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                
            ),
        ),
    ),
    'service_manager' => array(
        
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'invokables'=>array(
            'Feed\Model\Feed' => 'Feed\Model\Feed',
        ),
    ),
    'translator' => array(
        'locale' => 'pt_BR',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Feed\Controller\Index' => 'Feed\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
