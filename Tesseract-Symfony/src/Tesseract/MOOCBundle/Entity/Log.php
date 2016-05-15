<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log", indexes={@ORM\Index(name="fk_log_utilisateur1_idx", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Log
{
    /**
     * @var string
     *
     * @ORM\Column(name="tache", type="string", length=45, nullable=true)
     */
    private $tache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="cible", type="string", length=20, nullable=true)
     */
    private $cible;

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
     * Set tache
     *
     * @param string $tache
     * @return Log
     */
    public function setTache($tache)
    {
        $this->tache = $tache;

        return $this;
    }

    /**
     * Get tache
     *
     * @return string 
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Log
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
     * Set cible
     *
     * @param string $cible
     * @return Log
     */
    public function setCible($cible)
    {
        $this->cible = $cible;

        return $this;
    }

    /**
     * Get cible
     *
     * @return string 
     */
    public function getCible()
    {
        return $this->cible;
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
     * @return Log
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
   
}
