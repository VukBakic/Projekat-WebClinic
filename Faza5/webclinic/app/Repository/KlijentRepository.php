<?php

namespace App\Repository;

use App\Models\Entities\Korisnik;
use App\Models\Entities\Uloge;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

/**
 * KlijentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class KlijentRepository extends \Doctrine\ORM\EntityRepository
{
    public function kreirajKlijenta($postData){
        $korisnik = new Korisnik;
        $korisnik->setSifra($postData["sifra"]);
        $korisnik->setIme($postData["ime"]);
        $korisnik->setPrezime($postData["prezime"]);
        $korisnik->setJmbg($postData["jmbg"]);
        $korisnik->setBrlk($postData["lk"]);
        $korisnik->setPol($postData["pol"]);
        $korisnik->setBrtel($postData["tel"]);
        $korisnik->setEmail($postData["email"]);
        $klijentRepo = service("doctrine")->em->getRepository(Uloge::class);
        $uloga = $klijentRepo->findOneby(['nazivuloge'=>'Klijent']);
        $korisnik->setIduloge($uloga);

        $this->_em->persist($korisnik);
        try {
          $this->_em->flush();
        }
        catch (UniqueConstraintViolationException $e) {
           return ["success"=>false,"errors"=>"Email je vec u upotrebi."];
        }
        return ["success"=>true,"errors"=>[]];
        var_dump($korisnik);
   
     
        
    }
}