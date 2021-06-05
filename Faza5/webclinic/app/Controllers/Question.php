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
use App\Models\Entities\Pitanje;
use App\Models\Entities\Lekar;
use App\Models\Entities\Korisnik;

/**
 * Description of Questions
 *
 * @author Igor
 */
class Question extends BaseController {

    public function questionPage($num) {
        $repo = $this->doctrine->em->getRepository(Pitanje::class);
        $lekarrep = $this->doctrine->em->getRepository(Lekar::class);
        $pitanja = $repo->getAllQuestions($num);
        $pager = \Config\Services::pager();

        return view('question_list', ['pitanja' => $pitanja, 'pager' => $pager,
            'brpitanja' => $repo->dohvBrPitanja(), 'num' => $num, 'lekarrep' => $lekarrep]);
    }

    public function guestQuestionPage() {
        //   $pitanje = new Pitanje;
        // dd($this->$pitanje->getImenaprezimena());

        $repo = $this->doctrine->em->getRepository(Struka::class);
        $struka = $repo->dohvatiStruke();

        helper('form');

        return view('question_page_guest', ["struka" => $struka]);
    }

    public function guestSubmitQuestion() {

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
            $created = $repo->kreirajPitanjeklijent($this->request->getPost(), $this->session->get('user_id'));

            return $this->response->setJSON($created);
        }
    }

    public function answerPage() {
        $this->session = \Config\Services::session();
        $idpitanje = $this->request->getVar('idpitanje');
        $pitanjerep = $this->doctrine->em->getRepository(Pitanje::class);
        $pitanje = $pitanjerep->getPitanjeById($idpitanje);

        $imeprezime = $pitanje->getImeprezimep();

        $lekarid = $this->session->get("user_id");

        $korisnikrep = $this->doctrine->em->getRepository(Korisnik::class);
        $korisnik = $korisnikrep->find($lekarid);

        $imelekara = 'Dr. ' . $korisnik->getIme() . ' ' . $korisnik->getPrezime();

        $oblast = $pitanje->getNazivstruke()->getNazivstruke();

        $tekstpitanja = $pitanje->getTekstpitanja();

        return view('question_answer', ['pitanje' => $pitanje, 'tekstpitanja' => $tekstpitanja, 'imeprezime' => $imeprezime, 'oblast' => $oblast, 'imelekara' => $imelekara]);
    }

    public function submitAnswer() {
        $this->session = \Config\Services::session();
        $repo = $this->doctrine->em->getRepository(Pitanje::class);
        $idpitanjestr = substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], "=") + 1);

        $idpit = (int) $idpitanjestr;

        if (!$this->validate("answer")) {

            $this->session->setFlashdata("errors", $this->validator->getErrors());
            return redirect()->to('odgovaranje?idpitanje='.$idpit);
        } else {




            $lekarid = $this->session->get("user_id");
            $repolek = $this->doctrine->em->getRepository(Lekar::class);
            $lekar = $repolek->findOneBy(array('idlekar' => $lekarid));
            $data = array("idpitanje" => $idpit, "lekar" => $lekar);
            $repo->dodajOdgovor($this->request->getPost(), $data);
            $this->session->setFlashdata("success", "Uspesno ste odgovorili na pitanje");
            return redirect()->route('pitanja');
        }
    }

}
