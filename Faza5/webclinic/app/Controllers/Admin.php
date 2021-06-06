<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Models\Entities\Struka;
use App\Models\Entities\Pitanjeklijent;
use App\Models\Entities\Pitanjegost;
use App\Models\Entities\Pitanje;
use App\Models\Entities\Lekar;
use App\Models\Entities\Korisnik;

/**
 * Description of Admin
 *
 * @author winam
 */
class Admin extends BaseController {

    public function usersPage($num) {
        $repo = $this->doctrine->em->getRepository(Korisnik::class);

        $korisnici = $repo->getAllUsers($num);
        $pager = \Config\Services::pager();

        return view('user_list', ['korisnici' => $korisnici, 'pager' => $pager,
            'brkorisnika' => $repo->dohvBrKorisnika(), 'num' => $num]);
    }

    public function userProfilPage() {
        //   $pitanje = new Pitanje;
        // dd($this->$pitanje->getImenaprezimena());
    }

    public function deleteUser() {
        $this->session = \Config\Services::session();
        $iduser = (int) substr_replace($this->request->getVar('idk'), "", -1);
        $repo = $this->doctrine->em->getRepository(Korisnik::class);
        
        if ($repo->getKorisnik($iduser)->getIduloge()->getNazivuloge() == 'Administrator') {
            
            $this->session->setFlashdata('errors', [
                'forbidden' => 'Nije dozvoljeno brisanje administratora.'
            ]);
           
            return redirect()->route('izmeni?idk=' . $idpit);
        } else {
            $repo->brisi($iduser);
            $this->session->setFlashdata("success", "Uspesno obrisan korisnik");
            return redirect()->route('korisnici');
        }
    }

     
    
     public function profileChangePage()
    {
        $this->session = \Config\Services::session();
        $iduser = (int) substr_replace($this->request->getVar('idk'), "", -1);
       
        $repo = $this->doctrine->em->getRepository(Korisnik::class);
        
        $korisnik=$repo->getKorisnik($iduser);
       
        
       helper('form');
        return view("admin_profile_change",['korisnik'=>$korisnik]);
    }

    public function submitChangeUser() {
       $this->session = \Config\Services::session();
       $iduserstr = substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], "=") + 1);
       $iduser=(int)substr_replace($iduserstr, "", -1);
       

        if (!$this->validate("admin_profile_change")) {

            $this->session->setFlashdata("errors", $this->validator->getErrors());

            return redirect()->to('/korisnici/izmeni?idk='.$iduserstr);
        } else {

            $repo = $this->doctrine->em->getRepository(Korisnik::class);
            $check = $repo->izmeniSvaPolja($iduser, $this->request->getPost());

            if ($check["errors"]) {
                $this->session->setFlashdata("errors", $check["errors"]);
                return redirect()->to('/korisnici/izmeni?idk='.$iduserstr);
            } else {
                $this->session->setFlashdata("success", "Uspesno ste izmenili profil.");
                return redirect()->to('/korisnici');
            }
        }
    }
    
       private function filterUsers(){
        
    }

}
