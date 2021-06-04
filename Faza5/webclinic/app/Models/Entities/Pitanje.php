<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;
use App\Models\Entities\Pitanje;
use App\Models\Entities\Pitanjeklijent;
use App\Models\Entities\Pitanjegost;
use App\Models\Entities\Klijent;
use App\Models\Entities\Korisnik;


/**
 * Pitanje
 *
 * @ORM\Table(name="pitanje", indexes={@ORM\Index(name="R_33", columns={"nazivStruke"}), @ORM\Index(name="R_40", columns={"idLekar"})})
 * @ORM\Entity(repositoryClass="App\Repository\PitanjeRepository")
 */
class Pitanje {
    
    

    /**
     * @var int
     *
     * @ORM\Column(name="idPitanje", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpitanje;

    /**
     * @var string|null
     *
     * @ORM\Column(name="odgovor", type="text", length=16777215, nullable=true)
     */
    private $odgovor;

    /**
     * @var string
     *
     * @ORM\Column(name="naslov", type="string", length=20, nullable=false)
     */
    private $naslov;

    /**
     * @var string
     *
     * @ORM\Column(name="tekstPitanja", type="text", length=16777215, nullable=false)
     */
    private $tekstpitanja;

    /**
     * @var \App\Models\Entities\Struka
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Struka")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nazivStruke", referencedColumnName="nazivStruke")
     * })
     */
    private $nazivstruke;

    /**
     * @var \App\Models\Entities\Lekar
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Lekar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLekar", referencedColumnName="idLekar")
     * })
     */
    private $idlekar;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @ORM\Version
     */
    private $datumvreme;

    /**
     * @var string
     *
     * @ORM\Column(name="gostpitao", type="boolean", nullable=false)
     */
    private $gostpitao;

    public function getImeprezimep() {
        $imeprezime = '';
       
        if ($this->gostpitao) {
           
            $rep = service('doctrine')->em->getRepository(Pitanjegost::class);
            $pitanjegost = $rep->find($this->idpitanje); //findOneBy(array('idpitanje' => $this->idpitanje));
            $imeprezime = $pitanjegost->getImeprezime();
        } else {
            $rep = service('doctrine')->em->getRepository(Pitanjeklijent::class);
            $pitanjeklijent = $rep->find($this->idpitanje); //findOneBy(array('idpitanje' => $this->idpitanje));
            $korisnikrep = service('doctrine')->em->getRepository(Korisnik::class);
            $korisnik = $korisnikrep->find($pitanjeklijent->getIdklijent()); //findOneBy(array('idk' => $pitanjeklijent->getIdklijent()));
            $ime = $korisnik->getIme();
            $prezime = $korisnik->getPrezime();
            $imeprezime = $ime . ' ' . $prezime;
        }

        return $imeprezime;
    }

    public function getGostpitao() {
        return $this->gostpitao;
    }

    public function setGostpitao($gostpitao): void {
        $this->gostpitao = $gostpitao;
    }

    /**
     * Get idpitanje.
     *
     * @return int
     */
    public function getIdpitanje() {
        return $this->idpitanje;
    }

    /**
     * Set odgovor.
     *
     * @param string|null $odgovor
     *
     * @return Pitanje
     */
    public function setOdgovor($odgovor = null) {
        $this->odgovor = $odgovor;

        return $this;
    }

    /**
     * Get odgovor.
     *
     * @return string|null
     */
    public function getOdgovor() {
        return $this->odgovor;
    }

    /**
     * Set naslov.
     *
     * @param string $naslov
     *
     * @return Pitanje
     */
    public function setNaslov($naslov) {
        $this->naslov = $naslov;

        return $this;
    }

    /**
     * Get naslov.
     *
     * @return string
     */
    public function getNaslov() {
        return $this->naslov;
    }

    /**
     * Set tekstpitanja.
     *
     * @param string $tekstpitanja
     *
     * @return Pitanje
     */
    public function setTekstpitanja($tekstpitanja) {
        $this->tekstpitanja = $tekstpitanja;

        return $this;
    }

    /**
     * Get tekstpitanja.
     *
     * @return string
     */
    public function getTekstpitanja() {
        return $this->tekstpitanja;
    }

    /**
     * Set nazivstruke.
     *
     * @param \App\Models\Entities\Struka|null $nazivstruke
     *
     * @return Pitanje
     */
    public function setNazivstruke(\App\Models\Entities\Struka $nazivstruke = null) {
        $this->nazivstruke = $nazivstruke;

        return $this;
    }

    /**
     * Get nazivstruke.
     *
     * @return \App\Models\Entities\Struka|null
     */
    public function getNazivstruke() {
        return $this->nazivstruke;
    }

    /**
     * Set idlekar.
     *
     * @param \App\Models\Entities\Lekar|null $idlekar
     *
     * @return Pitanje
     */
    public function setIdlekar(\App\Models\Entities\Lekar $idlekar = null) {
        $this->idlekar = $idlekar;

        return $this;
    }

    /**
     * Get idlekar.
     *
     * @return \App\Models\Entities\Lekar|null
     */
    public function getIdlekar() {
        return $this->idlekar;
    }

    public function getImeprezimelekara() {
        
        if ($this->idlekar != null) {
            
            
            $korisnikrep = service('doctrine')->em->getRepository(Korisnik::class);
            $korisnik=$korisnikrep->find($this->idlekar);
            return 'Dr. ' . $korisnik->getIme() . ' ' . $korisnik->getPrezime();
        }
        return '-Nije odgovoreno-';
    }

}
