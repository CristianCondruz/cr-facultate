<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser {

  /**
   * @var int
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
   * Get id
   *
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Get user roles
   *
   * @return array
   */
  public function getRoles() {
    $roles = $this->roles;

    // give everyone ROLE_USER!
    if (!in_array('ROLE_USER', $roles)) {
      $roles = 'ROLE_USER';
    }
    return $roles;
  }

  /**
   * Set user roles
   *
   * @param array $roles
   *
   * @return \FOS\UserBundle\Model\User|void
   */
  public function setRoles(array $roles) {
    $this->roles = $roles;
  }

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

}

