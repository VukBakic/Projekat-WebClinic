<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



namespace App\Controllers;
use App\Models\Entities\Struka;

/**
 * Description of Questions
 *
 * @author Igor
 */
class Question extends BaseController {


    public function clientQuestionPage() {
        $repo = $this->doctrine->em->getRepository(Struka::class);
        $struka = $repo->dohvatiStruke();

        helper('form');
        
        return view('question_page_client', ["struka" => $struka]);
        
    }

    public function clientSubmitQuestion() {

        $data = [
            'success' => true,
            'errors' => NULL,
        ];

        if (!$this->validate("clientquestion")) {

            $data['success'] = false;
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        } else {
            
            $repo = $this->doctrine->em->getRepository(Pitanje::class);
            $created = $repo->kreirajPitanje($this->request->getPost(),$this->session->get('user_id'));
            

            return $this->response->setJSON($created);
        }
    }
    
    public function guestSubmitQuestion() {

    }

}
