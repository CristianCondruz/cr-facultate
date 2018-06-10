<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CadreDidacticeCursuri
 *
 * @ORM\Table(name="cadre_didactice_cursuri")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CadreDidacticeCursuriRepository")
 */
class CadreDidacticeCursuri
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

