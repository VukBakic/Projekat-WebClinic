<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Korisnik
 *
 * @ORM\Table(name="korisnik")
 * @ORM\Entity
 */
class Korisnik
{
    /**
     * @var int
     *
     * @ORM\Column(name="idK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idk;

    /**
     * @var string
     *
     * @ORM\Column(name="korisnickoIme", type="string", length=20, nullable=false)
     */
    private $korisnickoime;

    /**
     * @var string
     *
     * @ORM\Column(name="sifra", type="string", length=200, nullable=false)
     */
    private $sifra;

    /**
     * @var string
     *
     * @ORM\Column(name="ime", type="string", length=20, nullable=false)
     */
    private $ime;

    /**
     * @var string
     *
     * @ORM\Column(name="prezime", type="string", length=20, nullable=false)
     */
    private $prezime;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="jmbg", type="string", length=13, nullable=false)
     */
    private $jmbg;

    /**
     * @var string
     *
     * @ORM\Column(name="brLk", type="string", length=12, nullable=false)
     */
    private $brlk;

    /**
     * @var string
     *
     * @ORM\Column(name="pol", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $pol;

    /**
     * @var string
     *
     * @ORM\Column(name="brTel", type="string", length=20, nullable=false)
     */
    private $brtel;



    /**
     * Get idk.
     *
     * @return int
     */
    public function getIdk()
    {
        return $this->idk;
    }

    /**
     * Set korisnickoime.
     *
     * @param string $korisnickoime
     *
     * @return Korisnik
     */
    public function setKorisnickoime($korisnickoime)
    {
        $this->korisnickoime = $korisnickoime;

        return $this;
    }

    /**
     * Get korisnickoime.
     *
     * @return string
     */
    public function getKorisnickoime()
    {
        return $this->korisnickoime;
    }

    /**
     * Set sifra.
     *
     * @param string $sifra
     *
     * @return Korisnik
     */
    public function setSifra($sifra)
    {
        $this->sifra = $sifra;

        return $this;
    }

    /**
     * Get sifra.
     *
     * @return string
     */
    public function getSifra()
    {
        return $this->sifra;
    }

    /**
     * Set ime.
     *
     * @param string $ime
     *
     * @return Korisnik
     */
    public function setIme($ime)
    {
        $this->ime = $ime;

        return $this;
    }

    /**
     * Get ime.
     *
     * @return string
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * Set prezime.
     *
     * @param string $prezime
     *
     * @return Korisnik
     */
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;

        return $this;
    }

    /**
     * Get prezime.
     *
     * @return string
     */
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Korisnik
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set jmbg.
     *
     * @param string $jmbg
     *
     * @return Korisnik
     */
    public function setJmbg($jmbg)
    {
        $this->jmbg = $jmbg;

        return $this;
    }

    /**
     * Get jmbg.
     *
     * @return string
     */
    public function getJmbg()
    {
        return $this->jmbg;
    }

    /**
     * Set brlk.
     *
     * @param string $brlk
     *
     * @return Korisnik
     */
    public function setBrlk($brlk)
    {
        $this->brlk = $brlk;

        return $this;
    }

    /**
     * Get brlk.
     *
     * @return string
     */
    public function getBrlk()
    {
        return $this->brlk;
    }

    /**
     * Set pol.
     *
     * @param string $pol
     *
     * @return Korisnik
     */
    public function setPol($pol)
    {
        $this->pol = $pol;

        return $this;
    }

    /**
     * Get pol.
     *
     * @return string
     */
    public function getPol()
    {
        return $this->pol;
    }

    /**
     * Set brtel.
     *
     * @param string $brtel
     *
     * @return Korisnik
     */
    public function setBrtel($brtel)
    {
        $this->brtel = $brtel;

        return $this;
    }

    /**
     * Get brtel.
     *
     * @return string
     */
    public function getBrtel()
    {
        return $this->brtel;
    }
}
