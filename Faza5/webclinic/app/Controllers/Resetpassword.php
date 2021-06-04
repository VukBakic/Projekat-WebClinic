<?php

namespace App\Controllers;

use App\Models\Entities\Korisnik;

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
            
        }

	}
}
