<?php

namespace App\Controllers;

use App\Models\Entities\Korisnik;
use App\Models\Entities\Linkovi;

class Resetpassword extends BaseController
{
	public function resetPassPage()
	{
		helper('form');
		return view('page_reset_password');
	}

	public function resetPassword()
	{
        $repo = $this->doctrine->em->getRepository(Korisnik::class);
		$korisnik = $repo->findOneBy(['email'=>$this->request->getPost("email")]);
        if($korisnik){
            $link = new Linkovi;
            $link->setIdKorisnik($korisnik);
            $token = md5($korisnik->getEmail().uniqid());
            $link->setToken($token);

            $this->doctrine->em->persist($link);
           
            $this->doctrine->em->flush();
        }
        return 123;
	}

    public function makeNewPasswordPage($token)
	{
		helper('form');
		return view('page_new_password', ["token"=>$token]);
	}
    public function makeNewPassword($token)
	{
        $this->session = \Config\Services::session();
        if (! $this->validate("passowrd_request"))
        {    
            $this->session->setFlashdata("errors",$this->validator->getErrors());
            return redirect()->to('/newpassword');
            
        }
		if($this->request->getPost("password")!=$this->request->getPost("password_confirm")){
            $this->session->setFlashdata("errors",["password"=>"Sifre se ne poklapaju"]);
            return redirect()->to('/newpassword');
        }
        $repo = $this->doctrine->em->getRepository(Linkovi::class);
        $link = $repo->findOneBy(['token'=>$token]);
        if($link){
            $time = $link->getDateAdded();
            $timeNow = date("Y-m-d H:i:s");
        }
        else{
            $this->session->setFlashdata("errors",["password"=>"Nevazeci token za promenu lozinke"]);
            return redirect()->to('/newpassword');
        }

        
	}
}
