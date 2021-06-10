<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminSluzbenik implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!service('authorization')->isAdmin() && !service('authorization')->isSluzbenik()){
            return redirect()->to(site_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}