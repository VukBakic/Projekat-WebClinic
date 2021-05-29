<?php

namespace App\Controllers;

use App\Models\Entities\Lekar;
use App\Models\Entities\Klijent;

class Register extends BaseController
{
	public function registerSluzbenikPage()
	{
		$repo = $this->doctrine->em->getRepository(Lekar::class);
		$lekari = $repo->dohvatiLekareOpstePrakse();
		
		helper('form');
		return view('register_page_sluzbenik', ["lekari"=>$lekari]);
	}

	public function registerSluzbenik()
	{
		$repo = $this->doctrine->em->getRepository(Klijent::class);
		$created = $repo->kreirajKlijenta($this->request->getPost());
		
		helper('form');
		$data = [
			'success' => true,
			'errors'=>NULL,
		];

		if (! $this->validate("signup"))
        {
			
			$data['success']=false;         
            $data['errors']=$this->validator->getErrors();
            
        }
		return $this->response->setJSON($created);
		
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
