<?php

namespace App\Controllers;

use App\Models\Entities;


class Login extends BaseController
{
	public function loginPage2()
	{
		return view('login_page');
	}
	public function loginPage(){
		$session = session();
        $model = new Entities\Korisnik;

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
		
		$repo =$this->doctrine->em->getRepository(Entities\Korisnik::class);
	
	
		
		
		
		
        $data = $repo->findOneBy(array('email' => $email));
		

        if($data){
            $pass = $data->getSifra();
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data->getIdk,
                    'user_name'     => $data->getIme,
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
		
	}
}
