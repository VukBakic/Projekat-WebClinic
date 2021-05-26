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
     * @var int
     *
     * @ORM\Column(name="idPitanje", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpitanje;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idKlijent", type="integer", nullable=true)
     */
    private $idklijent;



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
     * Set idklijent.
     *
     * @param int|null $idklijent
     *
     * @return Pitanjeklijent
     */
    public function setIdklijent($idklijent = null)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

    /**
     * Get idklijent.
     *
     * @return int|null
     */
    public function getIdklijent()
    {
        return $this->idklijent;
    }
}
