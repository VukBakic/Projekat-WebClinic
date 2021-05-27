<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fajl
 *
 * @ORM\Table(name="fajl")
 * @ORM\Entity
 */
class Fajl
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="putanja", type="string", length=256, nullable=true)
     */
    private $putanja;

    /**
     * @var int
     *
     * @ORM\Column(name="idFajl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfajl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ekstenzija", type="string", length=5, nullable=true, options={"fixed"=true})
     */
    private $ekstenzija;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Models\Entities\Stavkakartona", mappedBy="idfajl")
     */
    private $idstavka;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idstavka = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set putanja.
     *
     * @param string|null $putanja
     *
     * @return Fajl
     */
    public function setPutanja($putanja = null)
    {
        $this->putanja = $putanja;

        return $this;
    }

    /**
     * Get putanja.
     *
     * @return string|null
     */
    public function getPutanja()
    {
        return $this->putanja;
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

    /**
     * Set ekstenzija.
     *
     * @param string|null $ekstenzija
     *
     * @return Fajl
     */
    public function setEkstenzija($ekstenzija = null)
    {
        $this->ekstenzija = $ekstenzija;

        return $this;
    }

    /**
     * Get ekstenzija.
     *
     * @return string|null
     */
    public function getEkstenzija()
    {
        return $this->ekstenzija;
    }

    /**
     * Add idstavka.
     *
     * @param \App\Models\Entities\Stavkakartona $idstavka
     *
     * @return Fajl
     */
    public function addIdstavka(\App\Models\Entities\Stavkakartona $idstavka)
    {
        $this->idstavka[] = $idstavka;

        return $this;
    }

    /**
     * Remove idstavka.
     *
     * @param \App\Models\Entities\Stavkakartona $idstavka
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdstavka(\App\Models\Entities\Stavkakartona $idstavka)
    {
        return $this->idstavka->removeElement($idstavka);
    }

    /**
     * Get idstavka.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdstavka()
    {
        return $this->idstavka;
    }
}
