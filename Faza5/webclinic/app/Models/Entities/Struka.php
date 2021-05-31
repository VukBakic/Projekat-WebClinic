<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Struka
 *
 * @ORM\Table(name="struka")
 * @ORM\Entity(repositoryClass="App\Repository\StrukaRepository")
 */
class Struka
{
    /**
     * @var string
     *
     * @ORM\Column(name="nazivStruke", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nazivstruke;



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
