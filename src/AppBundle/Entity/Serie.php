<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\Column(name="nr_grupe", type="integer")
     */
    private $nrGrupe;


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
     * @return Serie
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
     * Set nrGrupe
     *
     * @param integer $nrGrupe
     *
     * @return Serie
     */
    public function setNrGrupe($nrGrupe)
    {
        $this->nrGrupe = $nrGrupe;

        return $this;
    }

    /**
     * Get nrGrupe
     *
     * @return int
     */
    public function getNrGrupe()
    {
        return $this->nrGrupe;
    }
}

