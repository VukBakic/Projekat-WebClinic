<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



namespace App\Controllers;
use App\Models\Entities\Struka;
use App\Models\Entities\Pitanjeklijent;
use App\Models\Entities\Pitanjegost;


/**
 * Description of Questions
 *
 * @author Igor
 */
class Question extends BaseController {
    
    public function guestQuestionPage() {
        $repo = $this->doctrine->em->getRepository(Struka::class);
        $struka = $repo->dohvatiStruke();

        helper('form');
        
        return view('question_page_guest', ["struka" => $struka]);
        
    }
    
    public function guestSubmitQuestion() {
        $this->session = \Config\Services::session();
          $data = [
            'success' => true,
            'errors' => NULL,
        ];

        if (!$this->validate("guestquestion")) {

            $data['success'] = false;
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        } else {
            
            $repo = $this->doctrine->em->getRepository(Pitanjegost::class);
            $created = $repo->kreirajPitanjegost($this->request->getPost());
            

            return $this->response->setJSON($created);
        }

    }


    public function clientQuestionPage() {
        $repo = $this->doctrine->em->getRepository(Struka::class);
        $struka = $repo->dohvatiStruke();

        helper('form');
        
        return view('question_page_client', ["struka" => $struka]);
        
    }

    public function clientSubmitQuestion() {
        $this->session = \Config\Services::session();
        $data = [
            'success' => true,
            'errors' => NULL,
        ];

        if (!$this->validate("clientquestion")) {

            $data['success'] = false;
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        } else {
            
            $repo = $this->doctrine->em->getRepository(Pitanjeklijent::class);
            $created = $repo->kreirajPitanjeklijent($this->request->getPost(),$this->session->get('user_id'));
            

            return $this->response->setJSON($created);
        }
    }
    
    

}
