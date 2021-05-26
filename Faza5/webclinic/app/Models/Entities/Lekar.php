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
     * @var int
     *
     * @ORM\Column(name="idLekar", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlekar;

    /**
     * @var string
     *
     * @ORM\Column(name="nazivStruke", type="string", length=20, nullable=false)
     */
    private $nazivstruke;



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
     * Set nazivstruke.
     *
     * @param string $nazivstruke
     *
     * @return Lekar
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
}
