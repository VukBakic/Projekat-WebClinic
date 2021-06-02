<?php

namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pitanjegost
 *
 * @ORM\Table(name="pitanjegost") 
 * @ORM\Entity(repositoryClass="App\Repository\PitanjegostRepository")
 */
class Pitanjegost //ORM\Table(name="pitanjegost", indexes={ORM\Index(name="R_35", columns={"idPitanje"})})
{
    /**
     * @var \App\Models\Entities\Pitanje
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Models\Entities\Pitanje", cascade={"persist", "remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPitanje", referencedColumnName="idPitanje")
     * })
     */
    private $idpitanje;
    /**
     * @var string
     *
     * @ORM\Column(name="imeprezime", type="string", length=50, nullable=false)
     */
    private $imeprezime;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    



    /**
     * Set imeprezime.
     *
     * @param string $imeprezime
     *
     * @return Pitanjegost
     */
    public function setImeprezime($imeprezime)
    {
        $this->imeprezime = $imeprezime;

        return $this;
    }

    /**
     * Get imeprezime.
     *
     * @return string
     */
    public function getImeprezime()
    {
        return $this->imeprezime;
    }

    

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Pitanjegost
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idpitanje.
     *
     * @param \App\Models\Entities\Pitanje $idpitanje
     *
     * @return Pitanjegost
     */
    public function setIdpitanje(\App\Models\Entities\Pitanje $idpitanje)
    {
        $this->idpitanje = $idpitanje;

        return $this;
    }

    /**
     * Get idpitanje.
     *
     * @return \App\Models\Entities\Pitanje
     */
    public function getIdpitanje()
    {
        return $this->idpitanje;
    }
}
