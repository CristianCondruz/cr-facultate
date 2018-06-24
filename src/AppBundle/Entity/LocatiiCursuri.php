<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * LocatiiCursuri
 *
 * @ORM\Table(name="locatii_cursuri")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocatiiCursuriRepository")
 */
class LocatiiCursuri
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_ora", type="datetime")
     */
    private $dataOra;

    /**
     * @ORM\ManyToOne(targetEntity="Locatii")
     * @ORM\JoinColumn(name="id_locatie",referencedColumnName="id")
     */
    private $id_locatie;
     
    /** @ORM\ManyToOne(targetEntity="CadreDidacticeCursuri")
     *  @ORM\JoinColumn(name="id_cadre_didactice_cursuri",referencedColumnName="id")
     */
    private $id_cadre_didactice_cursuri;

    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dataOra
     *
     * @param \DateTime $dataOra
     *
     * @return LocatiiCursuri
     */
    public function setDataOra($dataOra)
    {
        $this->dataOra = $dataOra;

        return $this;
    }

    /**
     * Get dataOra
     *
     * @return \DateTime
     */
    public function getDataOra()
    {
        return $this->dataOra;
    }
}

