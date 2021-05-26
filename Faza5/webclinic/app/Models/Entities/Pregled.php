<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregled
 *
 * @ORM\Table(name="pregled", indexes={@ORM\Index(name="R_21", columns={"idLekar"}), @ORM\Index(name="R_23", columns={"idKlijent"}), @ORM\Index(name="R_24", columns={"idTermin", "idLekar"})})
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
     * @var int
     *
     * @ORM\Column(name="idLekar", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idlekar;

    /**
     * @var bool
     *
     * @ORM\Column(name="jeOnline", type="boolean", nullable=false)
     */
    private $jeonline;

    /**
     * @var int
     *
     * @ORM\Column(name="idKlijent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idklijent;

    /**
     * @var int
     *
     * @ORM\Column(name="idTermin", type="integer", nullable=false)
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
     * Set idlekar.
     *
     * @param int $idlekar
     *
     * @return Pregled
     */
    public function setIdlekar($idlekar)
    {
        $this->idlekar = $idlekar;

        return $this;
    }

    /**
     * Get idlekar.
     *
     * @return int
     */
    public function getIdlekar()
    {
        return $this->idlekar;
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
     * Set idklijent.
     *
     * @param int $idklijent
     *
     * @return Pregled
     */
    public function setIdklijent($idklijent)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

    /**
     * Get idklijent.
     *
     * @return int
     */
    public function getIdklijent()
    {
        return $this->idklijent;
    }

    /**
     * Set idtermin.
     *
     * @param int $idtermin
     *
     * @return Pregled
     */
    public function setIdtermin($idtermin)
    {
        $this->idtermin = $idtermin;

        return $this;
    }

    /**
     * Get idtermin.
     *
     * @return int
     */
    public function getIdtermin()
    {
        return $this->idtermin;
    }
}
