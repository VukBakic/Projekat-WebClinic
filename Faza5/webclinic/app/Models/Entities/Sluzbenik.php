<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sluzbenik
 *
 * @ORM\Table(name="sluzbenik")
 * @ORM\Entity
 */
class Sluzbenik
{
    /**
     * @var \App\Models\Entities\Korisnik
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Korisnik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSluzb", referencedColumnName="idK", nullable=true)
     * })
     */
    private $idsluzb;


    /**
     * Set idsluzb.
     *
     * @param \App\Models\Entities\Korisnik $idsluzb
     *
     * @return Sluzbenik
     */
    public function setIdsluzb(\App\Models\Entities\Korisnik $idsluzb)
    {
        $this->idsluzb = $idsluzb;

        return $this;
    }

    /**
     * Get idsluzb.
     *
     * @return \App\Models\Entities\Korisnik
     */
    public function getIdsluzb()
    {
        return $this->idsluzb;
    }
}
