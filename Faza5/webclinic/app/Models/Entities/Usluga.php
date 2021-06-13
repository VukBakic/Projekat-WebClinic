<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usluga
 *
 * @ORM\Table(name="usluga", indexes={@ORM\Index(name="R_22", columns={"nazivStruke"})})
 * @ORM\Entity(repositoryClass="App\Repository\UslugaRepository")
 */
class Usluga
{
    /**
     * @var string
     *
     * @ORM\Column(name="imeUsluge", type="string", length=200, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imeusluge;

    /**
     * @var string
     *
     * @ORM\Column(name="cena", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $cena;

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
     * Get imeusluge.
     *
     * @return string
     */
    public function getImeusluge()
    {
        return $this->imeusluge;
    }

    /**
     * Set cena.
     *
     * @param string $cena
     *
     * @return Usluga
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena.
     *
     * @return string
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set nazivstruke.
     *
     * @param \App\Models\Entities\Struka|null $nazivstruke
     *
     * @return Usluga
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
}
