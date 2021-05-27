<?php

namespace App\Controllers;

use App\Models\Entities\Lekar;

class Register extends BaseController
{
	public function registerSluzbenikPage()
	{
		$repo = $this->doctrine->em->getRepository(Lekar::class);
		var_dump($repo->dohvatiLekareOpstePrakse());
	
		helper('form');
		return view('register_page_sluzbenik');
	}
}
