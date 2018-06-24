<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * CadreDidactice
 *
 * @ORM\Table(name="cadre_didactice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CadreDidacticeRepository")
 * @UniqueEntity(fields = "username", targetClass = "AppBundle\Entity\User",
 *   message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "AppBundle\Entity\User",
 *   message="fos_user.email.already_used")
 */
class CadreDidactice extends User {

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

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
  /** @ORM\ManyToOne(targetEntity="Catedre")
     *  @ORM\JoinColumn(name="id_catedre",referencedColumnName="id")
     */
  private $id_catedre;

  public function getRoles() {
    return ['ROLE_CADRE_DIDACTICE', 'ROLE_USER'];
  }

  /**
   * Set nume
   *
   * @param string $nume
   *
   * @return CadreDidactice
   */
  public function setNume($nume) {
    $this->nume = $nume;

    return $this;
  }

  /**
   * Get nume
   *
   * @return string
   */
  public function getNume() {
    return $this->nume;
  }

  /**
   * Set prenume
   *
   * @param string $prenume
   *
   * @return CadreDidactice
   */
  public function setPrenume($prenume) {
    $this->prenume = $prenume;

    return $this;
  }

  /**
   * Get prenume
   *
   * @return string
   */
  public function getPrenume() {
    return $this->prenume;
  }

  /**
   * Set grad
   *
   * @param string $grad
   *
   * @return CadreDidactice
   */
  public function setGrad($grad) {
    $this->grad = $grad;

    return $this;
  }

  /**
   * Get grad
   *
   * @return string
   */
  public function getGrad() {
    return $this->grad;
  }
}

