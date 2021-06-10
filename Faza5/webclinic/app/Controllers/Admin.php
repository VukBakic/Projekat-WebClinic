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
use App\Models\Entities\KorisnikRepository;
use App\Models\Entities\Uloge;
use App\Models\Entities\UlogeRepository;

/**
 * Description of Admin
 *
 * @author Igor 702/17
 */
class Admin extends BaseController {

    public function usersPage($num, $korisnici = null) {
        helper('form');
        $repo = $this->doctrine->em->getRepository(Korisnik::class);

        if ($korisnici == null) {
            $korisnici = $repo->getAllUsers($num);
        }
        $pager = \Config\Services::pager();

        return view('user_list', ['korisnici' => $korisnici, 'pager' => $pager,
            'brkorisnika' => $repo->dohvBrKorisnika(), 'num' => $num]);
    }

    public function deleteUser() {
        $this->session = \Config\Services::session();
        $iduser = (int) substr_replace($this->request->getVar('idk'), "", -1);
        $repo = $this->doctrine->em->getRepository(Korisnik::class);

        if ($repo->getKorisnik($iduser)->getIduloge()->getNazivuloge() == 'Administrator') {

            $this->session->setFlashdata('errors', [
                'forbidden' => 'Nije dozvoljeno brisanje administratora.'
            ]);

            return redirect()->route('izmeni?idk=' . $idk);
        } else {
            $repo->brisi($iduser);
            $this->session->setFlashdata("success", "Uspesno obrisan korisnik");
            return redirect()->route('korisnici');
        }
    }

    public function profileChangePage() {
        $this->session = \Config\Services::session();
        $iduser = (int) substr_replace($this->request->getVar('idk'), "", -1);

        $repo = $this->doctrine->em->getRepository(Korisnik::class);

        $korisnik = $repo->getKorisnik($iduser);

        helper('form');
        return view("admin_profile_change", ['korisnik' => $korisnik]);
    }

    public function submitChangeUser() {
        $this->session = \Config\Services::session();
        $iduserstr = substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], "=") + 1);
        $iduser = (int) substr_replace($iduserstr, "", -1);

        if (!$this->validate("admin_profile_change")) {

            $this->session->setFlashdata("errors", $this->validator->getErrors());

            return redirect()->to('/korisnici/izmeni?idk=' . $iduserstr);
        } else {

            $repo = $this->doctrine->em->getRepository(Korisnik::class);
            $check = $repo->izmeniSvaPolja($iduser, $this->request->getPost());

            if ($check["errors"]) {
                $this->session->setFlashdata("errors", $check["errors"]);
                return redirect()->to('/korisnici/izmeni?idk=' . $iduserstr);
            } else {
                $this->session->setFlashdata("success", "Uspesno ste izmenili profil.");
                return redirect()->to('/korisnici');
            }
        }
    }

    public function filterUsers($num = 1) {
        helper('form');
        $pager = \Config\Services::pager();
        $podaci = array();
        $ime = $this->request->getVar('name');
        $prezime = $this->request->getVar('surname');
        $jmbg = $this->request->getVar('idn');

        $iduloga = (int) ($this->request->getVar('vrsta'));

        if ($ime != "")
            $podaci["ime"] = $ime;

        if ($prezime != "")
            $podaci["prezime"] = $prezime;

        if ($jmbg != "")
            $podaci["jmbg"] = $jmbg;

        if ($iduloga != -1) {
            $repo = $this->doctrine->em->getRepository(Uloge::class);
            $uloga = $repo->find($iduloga);
            $podaci["iduloge"] = $uloga;
        }

        $korrep = $this->doctrine->em->getRepository(Korisnik::class);
        $korisnici = $korrep->findBy(
                $podaci,
                array('jmbg' => 'DESC'),
                4,
                ($num - 1) * 4
        );

        return view('user_list', ['korisnici' => $korisnici, 'pager' => $pager,
            'brkorisnika' => count($korisnici), 'num' => $num]);
    }

}
