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
   * @ORM\Column(name="grad", type="string", length=255)
   */
  private $grad;

  /**
   * @ORM\ManyToOne(targetEntity="Catedre")
   * @ORM\JoinColumn(name="id_catedre", referencedColumnName="id")
   */
  private $catedre;

  /**
   * @return mixed
   */
  public function getCatedre() {
    return $this->catedre;
  }

  /**
   * @param mixed $catedre
   */
  public function setCatedre($catedre) {
    $this->catedre = $catedre;
  }

  public function getRoles() {
    return ['ROLE_CADRE_DIDACTICE', 'ROLE_USER'];
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

