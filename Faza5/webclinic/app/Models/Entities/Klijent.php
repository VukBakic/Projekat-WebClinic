<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klijent
 *
 * @ORM\Table(name="klijent", indexes={@ORM\Index(name="R_9", columns={"izabraniLekar"})})
 * @ORM\Entity
 */
class Klijent
{
    /**
     * @var int
     *
     * @ORM\Column(name="idKlijent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idklijent;

    /**
     * @var int
     *
     * @ORM\Column(name="izabraniLekar", type="integer", nullable=false)
     */
    private $izabranilekar;



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
     * Set izabranilekar.
     *
     * @param int $izabranilekar
     *
     * @return Klijent
     */
    public function setIzabranilekar($izabranilekar)
    {
        $this->izabranilekar = $izabranilekar;

        return $this;
    }

    /**
     * Get izabranilekar.
     *
     * @return int
     */
    public function getIzabranilekar()
    {
        return $this->izabranilekar;
    }
}
