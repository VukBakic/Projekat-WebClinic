<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregled
 *
 * @ORM\Table(name="pregled", indexes={@ORM\Index(name="R_24", columns={"idLekar"}), @ORM\Index(name="R_23", columns={"idKlijent"})})
 * @ORM\Entity
 */
class Pregled
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPregled", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpregled;

    /**
     * @var bool
     *
     * @ORM\Column(name="jeOnline", type="boolean", nullable=false)
     */
    private $jeonline;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vreme", type="datetime", nullable=false)
     */
    private $vreme;

    /**
     * @var \App\Models\Entities\Lekar
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Lekar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLekar", referencedColumnName="idLekar")
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
     *   @ORM\JoinColumn(name="idKlijent", referencedColumnName="idKlijent")
     * })
     */
    private $idklijent;



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
     * Set vreme.
     *
     * @param \DateTime $vreme
     *
     * @return Pregled
     */
    public function setVreme($vreme)
    {
        $this->vreme = $vreme;

        return $this;
    }

    /**
     * Get vreme.
     *
     * @return \DateTime
     */
    public function getVreme()
    {
        return $this->vreme;
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
}
