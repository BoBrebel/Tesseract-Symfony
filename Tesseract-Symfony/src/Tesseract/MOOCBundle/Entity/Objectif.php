<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectif
 *
 * @ORM\Table(name="objectif", indexes={@ORM\Index(name="fk_objectif_chapitre1_idx", columns={"id_chapitre"})})
 * @ORM\Entity
 */
class Objectif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=255, nullable=true)
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Chapitre
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Chapitre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chapitre", referencedColumnName="id")
     * })
     */
    private $idChapitre;



    /**
     * Set numero
     *
     * @param integer $numero
     * @return Objectif
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Objectif
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Objectif
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     * @return Objectif
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idChapitre
     *
     * @param \Tesseract\MOOCBundle\Entity\Chapitre $idChapitre
     * @return Objectif
     */
    public function setIdChapitre(\Tesseract\MOOCBundle\Entity\Chapitre $idChapitre = null)
    {
        $this->idChapitre = $idChapitre;

        return $this;
    }

    /**
     * Get idChapitre
     *
     * @return \Tesseract\MOOCBundle\Entity\Chapitre 
     */
    public function getIdChapitre()
    {
        return $this->idChapitre;
    }
}
