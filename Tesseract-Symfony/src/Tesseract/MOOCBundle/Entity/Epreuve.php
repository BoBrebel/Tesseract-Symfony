<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuve
 *
 * @ORM\Table(name="epreuve", indexes={@ORM\Index(name="fk_epreuve_objectif1_idx", columns={"id_objectif"})})
 * @ORM\Entity
 */
class Epreuve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cours", type="integer", nullable=false)
     */
    private $idCours;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="text", nullable=true)
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Objectif
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Objectif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_objectif", referencedColumnName="id")
     * })
     */
    private $idObjectif;



    /**
     * Set idCours
     *
     * @param integer $idCours
     * @return Epreuve
     */
    public function setIdCours($idCours)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return integer 
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Epreuve
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     * @return Epreuve
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string 
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Epreuve
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idObjectif
     *
     * @param \Tesseract\MOOCBundle\Entity\Objectif $idObjectif
     * @return Epreuve
     */
    public function setIdObjectif(\Tesseract\MOOCBundle\Entity\Objectif $idObjectif = null)
    {
        $this->idObjectif = $idObjectif;

        return $this;
    }

    /**
     * Get idObjectif
     *
     * @return \Tesseract\MOOCBundle\Entity\Objectif 
     */
    public function getIdObjectif()
    {
        return $this->idObjectif;
    }
}
