<?php
/**
 * Created by PhpStorm.
 * User: Sami
 * Date: 11/12/15
 * Time: 12:53 AM
 */

namespace SamUser\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class TreeController extends AbstractActionController
{

    Public function indexAction()
    {
        return new ViewModel(array(
            
            'Url' => '/',
            'title' => 'Generation Tree',
        ));


    }
}