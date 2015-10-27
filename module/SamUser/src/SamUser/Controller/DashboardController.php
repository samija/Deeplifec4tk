<?php
/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 10/24/15
 * Time: 10:04 PM
 */

namespace SamUser\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController  extends AbstractActionController
{
    // add disciple
    Public function indexAction()
    {
        $view = new ViewModel(array(
            'imageurl' => '',
            'Url' => '/',
            'title' => 'User Dashboard',
        ));
        return $view;
    }
//    Add Disiple
    Public function adddiscipleAction()
    {
//        $form = new \SamUser\Form\AddUser();
//        $form->setHydrator(new \Zend\Stdlib\Hydrator\Reflection());
//        $form->bind(new \SamUser\Entity\User());
//
//        if ($this->getRequest()->isPost()) { $form->setData($this->getRequest()->getPost());
//            if ($form->isValid()) { var_dump($form->getData());
//            } else {
//                return new ViewModel(
//                    array(
//                        'form' => $form
//                    )
//                ); }
//        } else {
//            return new ViewModel(
//                array(
//                    'form' => $form
//               ) );
//        }
//    }
        $view = new ViewModel(array(
            'Url' => '/',
            'title' => 'Add Disciples',
            'form' => new \SamUser\Form\AddUser(),
        ));
        return $view;

    }
    //list disciples
    Public function listdiscipleAction()
    {
        $view = new ViewModel(array(
            'Url' => '/',
            'title' => 'Your Disciples',
        ));
        return $view;
    }

    //update user info
    Public function updateinfoAction()
    {
        $view = new ViewModel(array(
            'Url' => '/',
            'title' => 'Update Your Information',
        ));
        return $view;
    }
}