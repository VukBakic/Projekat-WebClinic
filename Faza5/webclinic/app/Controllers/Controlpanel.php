<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Controlpanel extends BaseController
{
    public function panel_sluzbenik()
    {
       return view("sluzbenik\panel");
    }
    public function index(){
        $this->session = \Config\Services::session();
        $this->session->keepFlashdata('success');
        $authorization = service("authorization");
        if($authorization->isSluzbenik()){
         return redirect()->route("sluzbenik/controlpanel");
        }
        else if($authorization->isAdmin()){
            return redirect()->route("admin/controlpanel");
        }
        else if($authorization->isKlijent()){
            return redirect()->route("klijent/controlpanel");
        }else{
            return redirect()->route("/");
        }
    }
}