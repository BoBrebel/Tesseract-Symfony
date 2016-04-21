<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionEpreuve
 *
 * @ORM\Table(name="session_epreuve", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_epreuve", columns={"id_epreuve"})})
 * @ORM\Entity
 */
class SessionEpreuve
{
    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_tentative", type="integer", nullable=true)
     */
    private $nbrTentative;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
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
     * @var \Tesseract\MOOCBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Epreuve
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Epreuve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_epreuve", referencedColumnName="id")
     * })
     */
    private $idEpreuve;



    /**
     * Set note
     *
     * @param float $note
     * @return SessionEpreuve
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set nbrTentative
     *
     * @param integer $nbrTentative
     * @return SessionEpreuve
     */
    public function setNbrTentative($nbrTentative)
    {
        $this->nbrTentative = $nbrTentative;

        return $this;
    }

    /**
     * Get nbrTentative
     *
     * @return integer 
     */
    public function getNbrTentative()
    {
        return $this->nbrTentative;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return SessionEpreuve
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
     * Set idUtilisateur
     *
     * @param \Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur
     * @return SessionEpreuve
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
     * Set idEpreuve
     *
     * @param \Tesseract\MOOCBundle\Entity\Epreuve $idEpreuve
     * @return SessionEpreuve
     */
    public function setIdEpreuve(\Tesseract\MOOCBundle\Entity\Epreuve $idEpreuve = null)
    {
        $this->idEpreuve = $idEpreuve;

        return $this;
    }

    /**
     * Get idEpreuve
     *
     * @return \Tesseract\MOOCBundle\Entity\Epreuve 
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }
}
