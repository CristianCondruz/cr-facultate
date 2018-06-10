<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catedre
 *
 * @ORM\Table(name="catedre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CatedreRepository")
 */
class Catedre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nume", type="string", length=255)
     */
    private $nume;

    /**
     * @var string
     *
     * @ORM\Column(name="nume_conducator", type="string", length=255)
     */
    private $numeConducator;

    /**
     * @var string
     *
     * @ORM\Column(name="localizare_birou", type="string", length=255)
     */
    private $localizareBirou;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nume
     *
     * @param string $nume
     *
     * @return Catedre
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

        return $this;
    }

    /**
     * Get nume
     *
     * @return string
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set numeConducator
     *
     * @param string $numeConducator
     *
     * @return Catedre
     */
    public function setNumeConducator($numeConducator)
    {
        $this->numeConducator = $numeConducator;

        return $this;
    }

    /**
     * Get numeConducator
     *
     * @return string
     */
    public function getNumeConducator()
    {
        return $this->numeConducator;
    }

    /**
     * Set localizareBirou
     *
     * @param string $localizareBirou
     *
     * @return Catedre
     */
    public function setLocalizareBirou($localizareBirou)
    {
        $this->localizareBirou = $localizareBirou;

        return $this;
    }

    /**
     * Get localizareBirou
     *
     * @return string
     */
    public function getLocalizareBirou()
    {
        return $this->localizareBirou;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Catedre
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

