<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Termin
 *
 * @ORM\Table(name="termin", indexes={@ORM\Index(name="R_25", columns={"idLekar"})})
 * @ORM\Entity
 */
class Termin
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime", nullable=false)
     */
    private $datum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vreme", type="time", nullable=false)
     */
    private $vreme;

    /**
     * @var int
     *
     * @ORM\Column(name="idTermin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtermin;

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
     * Set datum.
     *
     * @param \DateTime $datum
     *
     * @return Termin
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum.
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set vreme.
     *
     * @param \DateTime $vreme
     *
     * @return Termin
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
     * Set idtermin.
     *
     * @param int $idtermin
     *
     * @return Termin
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

    /**
     * Set idlekar.
     *
     * @param \App\Models\Entities\Lekar $idlekar
     *
     * @return Termin
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
}
