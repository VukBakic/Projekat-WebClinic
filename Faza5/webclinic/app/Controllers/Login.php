<?php

namespace App\Controllers;




class Login extends BaseController
{
    public function __construct()
	{
		
		$this->session = service('session');
		$this->auth = service('authentication');
	}

	public function loginPage()
	{
       
        helper('form');
		return view('login_page');
	}
	public function loginUser(){
		$session = session();
       

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
		
        $authenticate = $this->auth->authenticate(array('email' => $email, 'password'=> $password));
		

        if($authenticate){
            $session->setFlashdata('success','Uspesno ste se ulogovali.');
            return redirect()->to('/home');
        }else{
            $session->setFlashdata('email',$email);
            $session->setFlashdata('errors',["error"=> 'Pogresan email ili lozinka.']);
    
            return redirect()->to('/login');
        }
       
		
	}
    public function test(){
        
    }
}
