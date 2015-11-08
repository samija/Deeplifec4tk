<?php
/**
 * Created by PhpStorm.
 * User: Fre
 * Date: 11/7/2015
 * Time: 8:07 AM
 */

namespace SamUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class resourceController  extends AbstractActionController
{
    Public function indexAction()
    {
//
        $view = new ViewModel(array(
            'Url' => '/winresource',
            'title' => 'resources',

        ));
        return $view;

    }
    Public function downloadAction()
    {



    }




}