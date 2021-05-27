<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class AlreadyLogged implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        
        $path =  $request->uri->getPath();
       
        
        if( session()->get('logged_in')){
            if($path == "login")
            return redirect()->to('/dashboard'); 
        }
    }
 
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}