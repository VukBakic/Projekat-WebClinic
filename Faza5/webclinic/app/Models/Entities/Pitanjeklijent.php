<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pitanjeklijent
 *
 * @ORM\Table(name="pitanjeklijent", indexes={@ORM\Index(name="R_36", columns={"idKlijent"})})
 * @ORM\Entity
 */
class Pitanjeklijent
{
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
     * @var \App\Models\Entities\Klijent
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Klijent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKlijent", referencedColumnName="idKlijent")
     * })
     */
    private $idklijent;



    /**
     * Set idpitanje.
     *
     * @param \App\Models\Entities\Pitanje $idpitanje
     *
     * @return Pitanjeklijent
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

    /**
     * Set idklijent.
     *
     * @param \App\Models\Entities\Klijent|null $idklijent
     *
     * @return Pitanjeklijent
     */
    public function setIdklijent(\App\Models\Entities\Klijent $idklijent = null)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

    /**
     * Get idklijent.
     *
     * @return \App\Models\Entities\Klijent|null
     */
    public function getIdklijent()
    {
        return $this->idklijent;
    }
}
