<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionChallenge
 *
 * @ORM\Table(name="inscription_challenge", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_challenge", columns={"id_challenge"})})
 * @ORM\Entity
 */
class InscriptionChallenge
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="string", length=100, nullable=true)
     */
    private $solution;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Challenge
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Challenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_challenge", referencedColumnName="id")
     * })
     */
    private $idChallenge;



    /**
     * Set date
     *
     * @param \DateTime $date
     * @return InscriptionChallenge
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
     * Set solution
     *
     * @param string $solution
     * @return InscriptionChallenge
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string 
     */
    public function getSolution()
    {
        return $this->solution;
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
     * Set idUtilisateur
     *
     * @param \Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur
     * @return InscriptionChallenge
     */
    public function setIdUtilisateur(\Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \Tesseract\MOOCBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idChallenge
     *
     * @param \Tesseract\MOOCBundle\Entity\Challenge $idChallenge
     * @return InscriptionChallenge
     */
    public function setIdChallenge(\Tesseract\MOOCBundle\Entity\Challenge $idChallenge = null)
    {
        $this->idChallenge = $idChallenge;

        return $this;
    }

    /**
     * Get idChallenge
     *
     * @return \Tesseract\MOOCBundle\Entity\Challenge 
     */
    public function getIdChallenge()
    {
        return $this->idChallenge;
    }
}
