<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CommissionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommissionRepository extends EntityRepository
{
    public function findByUser($user)
    {
//        $commissions = $this->
//        getEntityManager()->
//        createQuery('SELECT c FROM AppBundle:Commission c where c.USER = :user ')->
//        setParameter('user',$user)->
//        getResult();
//
//        return $commissions;
    }
}
