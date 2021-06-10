<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of Logout
 *
 * @author winam
 */
class Logout extends BaseController {

    public function __construct() {

        $this->session = service('session');
        $this->auth = service('authentication');
    }

    public function logout() {
       
        $this->session->stop();
        $this->session->destroy();
        return redirect()->to('home');
    }

}
