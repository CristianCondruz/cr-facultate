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

    /** @ORM\ManyToOne(targetEntity="CadreDidacticeCursuri")
     *  @ORM\JoinColumn(name="id_cadre_didactice_cursuri",referencedColumnName="id")
     */
    private $id_cadre_didactice_cursuri; 
   
    /** @ORM\ManyToOne(targetEntity="Serie")
     *  @ORM\JoinColumn(name="id_serie",referencedColumnName="id")
     */
    private $id_serie; 

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

