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
            $this->sendMail($korisnik, $token);
          
        }
        $this->session = \Config\Services::session();
        $this->session->setFlashdata("success","Ukoliko email adresa odgovara nalogu u WebClinici, dobicete email sa uputstvom za povratak lozinke.");
        return redirect()->to('/resetpassword');
	}

    public function makeNewPasswordPage($token)
	{
		helper('form');
		return view('page_new_password', ["token"=>$token]);
	}
    public function makeNewPassword($token)
	{
        $this->session = \Config\Services::session();
        if (! $this->validate("new_password"))
        {    
            $this->session->setFlashdata("errors",$this->validator->getErrors());
            return redirect()->to('/newpassword/'.$token);
            
        }
		if($this->request->getPost("password")!=$this->request->getPost("password_confirm")){
            $this->session->setFlashdata("errors",["password"=>"Sifre se ne poklapaju"]);
            return redirect()->to('/newpassword/'.$token);
        }
        $repo = $this->doctrine->em->getRepository(Linkovi::class);
        $link = $repo->findOneBy(['token'=>$token]);
        if($link){
            $time = $link->getDateAdded();
            $timezone    = new \DateTimeZone('Europe/Rome');
            $timeNow = new \DateTime("now", $timezone);
            $diff = $timeNow->diff($time);
            $mins = ($diff->d * 24 * 60) + ($diff->h * 60) + $diff->i;;
            if($mins>15){
                $this->session->setFlashdata("errors",["password"=>"Link za promenu lozinke je istekao"]);
                return redirect()->to('/newpassword/'.$token);
            }else{
                $korisnik = $link->getIdKorisnik();
                $korisnik->setSifra(password_hash($this->request->getPost("password"), PASSWORD_DEFAULT));
                service("doctrine")->em->persist($korisnik);
                service("doctrine")->em->flush();
                $this->session->setFlashdata("success","Vasa lozinka je uspesno promenjena");
                return redirect()->route('/');

            }
        }
        else{
            $this->session->setFlashdata("errors",["password"=>"Nevazeci token za promenu lozinke"]);
            return redirect()->to('/newpassword/'.$token);
        }

        
	}

    private function sendMail($korisnik, $token){
     
		$email = \Config\Services::email();
		
		$email->setFrom('webclinic.dev@gmail.com', 'Web Clinic');
		$email->setTo($korisnik->getEmail());
		$email->setMailType("html");
		$email->setSubject('Promena lozinke');
	
		
		$email->setMessage(view("emails/resetlink",[
			'url'=>site_url('newpassword/'.$token)
		]));
		
	
		$email->send();
	}
}
