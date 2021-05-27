<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pitanjegost
 *
 * @ORM\Table(name="pitanjegost")
 * @ORM\Entity
 */
class Pitanjegost
{
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
     * @var \App\Models\Entities\Pitanje
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Pitanje")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPitanje", referencedColumnName="idPitanje")
     * })
     */
    private $idpitanje;



    /**
     * Set ime.
     *
     * @param string $ime
     *
     * @return Pitanjegost
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
     * @return Pitanjegost
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
     * @return Pitanjegost
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
     * Set idpitanje.
     *
     * @param \App\Models\Entities\Pitanje $idpitanje
     *
     * @return Pitanjegost
     */
    public function setIdpitanje(\App\Models\Entities\Pitanje $idpitanje)
    {
        $this->idpitanje = $idpitanje;

        return $this;
    }

    /**
     * Get idpitanje.
     *
     * @return \App\Models\Entities\Pitanje
     */
    public function getIdpitanje()
    {
        return $this->idpitanje;
    }
}
