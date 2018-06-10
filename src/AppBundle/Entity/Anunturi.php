<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anunturi
 *
 * @ORM\Table(name="anunturi")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnunturiRepository")
 */
class Anunturi {

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
   * @ORM\Column(name="titlu", type="string", length=100, nullable=true,
   *   unique=false)
   */
  private $titlu;

  /**
   * @var string
   *
   * @ORM\Column(name="continut", type="text")
   */
  private $continut;

  /**
   * @var string
   *
   * @ORM\Column(name="ranking", type="decimal", precision=10, scale=0)
   */
  private $ranking;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="creat_la", type="datetime")
   */
  private $creat_la;

  /**
   * @return \DateTime
   */
  public function getCreatLa() {
    return $this->creat_la;
  }

  /**
   * @param \DateTime $creat_la
   */
  public function setCreatLa($creat_la) {
    $this->creat_la = $creat_la;
  }


  /**
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set titlu
   *
   * @param string $titlu
   *
   * @return Anunturi
   */
  public function setTitlu($titlu) {
    $this->titlu = $titlu;

    return $this;
  }

  /**
   * Get titlu
   *
   * @return string
   */
  public function getTitlu() {
    return $this->titlu;
  }

  /**
   * Set continut
   *
   * @param string $continut
   *
   * @return Anunturi
   */
  public function setContinut($continut) {
    $this->continut = $continut;

    return $this;
  }

  /**
   * Get continut
   *
   * @return string
   */
  public function getContinut() {
    return $this->continut;
  }

  /**
   * Set ranking
   *
   * @param string $ranking
   *
   * @return Anunturi
   */
  public function setRanking($ranking) {
    $this->ranking = $ranking;

    return $this;
  }

  /**
   * Get ranking
   *
   * @return string
   */
  public function getRanking() {
    return $this->ranking;
  }
}

