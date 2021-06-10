<?php
namespace App\Controllers;

use App\Models\Entities\Lekar;
use App\Models\Entities\Klijent;
use App\Models\Entities\Struka;
use App\Models\Entities\Sluzbenik;

class Register extends BaseController {

    private function sendMail($korisnik, $unhashedPassword) {
        $email = \Config\Services::email();

        $email->setFrom('webclinic.dev@gmail.com', 'Web Clinic');
        $email->setTo($korisnik->getEmail());
        $email->setMailType("html");
        $email->setSubject('Uspesna registracija');

        $email->setMessage(view("emails/register", [
            'ime' => $korisnik->getIme(),
            'prezime' => $korisnik->getPrezime(),
            'email' => $korisnik->getEmail(),
            'sifra' => $unhashedPassword,
        ]));

        $email->send();
    }

    public function registerKorisnikPage() {
        $repo = $this->doctrine->em->getRepository(Lekar::class);
        $lekari = $repo->dohvatiLekareOpstePrakse();

        helper('form');
        return view('register_page_korisnik', ["lekari" => $lekari]);
    }

    public function registerKorisnik() {
        $this->session = \Config\Services::session();
        $data = [
            'success' => true,
            'errors' => NULL,
        ];

        if (!$this->validate("signup")) {

            $data['success'] = false;
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        } else {
            $repo = $this->doctrine->em->getRepository(Klijent::class);
            $created = $repo->kreirajKlijenta($this->request->getPost());
            if ($created['success']) {
                $this->sendMail($created["klijent"]->getIdKlijent(), $this->request->getPost('sifra'));
                $this->session->setFlashdata("success", "Uspesno ste kreirali nalog klijentu.");
            }

            return $this->response->setJSON($created);
        }
    }

    public function registerLekarPage() {
        $repo = $this->doctrine->em->getRepository(Struka::class);
        $struke = $repo->dohvatiStruke();

        helper('form');
        return view('register_page_lekar', ["struke" => $struke]);
    }

    public function registerLekar() {
        $this->session = \Config\Services::session();
        $data = [
            'success' => true,
            'errors' => NULL,
        ];

        if (!$this->validate("signup")) {

            $data['success'] = false;
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        } else {
            $repo = $this->doctrine->em->getRepository(Lekar::class);
            $created = $repo->kreirajLekara($this->request->getPost());
            if ($created['success']) {
                $this->sendMail($created["klijent"]->getIdLekar(), $this->request->getPost('sifra'));
                $this->session->setFlashdata("success", "Uspesno ste kreirali nalog lekaru.");
            }

            return $this->response->setJSON($created);
        }
    }

    public function registerSluzbenikPage() {
        helper('form');
        return view('register_page_sluzbenik');
    }

    public function registerSluzbenik() {
        $this->session = \Config\Services::session();
        $data = [
            'success' => true,
            'errors' => NULL,
        ];

        if (!$this->validate("signup")) {

            $data['success'] = false;
            $data['errors'] = $this->validator->getErrors();
            return $this->response->setJSON($data);
        } else {
            $repo = $this->doctrine->em->getRepository(Sluzbenik::class);
            $created = $repo->kreirajSluzbenika($this->request->getPost());

            if ($created['success']) {
                $this->sendMail($created["klijent"], $this->request->getPost('sifra'));
                $this->session->setFlashdata("success", "Uspesno ste kreirali nalog sluzbeniku.");
            }

            return $this->response->setJSON($created);
        }
    }

}


