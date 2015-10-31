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
//    userdashboard
    Public function adddiscipleAction()
    {
        $view = new ViewModel(array(
            'Url' => '/',
            'title' => 'Add Disciples',
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