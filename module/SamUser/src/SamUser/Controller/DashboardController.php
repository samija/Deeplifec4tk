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
        return new ViewModel();
    }

    //list disciples
    Public function listdiscipleAction()
    {
        return new ViewModel();
    }

    //update user info
    Public function updateinfoAction()
    {
        return new ViewModel();
    }
}