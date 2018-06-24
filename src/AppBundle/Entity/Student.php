<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentRepository")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User",
 *   message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User",
 *   message="fos_user.email.already_used")
 */
class Student extends User {

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

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
   * @ORM\Column(name="cnp", type="bigint", unique=true)
   */
  private $cnp;

  /**
   * @ORM\ManyToOne(targetEntity="Serie")
   * @ORM\JoinColumn(name="id_serie", referencedColumnName="id")
   */
  private $serie;

  /**
   * @return mixed
   */
  public function getSerie() {
    return $this->serie;
  }

  /**
   * @param mixed $serie
   */
  public function setSerie($serie) {
    $this->serie = $serie;
  }

  public function getRoles() {
    return ['ROLE_STUDENT', 'ROLE_USER'];
  }

  /**
   * Set dateNastere
   *
   * @param \DateTime $dateNastere
   */
  public function setDateNastere($dateNastere) {
    $this->dateNastere = $dateNastere;
  }

  /**
   * Get dateNastere
   *
   * @return \DateTime
   */
  public function getDateNastere() {
    return $this->dateNastere;
  }

  /**
   * Set adresaDomiciliu
   *
   * @param string $adresaDomiciliu
   *
   */
  public function setAdresaDomiciliu($adresaDomiciliu) {
    $this->adresaDomiciliu = $adresaDomiciliu;
  }

  /**
   * Get adresaDomiciliu
   *
   * @return string
   */
  public function getAdresaDomiciliu() {
    return $this->adresaDomiciliu;
  }

  /**
   * Set cnp
   *
   * @param integer $cnp
   *
   */
  public function setCnp($cnp) {
    $this->cnp = $cnp;
  }

  /**
   * Get cnp
   *
   * @return int
   */
  public function getCnp() {
    return $this->cnp;
  }

}

