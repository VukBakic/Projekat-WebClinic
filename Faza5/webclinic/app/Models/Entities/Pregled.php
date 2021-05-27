<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregled
 *
 * @ORM\Table(name="pregled", indexes={@ORM\Index(name="R_23", columns={"idKlijent"}), @ORM\Index(name="R_21", columns={"idLekar"}), @ORM\Index(name="R_24", columns={"idTermin", "idLekar"})})
 * @ORM\Entity
 */
class Pregled
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPregled", type="integer", nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpregled;

    /**
     * @var bool
     *
     * @ORM\Column(name="jeOnline", type="boolean", nullable=false, unique=false)
     */
    private $jeonline;

    /**
     * @var \App\Models\Entities\Lekar
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Lekar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLekar", referencedColumnName="idLekar", nullable=true)
     * })
     */
    private $idlekar;

    /**
     * @var \App\Models\Entities\Klijent
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Klijent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKlijent", referencedColumnName="idKlijent", nullable=true)
     * })
     */
    private $idklijent;

    /**
     * @var \App\Models\Entities\Termin
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Termin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTermin", referencedColumnName="idTermin", nullable=true),
     *   @ORM\JoinColumn(name="idLekar", referencedColumnName="idLekar", nullable=true)
     * })
     */
    private $idtermin;


    /**
     * Set idpregled.
     *
     * @param int $idpregled
     *
     * @return Pregled
     */
    public function setIdpregled($idpregled)
    {
        $this->idpregled = $idpregled;

        return $this;
    }

    /**
     * Get idpregled.
     *
     * @return int
     */
    public function getIdpregled()
    {
        return $this->idpregled;
    }

    /**
     * Set jeonline.
     *
     * @param bool $jeonline
     *
     * @return Pregled
     */
    public function setJeonline($jeonline)
    {
        $this->jeonline = $jeonline;

        return $this;
    }

    /**
     * Get jeonline.
     *
     * @return bool
     */
    public function getJeonline()
    {
        return $this->jeonline;
    }

    /**
     * Set idlekar.
     *
     * @param \App\Models\Entities\Lekar $idlekar
     *
     * @return Pregled
     */
    public function setIdlekar(\App\Models\Entities\Lekar $idlekar)
    {
        $this->idlekar = $idlekar;

        return $this;
    }

    /**
     * Get idlekar.
     *
     * @return \App\Models\Entities\Lekar
     */
    public function getIdlekar()
    {
        return $this->idlekar;
    }

    /**
     * Set idklijent.
     *
     * @param \App\Models\Entities\Klijent $idklijent
     *
     * @return Pregled
     */
    public function setIdklijent(\App\Models\Entities\Klijent $idklijent)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

    /**
     * Get idklijent.
     *
     * @return \App\Models\Entities\Klijent
     */
    public function getIdklijent()
    {
        return $this->idklijent;
    }

    /**
     * Set idtermin.
     *
     * @param \App\Models\Entities\Termin|null $idtermin
     *
     * @return Pregled
     */
    public function setIdtermin(\App\Models\Entities\Termin $idtermin = null)
    {
        $this->idtermin = $idtermin;

        return $this;
    }

    /**
     * Get idtermin.
     *
     * @return \App\Models\Entities\Termin|null
     */
    public function getIdtermin()
    {
        return $this->idtermin;
    }
}
