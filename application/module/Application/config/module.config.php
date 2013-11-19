<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => ':controller[/:action][/:id]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[a-zA-Z0-9%:-]+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                '__NAMESPACE__' => 'Application\Controller'
                            )
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
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'twitter' => function(\Zend\ServiceManager\ServiceManager $sm) {
                    $config = array(
                        'access_token' => array(
                            'token' => '396521522-4dkGpLMzghhCo3zyrWT2WxWGZEx93p6GvGjetGM9',
                            'secret' => '9kc3ULliH48LtYddJTvxBFyou0TE42s2rdlwIyQySHC1r'
                        ),
                        'oauth_options' => array(
                            'consumerKey' => 'ZoGEdQk0KWNNLdNTGL1F1A',
                            'consumerSecret' => '2cTxS2PmUMnvyPgWzbBbb6wA4Accrc5LxovaGGNeAM'
                        ),
                        'http_client_options' => array(
                            'adapter' => 'Zend\Http\Client\Adapter\Curl'
                        )
                    );
                    $twitter = new \ZendService\Twitter\Twitter($config);
                    return $twitter;
             }
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
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
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Tweets' => 'Application\Controller\TweetsController'
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    /**
     * USS Specific Configuration
     */
    'noc' => array(
        'to_address' => 'scaturrob@gmail.com',
        'from_address' => 'cloud@ussignalcom.net'
    ),
    'white-labelling' => array(
        'logo-dir' => __DIR__ . '/../../../public/logos'
    ),
    'hardware' => array(
        'hard_disks' => array(
            'minimum_mb' => '256'
        ),
        'memory' => array(
            'max_gb' => '64'
        )
    )
);
