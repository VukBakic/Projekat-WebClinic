<?php

namespace App\Controllers;

use App\Models\Entities\Lekar;
use App\Models\Entities\Klijent;

class Register extends BaseController
{
	private function sendMail($klijent, $unhashedPassword){
		$email = \Config\Services::email();
		
		$email->setFrom('webclinic.dev@gmail.com', 'Web Clinic');
		$email->setTo($klijent->getIdklijent()->getEmail());
		$email->setMailType("html");
		$email->setSubject('Uspesna registracija');
	
		
		$email->setMessage(view("emails/register",[
			'ime'=>$klijent->getIdKlijent()->getIme(),
			'prezime'=>$klijent->getIdKlijent()->getPrezime(),
			'email'=>$klijent->getIdKlijent()->getEmail(),
			'sifra'=>$unhashedPassword,

		]));
		
	
		$email->send();
	}

	public function registerSluzbenikPage()
	{
		$repo = $this->doctrine->em->getRepository(Lekar::class);
		$lekari = $repo->dohvatiLekareOpstePrakse();
		
		helper('form');
		return view('register_page_sluzbenik', ["lekari"=>$lekari]);
	}

	public function registerSluzbenik()
	{
		
		$data = [
			'success' => true,
			'errors'=>NULL,
		];

		if (! $this->validate("signup"))
        {
			
			$data['success']=false;         
            $data['errors']=$this->validator->getErrors();
			return $this->response->setJSON($data);
            
        }else{
			$repo = $this->doctrine->em->getRepository(Klijent::class);
			$created = $repo->kreirajKlijenta($this->request->getPost());
			$this->sendMail($created["klijent"], $this->request->getPost('sifra'));
			
			return $this->response->setJSON($created);
		}
		
		
	}
	public function registerSluzbenik_backup()
	{
	
		$repo = $this->doctrine->em->getRepository(Lekar::class);
		$lekari = $repo->dohvatiLekareOpstePrakse();

		
		
		helper('form');
		if (! $this->validate("signup"))
        {
            echo view('register_page_sluzbenik', [
				"lekari"=>$lekari,
                'validation' => $this->validator,
            ]);
        }else{
			echo "123";
		}
		
	}
}
