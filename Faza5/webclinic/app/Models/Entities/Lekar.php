<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lekar
 *
 * @ORM\Table(name="lekar", indexes={@ORM\Index(name="R_19", columns={"nazivStruke"})})
 * @ORM\Entity
 */

class Lekar
{
    /**
     * @var \App\Models\Entities\Struka
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Struka")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nazivStruke", referencedColumnName="nazivStruke")
     * })
     */
    private $nazivstruke;

    /**
     * @var \App\Models\Entities\Korisnik
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Korisnik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLekar", referencedColumnName="idK")
     * })
     */
    private $idlekar;



    /**
     * Set nazivstruke.
     *
     * @param \App\Models\Entities\Struka|null $nazivstruke
     *
     * @return Lekar
     */
    public function setNazivstruke(\App\Models\Entities\Struka $nazivstruke = null)
    {
        $this->nazivstruke = $nazivstruke;

        return $this;
    }

    /**
     * Get nazivstruke.
     *
     * @return \App\Models\Entities\Struka|null
     */
    public function getNazivstruke()
    {
        return $this->nazivstruke;
    }

    /**
     * Set idlekar.
     *
     * @param \App\Models\Entities\Korisnik $idlekar
     *
     * @return Lekar
     */
    public function setIdlekar(\App\Models\Entities\Korisnik $idlekar)
    {
        $this->idlekar = $idlekar;

        return $this;
    }

    /**
     * Get idlekar.
     *
     * @return \App\Models\Entities\Korisnik
     */
    public function getIdlekar()
    {
        return $this->idlekar;
    }
}
