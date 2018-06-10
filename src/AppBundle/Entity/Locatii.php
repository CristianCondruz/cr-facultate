<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locatii
 *
 * @ORM\Table(name="locatii")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocatiiRepository")
 */
class Locatii
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
     * @ORM\Column(name="sala", type="string", length=255)
     */
    private $sala;

    /**
     * @var string
     *
     * @ORM\Column(name="cladire", type="string", length=255)
     */
    private $cladire;


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
     * Set sala
     *
     * @param string $sala
     *
     * @return Locatii
     */
    public function setSala($sala)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return string
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set cladire
     *
     * @param string $cladire
     *
     * @return Locatii
     */
    public function setCladire($cladire)
    {
        $this->cladire = $cladire;

        return $this;
    }

    /**
     * Get cladire
     *
     * @return string
     */
    public function getCladire()
    {
        return $this->cladire;
    }
}

