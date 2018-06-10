<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateStudenti
 *
 * @ORM\Table(name="date_studenti")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DateStudentiRepository")
 */
class DateStudenti
{
    /**
     * @var int
     *
     * @ORM\Column(name="numar_matricol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $numar_matricol;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_nastere", type="date")
     */
    private $dateNastere;

    /**
     * @var string
     *
     * @ORM\Column(name="adresa_domiciliu", type="string", length=255)
     */
    private $adresaDomiciliu;

    /**
     * @var int
     *
     * @ORM\Column(name="cnp", type="integer", unique=true)
     */
    private $cnp;

    /**
     * Set numarMatricol
     *
     * @param integer $numarMatricol
     *
     * @return DateStudenti
     */
    public function setNumarMatricol($numarMatricol)
    {
      $this->numarMatricol = $numarMatricol;

      return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getNumarmatricol()
    {
        return $this->numar_matricol;
    }

    /**
     * Set nume
     *
     * @param string $nume
     *
     * @return DateStudenti
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
     * @return DateStudenti
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
     * Set dateNastere
     *
     * @param \DateTime $dateNastere
     *
     * @return DateStudenti
     */
    public function setDateNastere($dateNastere)
    {
        $this->dateNastere = $dateNastere;

        return $this;
    }

    /**
     * Get dateNastere
     *
     * @return \DateTime
     */
    public function getDateNastere()
    {
        return $this->dateNastere;
    }

    /**
     * Set adresaDomiciliu
     *
     * @param string $adresaDomiciliu
     *
     * @return DateStudenti
     */
    public function setAdresaDomiciliu($adresaDomiciliu)
    {
        $this->adresaDomiciliu = $adresaDomiciliu;

        return $this;
    }

    /**
     * Get adresaDomiciliu
     *
     * @return string
     */
    public function getAdresaDomiciliu()
    {
        return $this->adresaDomiciliu;
    }

    /**
     * Set cnp
     *
     * @param integer $cnp
     *
     * @return DateStudenti
     */
    public function setCnp($cnp)
    {
        $this->cnp = $cnp;

        return $this;
    }

    /**
     * Get cnp
     *
     * @return int
     */
    public function getCnp()
    {
        return $this->cnp;
    }

}

