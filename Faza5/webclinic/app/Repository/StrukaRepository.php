<?php

namespace App\Repository;

/**
 * StrukaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StrukaRepository extends \Doctrine\ORM\EntityRepository
{
     public function dohvatiStruke(){

        return $this->findAll();
        
    }
    
}