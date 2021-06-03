<?php

namespace App\Repository;

use App\Models\Entities\Pitanje;
use App\Models\Entities\Pitanjegost;
use App\Models\Entities\Struka;
/**
 * PitanjegostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PitanjegostRepository extends \Doctrine\ORM\EntityRepository
{
    public function kreirajPitanjegost($postData){ 
        $pitanje = new Pitanje;
        $pitanje->setNaslov($postData["subject"]);
        $pitanje->setTekstpitanja($postData["message"]);
       
        $strukarep = service('doctrine')->em->getRepository(Struka::class);
        $struka=$strukarep->findOneBy(['nazivstruke'=>$postData["struka"]]);
        $pitanje->setNazivstruke($struka);
        
        $pitanjeGost= new Pitanjegost;
        $pitanjeGost->setIdpitanje($pitanje);
       
       
        
        $pitanjeGost->setImeprezime($postData["name"]);
        $pitanjeGost->setEmail($postData["email"]);
        
         
        

        $this->_em->persist($pitanjeGost);
        
        
        try {
          $this->_em->flush();
           
         
        }
        catch (Exception $e) {
           return ["success"=>false,"errors"=>['email'=>"Doslo je do greske prilikom pokusaja ubacivanja pitanja u bazu"]];
        }
        return ["success"=>true,"errors"=>[]];
             
    }
    
}
