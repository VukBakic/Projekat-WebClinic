<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klijent
 *
 * @ORM\Table(name="klijent", indexes={@ORM\Index(name="R_9", columns={"izabraniLekar"})})
 * @ORM\Entity(repositoryClass="App\Repository\KlijentRepository")
 */
class Klijent
{
    /**
     * @var \App\Models\Entities\Korisnik
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Korisnik", cascade={"persist", "remove"}))
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKlijent", referencedColumnName="idK")
     * })
     */
    private $idklijent;

    /**
     * @var \App\Models\Entities\Lekar
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Lekar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="izabraniLekar", referencedColumnName="idLekar")
     * })
     */
    private $izabranilekar;



    /**
     * Set idklijent.
     *
     * @param \App\Models\Entities\Korisnik $idklijent
     *
     * @return Klijent
     */
    public function setIdklijent(\App\Models\Entities\Korisnik $idklijent)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

    /**
     * Get idklijent.
     *
     * @return \App\Models\Entities\Korisnik
     */
    public function getIdklijent()
    {
        return $this->idklijent;
    }

    /**
     * Set izabranilekar.
     *
     * @param \App\Models\Entities\Lekar|null $izabranilekar
     *
     * @return Klijent
     */
    public function setIzabranilekar(\App\Models\Entities\Lekar $izabranilekar = null)
    {
        $this->izabranilekar = $izabranilekar;

        return $this;
    }

    /**
     * Get izabranilekar.
     *
     * @return \App\Models\Entities\Lekar|null
     */
    public function getIzabranilekar()
    {
        return $this->izabranilekar;
    }
}
