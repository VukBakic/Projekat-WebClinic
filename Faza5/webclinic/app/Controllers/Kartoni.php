<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Entities\Klijent;
use App\Models\Entities\Stavkakartona;
use App\Models\Entities\Usluga;

class kartoni extends BaseController
{
    public function list($pageNum=1)
    {
        helper('form');
        $this->session = \Config\Services::session();
        $lekar_id = $this->session->get("user_id");
        $klijentRepo = service("doctrine")->em->getRepository(Klijent::class);
        $pager = \Config\Services::pager();


        
        return view("lekar\list", [
            "klijenti"=>$klijentRepo->dohvatiKlijenteLekara(
                    $lekar_id,
                    2,
                    ($pageNum - 1) * 2,
                    $this->request->getGet()
            ),
            "pager"=>$pager,
            "count"=>$klijentRepo->countKlijenteLekara( $lekar_id,  $this->request->getGet()),
            "currentPage"=>$pageNum
            ]
        );
    }

    public function karton($idKlijent,$pageNum = 1){
        $this->session = \Config\Services::session();
        $lekar_id = $this->session->get("user_id");
        $klijentRepo = service("doctrine")->em->getRepository(Klijent::class);
        $klijent = $klijentRepo->findOneBy(["idklijent"=>$idKlijent]);
        $pager = \Config\Services::pager();

        if(!$klijent){
            return redirect()->to(site_url()."lekar/kartoni/1");
        }
        if($klijent->getIzabranilekar()->getIdlekar()->getIdk()==$lekar_id){

            $kartonRepo = service("doctrine")->em->getRepository(Stavkakartona::class);
            $stavke = $kartonRepo->findBy(
                ["idklijent" => $idKlijent],
                array('datumvreme' => 'DESC'),
                2,
                ($pageNum - 1) * 2

            );
            
            return view("lekar\karton",[
                "klijent"=>$klijent->getIdKlijent(),
                "stavke"=>$stavke,
                "pager"=>$pager,
                "count" => $kartonRepo->countStavkeById($idKlijent),
                "currentPage"=>$pageNum,
            ]);
        }
        else{
            return redirect()->to(site_url()."lekar/kartoni/1");
        }

    }

    public function dodajPage($idKlijent){
        helper('form');
        $this->session = \Config\Services::session();
        $lekar_id = $this->session->get("user_id");
        $klijentRepo = service("doctrine")->em->getRepository(Klijent::class);
        $uslugaRepo = service("doctrine")->em->getRepository(Usluga::class);
        $klijent = $klijentRepo->findOneBy(["idklijent"=>$idKlijent]);
        if(!$klijent){
            return redirect()->to(site_url()."lekar/kartoni/1");
        }
        if($klijent->getIzabranilekar()->getIdlekar()->getIdk()==$lekar_id){
            return view("lekar\dodaj_stavku", [
                "klijent"=>$klijent->getIdKlijent(),     
                "usluge"=> $uslugaRepo->getUslugeByStruka($klijent->getIzabranilekar()->getNazivstruke())              
            ]);

        }
        else{
            return redirect()->to(site_url()."lekar/kartoni/1");
        }
    }

    public function dodaj(){
        $this->session = \Config\Services::session();
        $lekar_id = $this->session->get("user_id");
        $klijentRepo = service("doctrine")->em->getRepository(Klijent::class);
        $klijent = $klijentRepo->findOneBy(["idklijent"=>intval($this->request->getPost("id"))]);
        if(!$klijent){
            return redirect()->to(site_url()."lekar/kartoni/1");
        }

        if($klijent->getIzabranilekar()->getIdlekar()->getIdk()==$lekar_id){
            if (! $this->validate("stavka_kartona")){
                $this->session->setFlashdata("errors", $this->validator->getErrors());
                return redirect()->to(site_url()."lekar/karton/dodaj/".$this->request->getPost("id"));
            }
            $kartonRepo = service("doctrine")->em->getRepository(Stavkakartona::class);
            $kartonRepo->dodajStavku($this->request->getPost(), $lekar_id);

            $this->session->setFlashdata("success", "Pregled je uspesno obavljen.");
            return redirect()->to(site_url()."lekar/karton/".$this->request->getPost("id")."/1");

        }
        else{
            return redirect()->to(site_url()."lekar/kartoni/1");
        }
       
    }
}