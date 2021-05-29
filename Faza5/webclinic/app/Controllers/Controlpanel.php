<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Controlpanel extends BaseController
{
    public function panel_sluzbenik()
    {
       return view("sluzbenik\panel");
    }
}