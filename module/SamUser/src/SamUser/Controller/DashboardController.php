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
use ZfcUser\Form\AddUser;


class DashboardController  extends AbstractActionController
{
    protected $em;
    public $userid;

    public function getMUserId()
    {
        if ($this->zfcUserAuthentication()->hasIdentity()) {
            //get the user_id of the user
            $this->userid = $this->zfcUserAuthentication()->getIdentity()->getId();
        }
        return $this->userid;
    }

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
            'users' => $this->getEntityManager()->getRepository('SamUser\Entity\User')->findBy(array('mentor_id' => $this ->userid = $this->getMUserId())),
            'Url' => '/',
            'title' => 'Your Dashboard',
        ));


    }
//    Add Disiple
    Public function adddiscipleAction()
    {
        $form = new AddUser();

        return array('form' => $form);

//
//        $view = new ViewModel(array(
//            'Url' => '/',
//            'title' => 'Add Disciples',
//        ));
//        return $view;

    }

    public function disciple()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('dashboard');
        }
        $view = new ViewModel(array(
            'users' => $this->getEntityManager()->getRepository('SamUser\Entity\User')->findall(),
            'Url' => '/',
            'title' => 'Yoursa Disciples',
        ));

    }

    //list disciples
    Public function listdiscipleAction()
    {
        $view = new ViewModel(array(
            'users' => $this->getEntityManager()->getRepository('SamUser\Entity\User')->findBy(array('mentor_id' => $this ->userid = $this->getMUserId())),
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