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
     * @var bool
     *
     * @ORM\Column(name="placeno", type="boolean", nullable=false)
     */
    private $placeno;

    /**
     * @var \App\Models\Entities\Stavkakartona
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Stavkakartona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStavka", referencedColumnName="idStavka")
     * })
     */
    private $idstavka;



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

    /**
     * Set idstavka.
     *
     * @param \App\Models\Entities\Stavkakartona $idstavka
     *
     * @return Racun
     */
    public function setIdstavka(\App\Models\Entities\Stavkakartona $idstavka)
    {
        $this->idstavka = $idstavka;

        return $this;
    }

    /**
     * Get idstavka.
     *
     * @return \App\Models\Entities\Stavkakartona
     */
    public function getIdstavka()
    {
        return $this->idstavka;
    }
}
