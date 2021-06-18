<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Entities\Korisnik;
use PHPUnit\Framework\Constraint\IsTrue;

class Profile extends BaseController {

    public function profile_page() {
        $this->session = \Config\Services::session();
        $repo = $this->doctrine->em->getRepository(Korisnik::class);
        $korisnik = $repo->getKorisnik($this->session->get('user_id'));

        return view("profile", ['korisnik' => $korisnik]);
    }

    public function profile_change_page() {
        helper('form');
        $this->session = \Config\Services::session();
        $repo = $this->doctrine->em->getRepository(Korisnik::class);
        $korisnik = $repo->getKorisnik($this->session->get('user_id'));

        return view("profile_change", ['korisnik' => $korisnik]);
    }

    public function change_profile() {
        $this->session = \Config\Services::session();

        if (!$this->validate("profile_change")) {

            $this->session->setFlashdata("errors", $this->validator->getErrors());

            return redirect()->to('/profile/change');
        } else {

            $repo = $this->doctrine->em->getRepository(Korisnik::class);
            $check = $repo->izmeni($this->session->get("user_id"), $this->request->getPost());

            if ($check["errors"]) {
                $this->session->setFlashdata("errors", $check["errors"]);
                return redirect()->to('/profile/change');
            } else {
                
               
                $this->session->setFlashdata("success", "Uspesno ste promenili email adresu.");
                return redirect()->to('/profile');
            }
        }
    }

    public function profile_change_password_page() {
        helper('form');
        $this->session = \Config\Services::session();
        return view("profile_change_password");
    }


    public function profile_change_password() {
        $this->session = \Config\Services::session();

        if (!$this->validate("new_password")) {

            $this->session->setFlashdata("errors", $this->validator->getErrors());

            return redirect()->to('/profile/changepassword');
        } else {

           

            $repo = $this->doctrine->em->getRepository(Korisnik::class);
            $check = $repo->izmeniSifru($this->session->get("user_id"), $this->request->getPost());

            if ($check["errors"]) {
                $this->session->setFlashdata("errors", $check["errors"]);
                return redirect()->to('/profile/changepassword');
            } else {
                $this->session->setFlashdata("success", "Uspesno ste promenili sifru.");
                return redirect()->to('/profile');
            }
        }
    }
    private function saveImage($id, $file){
       

        if (!$file->isValid()) return false;
        $ext = $file->getExtension();
        $file->move(ROOTPATH.'public/uploads/avatars',$id.".". $ext , true);
        
        $image = \Config\Services::image()
        ->withFile(ROOTPATH."public\uploads\avatars\\".$id.".". $ext )
        ->fit(200, 200, 'center')
        ->save(ROOTPATH."public\uploads\avatars\\thumbs\\".$id.".". $ext );

    }

}
