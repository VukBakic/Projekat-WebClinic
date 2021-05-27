<?php 

namespace App\Libraries;


use App\Models\Entities\Korisnik;

class Authentication
{
    private $korisnik;
    private static $korisnikModel;

    public function __construct()
    {
        static::$korisnikModel = service("doctrine")->em->getRepository(Korisnik::class);
    }
    
    public function login(Korisnik $korisnik=null): bool
    {
        if (empty($korisnik))
        {
            $this->korisnik = null;
            return false;
        }
        

        $this->korisnik = $korisnik;

        $ses_data = [
            'user_id'       => $this->korisnik->getIdk(),
            'user_name'     => $this->korisnik->getIme(),
            'user_email'    => $this->korisnik->getEmail(),
            'logged_in'     => TRUE
        ];
        session()->set($ses_data);
        service('response')->noCache();
        return true;
    }
    
    public function validate(array $credentials){
        if (empty($credentials['email']) || empty($credentials['password']))
        {
            return NULL;
        }

        $data = self::$korisnikModel->findOneBy(array('email' => $credentials['email']));
		

        if($data){
            $pass = $data->getSifra();
           
            $verify_pass = password_verify($credentials['password'], $pass);

            if($verify_pass){
                return $data;
            }else{
                return NULL;
            }
        }else{
            return NULL;
        }


    }

    public function authenticate(array $credentials): bool{
        $korisnik = $this->validate($credentials);
        if($korisnik){
            return $this->login($korisnik);
        }else{
            return false;
        }

    }
}