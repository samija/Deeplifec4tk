<?php
/**
 * User: Vladimir Garvardt
 * Date: 3/18/13
 * Time: 6:39 PM
 */
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfcUser\Form\RegisterFilter;
use ZfcUser\Mapper\UserHydrator;
use ZfcUser\Validator\NoRecordExists;
use SamUser\Form;
use SamUser\Options;
use SamUser\Validator\NoRecordExistsEdit;

return array(
    'invokables' => array(
        'SamUser\Form\EditUser' => 'SamUser\Form\EditUser',
        'samuser_user_service' => 'SamUser\Service\User',
    ),
    'factories' => array(
        'samuser_module_options' => function (ServiceLocatorInterface $sm) {
            $config = $sm->get('Config');
            return new Options\ModuleOptions(isset($config['samuser']) ? $config['samuser'] : array());
        },
        'samuser_edituser_form' => function (ServiceLocatorInterface $sm)
        {
            /** @var $zfcUserOptions \ZfcUser\Options\UserServiceOptionsInterface */
            $zfcUserOptions = $sm->get('zfcuser_module_options');
            /** @var $samUserOptions \SamUser\Options\ModuleOptions */
            $samUserOptions = $sm->get('samuser_module_options');
            $form = new Form\EditUser(null, $samUserOptions, $zfcUserOptions, $sm);
            $filter = new RegisterFilter(
                new NoRecordExistsEdit(array(
                    'mapper' => $sm->get('zfcuser_user_mapper'),
                    'key' => 'email'
                )),
                new NoRecordExistsEdit(array(
                    'mapper' => $sm->get('zfcuser_user_mapper'),
                    'key' => 'username'
                )),
                $zfcUserOptions
            );
            if (!$samUserOptions->getAllowPasswordChange()) {
                $filter->remove('password')->remove('passwordVerify');
            } else {
                $filter->get('password')->setRequired(false);
                $filter->remove('passwordVerify');
            }
            $form->setInputFilter($filter);
            return $form;
        },
        'samuser_createuser_form' => function (ServiceLocatorInterface $sm) {
            /** @var $zfcUserOptions \ZfcUser\Options\UserServiceOptionsInterface */
            $zfcUserOptions = $sm->get('zfcuser_module_options');
            /** @var $samUserOptions \SamUser\Options\ModuleOptions */
            $samUserOptions = $sm->get('samuser_module_options');
            $form = new Form\CreateUser(null, $samUserOptions, $zfcUserOptions, $sm);
            $filter = new RegisterFilter(
                new NoRecordExists(array(
                    'mapper' => $sm->get('zfcuser_user_mapper'),
                    'key' => 'email'
                )),
                new NoRecordExists(array(
                    'mapper' => $sm->get('zfcuser_user_mapper'),
                    'key' => 'username'
                )),
                $zfcUserOptions
            );
            if ($samUserOptions->getCreateUserAutoPassword()) {
                $filter->remove('password')->remove('passwordVerify');
            }
            $form->setInputFilter($filter);
            return $form;
        },
        'zfcuser_user_mapper' => function (ServiceLocatorInterface $sm) {
            /** @var $config \SamUser\Options\ModuleOptions */
            $config = $sm->get('samuser_module_options');
            $mapperClass = $config->getUserMapper();
            if (stripos($mapperClass, 'doctrine') !== false) {
                $mapper = new $mapperClass(
                    $sm->get('zfcuser_doctrine_em'),
                    $sm->get('zfcuser_module_options')
                );
            }

            return $mapper;
        },
    ),
);
