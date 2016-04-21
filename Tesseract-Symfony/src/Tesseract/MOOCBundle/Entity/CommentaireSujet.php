<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireSujet
 *
 * @ORM\Table(name="commentaire_sujet", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur", "id_sujet"}), @ORM\Index(name="id_sujet", columns={"id_sujet"}), @ORM\Index(name="IDX_AB9F918150EAE44", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class CommentaireSujet
{
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", nullable=true)
     */
    private $code;
    
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", nullable=true)
     */
    private $link;

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
     * @var \Tesseract\MOOCBundle\Entity\SujetForum
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\SujetForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sujet", referencedColumnName="id")
     * })
     */
    private $idSujet;



    /**
     * Set contenu
     *
     * @param string $contenu
     * @return CommentaireSujet
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CommentaireSujet
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
     * @return CommentaireSujet
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
     * Set idSujet
     *
     * @param \Tesseract\MOOCBundle\Entity\SujetForum $idSujet
     * @return CommentaireSujet
     */
    public function setIdSujet(\Tesseract\MOOCBundle\Entity\SujetForum $idSujet = null)
    {
        $this->idSujet = $idSujet;

        return $this;
    }

    /**
     * Get idSujet
     *
     * @return \Tesseract\MOOCBundle\Entity\SujetForum 
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }
    function getCode() {
        return $this->code;
    }

    function getLink() {
        return $this->link;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setLink($link) {
        $this->link = $link;
    }


}
