<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SituatieScoalara
 *
 * @ORM\Table(name="situatie_scoalara")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SituatieScoalaraRepository")
 */
class SituatieScoalara
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
     * @var int
     *
     * @ORM\Column(name="nota", type="integer")
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;

    /** @ORM\ManyToOne(targetEntity="CadreDidacticeSerie")
     *  @ORM\JoinColumn(name="id_cadre_didactice_serie",referencedColumnName="id")
     */
    private $id_cadre_didactice_serie;

    /** @ORM\ManyToOne(targetEntity="Student")
     *  @ORM\JoinColumn(name="id_student",referencedColumnName="id")
     */
    private $id_student; 

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
     * Set nota
     *
     * @param integer $nota
     *
     * @return SituatieScoalara
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return int
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return SituatieScoalara
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }
}

