<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="fk_evenement_organisation1_idx", columns={"id_organisation"})})
 * @ORM\Entity
 */
class Evenement
{
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
     * @var integer
     *
     * @ORM\Column(name="nbr_max", type="integer", nullable=true)
     */
    private $nbrMax;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche", type="string", length=100, nullable=true)
     */
    private $affiche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Organisation
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Organisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisation", referencedColumnName="id")
     * })
     */
    private $idOrganisation;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Evenement
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
     * @return Evenement
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
     * Set nbrMax
     *
     * @param integer $nbrMax
     * @return Evenement
     */
    public function setNbrMax($nbrMax)
    {
        $this->nbrMax = $nbrMax;

        return $this;
    }

    /**
     * Get nbrMax
     *
     * @return integer 
     */
    public function getNbrMax()
    {
        return $this->nbrMax;
    }

    /**
     * Set affiche
     *
     * @param string $affiche
     * @return Evenement
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;

        return $this;
    }

    /**
     * Get affiche
     *
     * @return string 
     */
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
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
     * Set idOrganisation
     *
     * @param \Tesseract\MOOCBundle\Entity\Organisation $idOrganisation
     * @return Evenement
     */
    public function setIdOrganisation(\Tesseract\MOOCBundle\Entity\Organisation $idOrganisation = null)
    {
        $this->idOrganisation = $idOrganisation;

        return $this;
    }

    /**
     * Get idOrganisation
     *
     * @return \Tesseract\MOOCBundle\Entity\Organisation 
     */
    public function getIdOrganisation()
    {
        return $this->idOrganisation;
    }
}
