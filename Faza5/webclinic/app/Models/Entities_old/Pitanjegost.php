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
     * @var int
     *
     * @ORM\Column(name="idPitanje", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpitanje;

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
     * Get idpitanje.
     *
     * @return int
     */
    public function getIdpitanje()
    {
        return $this->idpitanje;
    }

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
}
