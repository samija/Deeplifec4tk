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
use SamUser\Entity\User;


class DashboardController  extends AbstractActionController
{
    protected $em;

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }
    // add disciple
    Public function indexAction()
    {

        return new ViewModel(array(
            'users' => $this->getEntityManager()->getRepository('SamUser\Entity\User')->findAll(),

        ));

    }
//    Add Disiple
    Public function adddiscipleAction()
    {
//
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
            'users' => $this->getEntityManager()->getRepository('SamUser\Entity\User')->findAll(),
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