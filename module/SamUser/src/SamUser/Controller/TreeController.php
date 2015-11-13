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
use Zend\View\Model\JsonModel;
use SamUser\Entity\User;


class TreeController extends AbstractActionController
{
    protected $user;
    protected $users;
    protected $em;
    public $userid;
    protected $entity = 'SamUser\Entity\User';

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

    Public function indexAction()
    {
        return new ViewModel(array(

            'Url' => '/',
            'title' => 'Generation Tree',
        ));

    }
    public function jsonAction()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select(ARRAY('u'))
            ->from('SamUser\Entity\User', 'u')
        ->where('country = ?Ethiopia');


        $results = $queryBuilder->getQuery()

            ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);

        return new JsonModel($results);
    }



}


