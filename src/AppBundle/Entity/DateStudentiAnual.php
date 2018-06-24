<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateStudenti
 *
 * @ORM\Table(name="date_studenti_anual")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DateStudentiRepository")
 */
class DateStudentiAnual {

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  /**
   * @var int
   *
   * @ORM\Column(name="grupa", type="integer", nullable=true)
   */
  private $grupa;

  /**
   * @var int
   *
   * @ORM\Column(name="an", type="integer", nullable=true)
   */
  private $an;

  /**
   * @var float
   *
   * @ORM\Column(name="media_generala", type="float", nullable=true)
   */
  private $mediaGenerala;

  /**
   * @var int
   *
   * @ORM\Column(name="nr_credite_acumulate", type="integer", nullable=true)
   */
  private $nrCrediteAcumulate;

  /** @ORM\ManyToOne(targetEntity="Student")
   *  @ORM\JoinColumn(name="id_student", referencedColumnName="id")
   */
  private $student;


  /**
   * Set grupa
   *
   * @param integer $grupa
   *
   * @return Student
   */
  public function setGrupa($grupa) {
    $this->grupa = $grupa;

    return $this;
  }

  /**
   * Get grupa
   *
   * @return int
   */
  public function getGrupa() {
    return $this->grupa;
  }

  /**
   * Set an
   *
   * @param integer $an
   *
   * @return Student
   */
  public function setAn($an) {
    $this->an = $an;

    return $this;
  }

  /**
   * Get an
   *
   * @return int
   */
  public function getAn() {
    return $this->an;
  }

  /**
   * Set mediaGenerala
   *
   * @param float $mediaGenerala
   *
   * @return Student
   */
  public function setMediaGenerala($mediaGenerala) {
    $this->mediaGenerala = $mediaGenerala;

    return $this;
  }

  /**
   * Get mediaGenerala
   *
   * @return float
   */
  public function getMediaGenerala() {
    return $this->mediaGenerala;
  }

  /**
   * Set nrCrediteAcumulate
   *
   * @param integer $nrCrediteAcumulate
   *
   * @return Student
   */
  public function setNrCrediteAcumulate($nrCrediteAcumulate) {
    $this->nrCrediteAcumulate = $nrCrediteAcumulate;

    return $this;
  }

  /**
   * Get nrCrediteAcumulate
   *
   * @return int
   */
  public function getNrCrediteAcumulate() {
    return $this->nrCrediteAcumulate;
  }
}

