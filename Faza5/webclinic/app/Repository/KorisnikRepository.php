<?php

namespace App\Repository;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

/**
 * KorisnikRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class KorisnikRepository extends \Doctrine\ORM\EntityRepository {

    public function getKorisnik($id) {

        return $this->find($id);
    }
    
    public function brisi($id){
         $user=$this->findOneBy(array('idk' => $id));
         $this->_em->remove($user);
         $this->_em->flush();
        
    }

    public function izmeni($id, $postData) {
        $forChange = $this->find($id);

        if ($postData["email"])
            $forChange->setEmail($postData["email"]);

        if ($postData["tel"])
            $forChange->setBrtel($postData["tel"]);

        try {
            $this->_em->flush();
        } catch (UniqueConstraintViolationException $e) {
            return ["success" => false, "errors" => ['email' => "Email je vec u upotrebi."]];
        }
        return ["success" => true, "errors" => []];
    }
    
    public function izmeniSvaPolja($id, $postData) {
        $forChange = $this->findOneBy(array('idk' => $id));

        if ($postData["email"])
            $forChange->setEmail($postData["email"]);

        if ($postData["tel"])
            $forChange->setBrtel($postData["tel"]);
        if ($postData["brlk"])
            $forChange->setBrlk($postData["brlk"]);

        if ($postData["jmbg"])
            $forChange->setJmbg($postData["jmbg"]);
        if ($postData["ime"])
            $forChange->setIme($postData["ime"]);
        if ($postData["prezime"])
            $forChange->setPrezime($postData["prezime"]);
        if ($postData["pol"])
            $forChange->setPol($postData["pol"]);

        try {
            $this->_em->flush();
        } catch (UniqueConstraintViolationException $e) {
            return ["success" => false, "errors" => ['email' => ""]];
        }
        return ["success" => true, "errors" => []];
    }

    public function dohvBrKorisnika() {

        $brKorisnika = $this->createQueryBuilder('a')
                ->select('count(a.idk)')
                ->getQuery()
                ->getSingleScalarResult();
        return $brKorisnika;
    }

    public function getAllUsers($page) {
        if (!$page)
            $page = 1;
        return $this->findBy(
                        array(),
                        array('idk' => 'DESC'),
                        4,
                        ($page - 1) * 4
        );
    }

    public function filter($parameters) {
        $qb= $this->createQueryBuilder();
        $korisnici = $qb->select('*')
                ->from('User', 'u')
                ->where('u.id = ?1')
                ->orderBy('u.name', 'ASC')
                ->setParameter(1, 100);
        return $korisnici;
    }

}
