<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentRepository")
 */
class Student
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
     * @ORM\Column(name="grupa", type="integer")
     */
    private $grupa;

    /**
     * @var int
     *
     * @ORM\Column(name="an", type="integer")
     */
    private $an;

    /**
     * @var float
     *
     * @ORM\Column(name="media_generala", type="float")
     */
    private $mediaGenerala;

    /**
     * @var int
     *
     * @ORM\Column(name="nr_credite_acumulate", type="integer")
     */
    private $nrCrediteAcumulate;


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
     * Set grupa
     *
     * @param integer $grupa
     *
     * @return Student
     */
    public function setGrupa($grupa)
    {
        $this->grupa = $grupa;

        return $this;
    }

    /**
     * Get grupa
     *
     * @return int
     */
    public function getGrupa()
    {
        return $this->grupa;
    }

    /**
     * Set an
     *
     * @param integer $an
     *
     * @return Student
     */
    public function setAn($an)
    {
        $this->an = $an;

        return $this;
    }

    /**
     * Get an
     *
     * @return int
     */
    public function getAn()
    {
        return $this->an;
    }

    /**
     * Set mediaGenerala
     *
     * @param float $mediaGenerala
     *
     * @return Student
     */
    public function setMediaGenerala($mediaGenerala)
    {
        $this->mediaGenerala = $mediaGenerala;

        return $this;
    }

    /**
     * Get mediaGenerala
     *
     * @return float
     */
    public function getMediaGenerala()
    {
        return $this->mediaGenerala;
    }

    /**
     * Set nrCrediteAcumulate
     *
     * @param integer $nrCrediteAcumulate
     *
     * @return Student
     */
    public function setNrCrediteAcumulate($nrCrediteAcumulate)
    {
        $this->nrCrediteAcumulate = $nrCrediteAcumulate;

        return $this;
    }

    /**
     * Get nrCrediteAcumulate
     *
     * @return int
     */
    public function getNrCrediteAcumulate()
    {
        return $this->nrCrediteAcumulate;
    }
}

