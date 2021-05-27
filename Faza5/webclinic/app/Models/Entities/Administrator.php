<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrator
 *
 * @ORM\Table(name="administrator")
 * @ORM\Entity
 */
class Administrator
{
    /**
     * @var \App\Models\Entities\Korisnik
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Korisnik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdmin", referencedColumnName="idK")
     * })
     */
    private $idadmin;


    /**
     * Set idadmin.
     *
     * @param \App\Models\Entities\Korisnik $idadmin
     *
     * @return Administrator
     */
    public function setIdadmin(\App\Models\Entities\Korisnik $idadmin)
    {
        $this->idadmin = $idadmin;

        return $this;
    }

    /**
     * Get idadmin.
     *
     * @return \App\Models\Entities\Korisnik
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }
}
