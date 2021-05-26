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
     * @var int
     *
     * @ORM\Column(name="idSluzb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsluzb;



    /**
     * Get idsluzb.
     *
     * @return int
     */
    public function getIdsluzb()
    {
        return $this->idsluzb;
    }
}
