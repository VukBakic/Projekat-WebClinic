<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linkovi
 *
 * @ORM\Table(name="linkovi", indexes={@ORM\Index(name="LinkKorisnik", columns={"idKorisnik"})})
 * @ORM\Entity(repositoryClass="App\Repository\LinkoviRepository")
 */
class Linkovi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=200, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var \App\Models\Entities\Korisnik
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Korisnik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKorisnik", referencedColumnName="idK")
     * })
     */
    private $idkorisnik;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set token.
     *
     * @param string $token
     *
     * @return Linkovi
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return Linkovi
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set idkorisnik.
     *
     * @param \App\Models\Entities\Korisnik|null $idkorisnik
     *
     * @return Linkovi
     */
    public function setIdkorisnik(\App\Models\Entities\Korisnik $idkorisnik = null)
    {
        $this->idkorisnik = $idkorisnik;

        return $this;
    }

    /**
     * Get idkorisnik.
     *
     * @return \App\Models\Entities\Korisnik|null
     */
    public function getIdkorisnik()
    {
        return $this->idkorisnik;
    }
}
