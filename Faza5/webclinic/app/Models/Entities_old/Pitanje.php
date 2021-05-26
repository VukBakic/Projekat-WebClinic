<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pitanje
 *
 * @ORM\Table(name="pitanje", indexes={@ORM\Index(name="R_33", columns={"nazivStruke"}), @ORM\Index(name="R_40", columns={"idLekar"})})
 * @ORM\Entity
 */
class Pitanje
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
     * @var string|null
     *
     * @ORM\Column(name="odgovor", type="text", length=65535, nullable=true)
     */
    private $odgovor;

    /**
     * @var string
     *
     * @ORM\Column(name="nazivStruke", type="string", length=20, nullable=false)
     */
    private $nazivstruke;

    /**
     * @var string
     *
     * @ORM\Column(name="naslov", type="string", length=20, nullable=false)
     */
    private $naslov;

    /**
     * @var string
     *
     * @ORM\Column(name="tekstPitanja", type="text", length=65535, nullable=false)
     */
    private $tekstpitanja;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idLekar", type="integer", nullable=true)
     */
    private $idlekar;



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
     * Set odgovor.
     *
     * @param string|null $odgovor
     *
     * @return Pitanje
     */
    public function setOdgovor($odgovor = null)
    {
        $this->odgovor = $odgovor;

        return $this;
    }

    /**
     * Get odgovor.
     *
     * @return string|null
     */
    public function getOdgovor()
    {
        return $this->odgovor;
    }

    /**
     * Set nazivstruke.
     *
     * @param string $nazivstruke
     *
     * @return Pitanje
     */
    public function setNazivstruke($nazivstruke)
    {
        $this->nazivstruke = $nazivstruke;

        return $this;
    }

    /**
     * Get nazivstruke.
     *
     * @return string
     */
    public function getNazivstruke()
    {
        return $this->nazivstruke;
    }

    /**
     * Set naslov.
     *
     * @param string $naslov
     *
     * @return Pitanje
     */
    public function setNaslov($naslov)
    {
        $this->naslov = $naslov;

        return $this;
    }

    /**
     * Get naslov.
     *
     * @return string
     */
    public function getNaslov()
    {
        return $this->naslov;
    }

    /**
     * Set tekstpitanja.
     *
     * @param string $tekstpitanja
     *
     * @return Pitanje
     */
    public function setTekstpitanja($tekstpitanja)
    {
        $this->tekstpitanja = $tekstpitanja;

        return $this;
    }

    /**
     * Get tekstpitanja.
     *
     * @return string
     */
    public function getTekstpitanja()
    {
        return $this->tekstpitanja;
    }

    /**
     * Set idlekar.
     *
     * @param int|null $idlekar
     *
     * @return Pitanje
     */
    public function setIdlekar($idlekar = null)
    {
        $this->idlekar = $idlekar;

        return $this;
    }

    /**
     * Get idlekar.
     *
     * @return int|null
     */
    public function getIdlekar()
    {
        return $this->idlekar;
    }
}
