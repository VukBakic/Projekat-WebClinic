<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sadrzi
 *
 * @ORM\Table(name="sadrzi", indexes={@ORM\Index(name="R_39", columns={"idFajl"})})
 * @ORM\Entity
 */
class Sadrzi
{
    /**
     * @var int
     *
     * @ORM\Column(name="idStavka", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idstavka;

    /**
     * @var int
     *
     * @ORM\Column(name="idFajl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idfajl;



    /**
     * Set idstavka.
     *
     * @param int $idstavka
     *
     * @return Sadrzi
     */
    public function setIdstavka($idstavka)
    {
        $this->idstavka = $idstavka;

        return $this;
    }

    /**
     * Get idstavka.
     *
     * @return int
     */
    public function getIdstavka()
    {
        return $this->idstavka;
    }

    /**
     * Set idfajl.
     *
     * @param int $idfajl
     *
     * @return Sadrzi
     */
    public function setIdfajl($idfajl)
    {
        $this->idfajl = $idfajl;

        return $this;
    }

    /**
     * Get idfajl.
     *
     * @return int
     */
    public function getIdfajl()
    {
        return $this->idfajl;
    }
}
