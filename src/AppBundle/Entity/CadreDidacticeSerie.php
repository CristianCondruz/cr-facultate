<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CadreDidacticeSerie
 *
 * @ORM\Table(name="cadre_didactice_serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CadreDidacticeSerieRepository")
 */
class CadreDidacticeSerie
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

