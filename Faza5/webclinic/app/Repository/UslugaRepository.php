<?php

namespace App\Repository;

/**
 * UlogeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UslugaRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUslugeByStruka($nazivStruke){
        return $this->findBy(["nazivstruke"=>$nazivStruke]);
    }
}