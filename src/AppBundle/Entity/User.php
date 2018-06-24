<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"student" = "Student", "cadre_didactice" = "CadreDidactice"})
 */
abstract class User extends BaseUser {

  /**
   * @var integer $id
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
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
   * Set nume
   *
   * @param string $nume
   *
   * @return User
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
   * @return User
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
   * Overridden so that username is now optional
   *
   * @param string $email
   *
   * @return User
   */
  public function setEmail($email) {
    $email = is_null($email) ? '' : $email;
    parent::setEmail($email);
    $this->setUsername($email);

    return $this;
  }

  /**
   * Returns the username used to authenticate the user.
   *
   * @return string The username
   */
  public function getUsername() {
    return $this->email;
  }

}

