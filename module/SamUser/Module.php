<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace SamUser;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

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

        public function onBootstrap( MVCEvent $e )
        {
            $eventManager = $e->getApplication()->getEventManager();
            $em           = $eventManager->getSharedManager();
            $em->attach(
                'ZfcUser\Form\RegisterFilter',
                'init',
                function( $e )
                {
                    $filter = $e->getTarget();
                    // do your form filtering here            
                }
            );

            // custom form fields

            $em->attach(
                'ZfcUser\Form\Register',
                'init',
                function($e)
                {
                    /* @var $form \ZfcUser\Form\Register */
                    $form = $e->getTarget();
                    $form->add(
                        array(
                            'name' => 'firstName',
                            'options' => array(
                                'label' => 'Name',
                            ),
                            'attributes' => array(
                                'type'  => 'text',
                            ),
                        )
                    );


                    $form->add(
                        array(
                            'name' => 'phoneno',
                            'options' => array(
                                'label' => 'Phone no',
                            ),
                            'attributes' => array(
                                'type'  => 'number',
                            ),
                        )
                    );
                    $form->add(
                        array(
                            'name' => 'country',
                            'options' => array(
                                'label' => 'Country',
                            ),
                            'attributes' => array(
                                'type'  => 'text',
                            ),
                        )
                    );

                }
);

            // here's the storage bit

            $zfcServiceEvents = $e->getApplication()->getServiceManager()->get('zfcuser_user_service')->getEventManager();

            $zfcServiceEvents->attach('register', function($e) {
                $form = $e->getParam('form');
                $user = $e->getParam('user');
                /* @var $user \SamUser\Entity\User */
                $user->setPhoneno(  $form->get('firstName')->getValue() );
                $user->setPhoneno(  $form->get('phoneno')->getValue() );
                $user->setCountry( $form->get('country')->getValue() );
            });

            // you can even do stuff after it stores           
            $zfcServiceEvents->attach('register.post', function($e) {
                /*$user = $e->getParam('user');*/
            });
        }
    }