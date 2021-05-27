<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stavkakartona
 *
 * @ORM\Table(name="stavkakartona", indexes={@ORM\Index(name="R_17", columns={"pregledObavio"}), @ORM\Index(name="R_16", columns={"idKlijent"}), @ORM\Index(name="R_41", columns={"imeUsluge", "nazivStruke"})})
 * @ORM\Entity
 */
class Stavkakartona
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
     * @var string
     *
     * @ORM\Column(name="dijagnostika", type="text", length=16777215, nullable=false)
     */
    private $dijagnostika;

    /**
     * @var string
     *
     * @ORM\Column(name="preporucenaTerapija", type="text", length=16777215, nullable=false)
     */
    private $preporucenaterapija;

    /**
     * @var string|null
     *
     * @ORM\Column(name="internaNapomena", type="text", length=16777215, nullable=true)
     */
    private $internanapomena;

    /**
     * @var \App\Models\Entities\Klijent
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Klijent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idKlijent", referencedColumnName="idKlijent")
     * })
     */
    private $idklijent;

    /**
     * @var \App\Models\Entities\Lekar
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Lekar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pregledObavio", referencedColumnName="idLekar")
     * })
     */
    private $pregledobavio;

    /**
     * @var \App\Models\Entities\Usluga
     *
     * @ORM\ManyToOne(targetEntity="App\Models\Entities\Usluga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imeUsluge", referencedColumnName="imeUsluge"),
     *   @ORM\JoinColumn(name="nazivStruke", referencedColumnName="nazivStruke")
     * })
     */
    private $imeusluge;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Models\Entities\Fajl", inversedBy="idstavka")
     * @ORM\JoinTable(name="sadrzi",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idStavka", referencedColumnName="idStavka")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idFajl", referencedColumnName="idFajl")
     *   }
     * )
     */
    private $idfajl;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idfajl = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dijagnostika.
     *
     * @param string $dijagnostika
     *
     * @return Stavkakartona
     */
    public function setDijagnostika($dijagnostika)
    {
        $this->dijagnostika = $dijagnostika;

        return $this;
    }

    /**
     * Get dijagnostika.
     *
     * @return string
     */
    public function getDijagnostika()
    {
        return $this->dijagnostika;
    }

    /**
     * Set preporucenaterapija.
     *
     * @param string $preporucenaterapija
     *
     * @return Stavkakartona
     */
    public function setPreporucenaterapija($preporucenaterapija)
    {
        $this->preporucenaterapija = $preporucenaterapija;

        return $this;
    }

    /**
     * Get preporucenaterapija.
     *
     * @return string
     */
    public function getPreporucenaterapija()
    {
        return $this->preporucenaterapija;
    }

    /**
     * Set internanapomena.
     *
     * @param string|null $internanapomena
     *
     * @return Stavkakartona
     */
    public function setInternanapomena($internanapomena = null)
    {
        $this->internanapomena = $internanapomena;

        return $this;
    }

    /**
     * Get internanapomena.
     *
     * @return string|null
     */
    public function getInternanapomena()
    {
        return $this->internanapomena;
    }

    /**
     * Set idklijent.
     *
     * @param \App\Models\Entities\Klijent|null $idklijent
     *
     * @return Stavkakartona
     */
    public function setIdklijent(\App\Models\Entities\Klijent $idklijent = null)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

    /**
     * Get idklijent.
     *
     * @return \App\Models\Entities\Klijent|null
     */
    public function getIdklijent()
    {
        return $this->idklijent;
    }

    /**
     * Set pregledobavio.
     *
     * @param \App\Models\Entities\Lekar|null $pregledobavio
     *
     * @return Stavkakartona
     */
    public function setPregledobavio(\App\Models\Entities\Lekar $pregledobavio = null)
    {
        $this->pregledobavio = $pregledobavio;

        return $this;
    }

    /**
     * Get pregledobavio.
     *
     * @return \App\Models\Entities\Lekar|null
     */
    public function getPregledobavio()
    {
        return $this->pregledobavio;
    }

    /**
     * Set imeusluge.
     *
     * @param \App\Models\Entities\Usluga|null $imeusluge
     *
     * @return Stavkakartona
     */
    public function setImeusluge(\App\Models\Entities\Usluga $imeusluge = null)
    {
        $this->imeusluge = $imeusluge;

        return $this;
    }

    /**
     * Get imeusluge.
     *
     * @return \App\Models\Entities\Usluga|null
     */
    public function getImeusluge()
    {
        return $this->imeusluge;
    }

    /**
     * Add idfajl.
     *
     * @param \App\Models\Entities\Fajl $idfajl
     *
     * @return Stavkakartona
     */
    public function addIdfajl(\App\Models\Entities\Fajl $idfajl)
    {
        $this->idfajl[] = $idfajl;

        return $this;
    }

    /**
     * Remove idfajl.
     *
     * @param \App\Models\Entities\Fajl $idfajl
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdfajl(\App\Models\Entities\Fajl $idfajl)
    {
        return $this->idfajl->removeElement($idfajl);
    }

    /**
     * Get idfajl.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdfajl()
    {
        return $this->idfajl;
    }
}
