<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uloge
 *
 * @ORM\Table(name="uloge")
 * @ORM\Entity(repositoryClass="App\Repository\UlogeRepository")
 */
class Uloge
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUloge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduloge;

    /**
     * @var string
     *
     * @ORM\Column(name="nazivUloge", type="string", length=40, nullable=false)
     */
    private $nazivuloge;



    /**
     * Get iduloge.
     *
     * @return int
     */
    public function getIduloge()
    {
        return $this->iduloge;
    }

    /**
     * Set nazivuloge.
     *
     * @param string $nazivuloge
     *
     * @return Uloge
     */
    public function setNazivuloge($nazivuloge)
    {
        $this->nazivuloge = $nazivuloge;

        return $this;
    }

    /**
     * Get nazivuloge.
     *
     * @return string
     */
    public function getNazivuloge()
    {
        return $this->nazivuloge;
    }
}
