<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgramaScoalara
 *
 * @ORM\Table(name="programa_scoalara")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProgramaScoalaraRepository")
 */
class ProgramaScoalara
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
     * @ORM\Column(name="nume_curs", type="string", length=255)
     */
    private $numeCurs;

    /**
     * @var int
     *
     * @ORM\Column(name="an_studii", type="integer")
     */
    private $anStudii;

    /**
     * @var int
     *
     * @ORM\Column(name="semestru", type="integer")
     */
    private $semestru;

    /**
     * @var int
     *
     * @ORM\Column(name="puncte_credit", type="integer")
     */
    private $puncteCredit;

    /**
     * @var string
     *
     * @ORM\Column(name="durata_saptamanala", type="time")
     */
    private $durataSaptamanala;


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
     * Set numeCurs
     *
     * @param string $numeCurs
     *
     * @return ProgramaScoalara
     */
    public function setNumeCurs($numeCurs)
    {
        $this->numeCurs = $numeCurs;

        return $this;
    }

    /**
     * Get numeCurs
     *
     * @return string
     */
    public function getNumeCurs()
    {
        return $this->numeCurs;
    }

    /**
     * Set anStudii
     *
     * @param integer $anStudii
     *
     * @return ProgramaScoalara
     */
    public function setAnStudii($anStudii)
    {
        $this->anStudii = $anStudii;

        return $this;
    }

    /**
     * Get anStudii
     *
     * @return int
     */
    public function getAnStudii()
    {
        return $this->anStudii;
    }

    /**
     * Set semestru
     *
     * @param integer $semestru
     *
     * @return ProgramaScoalara
     */
    public function setSemestru($semestru)
    {
        $this->semestru = $semestru;

        return $this;
    }

    /**
     * Get semestru
     *
     * @return int
     */
    public function getSemestru()
    {
        return $this->semestru;
    }

    /**
     * Set puncteCredit
     *
     * @param integer $puncteCredit
     *
     * @return ProgramaScoalara
     */
    public function setPuncteCredit($puncteCredit)
    {
        $this->puncteCredit = $puncteCredit;

        return $this;
    }

    /**
     * Get puncteCredit
     *
     * @return int
     */
    public function getPuncteCredit()
    {
        return $this->puncteCredit;
    }

    /**
     * Set durataSaptamanala
     *
     * @param string $durataSaptamanala
     *
     * @return ProgramaScoalara
     */
    public function setDurataSaptamanala($durataSaptamanala)
    {
        $this->durataSaptamanala = $durataSaptamanala;

        return $this;
    }

    /**
     * Get durataSaptamanala
     *
     * @return string
     */
    public function getDurataSaptamanala()
    {
        return $this->durataSaptamanala;
    }
}

