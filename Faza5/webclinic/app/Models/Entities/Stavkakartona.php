<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stavkakartona
 *
 * @ORM\Table(name="stavkakartona", indexes={@ORM\Index(name="R_41", columns={"imeUsluge", "nazivStruke"}), @ORM\Index(name="R_16", columns={"idKlijent"}), @ORM\Index(name="R_17", columns={"pregledObavio"})})
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
     * @var int
     *
     * @ORM\Column(name="idKlijent", type="integer", nullable=false)
     */
    private $idklijent;

    /**
     * @var int
     *
     * @ORM\Column(name="pregledObavio", type="integer", nullable=false)
     */
    private $pregledobavio;

    /**
     * @var string
     *
     * @ORM\Column(name="dijagnostika", type="text", length=65535, nullable=false)
     */
    private $dijagnostika;

    /**
     * @var string
     *
     * @ORM\Column(name="preporucenaTerapija", type="text", length=65535, nullable=false)
     */
    private $preporucenaterapija;

    /**
     * @var string|null
     *
     * @ORM\Column(name="internaNapomena", type="text", length=65535, nullable=true)
     */
    private $internanapomena;

    /**
     * @var string
     *
     * @ORM\Column(name="imeUsluge", type="string", length=20, nullable=false)
     */
    private $imeusluge;

    /**
     * @var string
     *
     * @ORM\Column(name="nazivStruke", type="string", length=20, nullable=false)
     */
    private $nazivstruke;



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
     * Set idklijent.
     *
     * @param int $idklijent
     *
     * @return Stavkakartona
     */
    public function setIdklijent($idklijent)
    {
        $this->idklijent = $idklijent;

        return $this;
    }

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
     * Set pregledobavio.
     *
     * @param int $pregledobavio
     *
     * @return Stavkakartona
     */
    public function setPregledobavio($pregledobavio)
    {
        $this->pregledobavio = $pregledobavio;

        return $this;
    }

    /**
     * Get pregledobavio.
     *
     * @return int
     */
    public function getPregledobavio()
    {
        return $this->pregledobavio;
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
     * Set imeusluge.
     *
     * @param string $imeusluge
     *
     * @return Stavkakartona
     */
    public function setImeusluge($imeusluge)
    {
        $this->imeusluge = $imeusluge;

        return $this;
    }

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
     * Set nazivstruke.
     *
     * @param string $nazivstruke
     *
     * @return Stavkakartona
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
