<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specializare
 *
 * @ORM\Table(name="specializare")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpecializareRepository")
 */
class Specializare
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
     * @var int
     *
     * @ORM\Column(name="nr_serii", type="integer")
     */
    private $nrSerii;


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
     * @return Specializare
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
     * Set nrSerii
     *
     * @param integer $nrSerii
     *
     * @return Specializare
     */
    public function setNrSerii($nrSerii)
    {
        $this->nrSerii = $nrSerii;

        return $this;
    }

    /**
     * Get nrSerii
     *
     * @return int
     */
    public function getNrSerii()
    {
        return $this->nrSerii;
    }
}

