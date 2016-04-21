<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireCours
 *
 * @ORM\Table(name="commentaire_cours", indexes={@ORM\Index(name="fk_cours_has_utilisateur_utilisateur1_idx", columns={"id_utilisateur"}), @ORM\Index(name="fk_cours_has_utilisateur_cours1_idx", columns={"id_cours"})})
 * @ORM\Entity
 */
class CommentaireCours
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

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
     * @var \Tesseract\MOOCBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Cours
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="id")
     * })
     */
    private $idCours;

    function getCommentaire() {
        return $this->commentaire;
    }

    function getDate() {
        return $this->date;
    }

    function getId() {
        return $this->id;
    }

    function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    function getIdCours() {
        return $this->idCours;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdUtilisateur(\Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur) {
        $this->idUtilisateur = $idUtilisateur;
    }

    function setIdCours(\Tesseract\MOOCBundle\Entity\Cours $idCours) {
        $this->idCours = $idCours;
    }



    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return CommentaireCours
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CommentaireCours
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
     * @return CommentaireCours
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
     * Set idCours
     *
     * @param \Tesseract\MOOCBundle\Entity\Cours $idCours
     * @return CommentaireCours
     */
    public function setIdCours(\Tesseract\MOOCBundle\Entity\Cours $idCours = null)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return \Tesseract\MOOCBundle\Entity\Cours 
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}
