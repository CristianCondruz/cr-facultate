<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CadreDidactice
 *
 * @ORM\Table(name="cadre_didactice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CadreDidacticeRepository")
 */
class CadreDidactice
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
     * @ORM\Column(name="prenume", type="string", length=255)
     */
    private $prenume;

    /**
     * @var string
     *
     * @ORM\Column(name="grad", type="string", length=255)
     */
    private $grad;


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
     * @return CadreDidactice
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
     * Set prenume
     *
     * @param string $prenume
     *
     * @return CadreDidactice
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;

        return $this;
    }

    /**
     * Get prenume
     *
     * @return string
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * Set grad
     *
     * @param string $grad
     *
     * @return CadreDidactice
     */
    public function setGrad($grad)
    {
        $this->grad = $grad;

        return $this;
    }

    /**
     * Get grad
     *
     * @return string
     */
    public function getGrad()
    {
        return $this->grad;
    }
}

