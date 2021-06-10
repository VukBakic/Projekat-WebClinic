<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Entities\Klijent;
use App\Models\Entities\Stavkakartona;

class kartoni extends BaseController
{
    public function list($pageNum=1)
    {
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

    public function karton($idKlijent,$page = 1){
        $this->session = \Config\Services::session();
        $lekar_id = $this->session->get("user_id");
        $klijentRepo = service("doctrine")->em->getRepository(Klijent::class);
        $klijent = $klijentRepo->findOneBy(["idklijent"=>$idKlijent]);
        if(!$klijent){
            return redirect()->to(site_url()."lekar/kartoni/1");
        }
        if($klijent->getIzabranilekar()->getIdlekar()->getIdk()==$lekar_id){

            $kartonRepo = service("doctrine")->em->getRepository(Stavkakartona::class);
            $stavke = $kartonRepo->findBy(["idklijent" => $idKlijent]);
            
            return view("lekar\karton",[
                "klijent"=>$klijent->getIdKlijent(),
                "stavke"=>$stavke
            ]);
        }
        else{
            return redirect()->to(site_url()."lekar/kartoni/1");
        }

    }
}