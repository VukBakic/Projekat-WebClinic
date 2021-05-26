<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Racun
 *
 * @ORM\Table(name="racun")
 * @ORM\Entity
 */
class Racun
{
    /**
     * @var int
     *
     * @ORM\Column(name="idStavka", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstavka;

    /**
     * @var bool
     *
     * @ORM\Column(name="placeno", type="boolean", nullable=false)
     */
    private $placeno;



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
     * Set placeno.
     *
     * @param bool $placeno
     *
     * @return Racun
     */
    public function setPlaceno($placeno)
    {
        $this->placeno = $placeno;

        return $this;
    }

    /**
     * Get placeno.
     *
     * @return bool
     */
    public function getPlaceno()
    {
        return $this->placeno;
    }
}
