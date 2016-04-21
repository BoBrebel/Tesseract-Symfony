<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogComment
 *
 * @ORM\Table(name="BlogComment")
 * @ORM\Entity
 */
class BlogComment
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
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\BlogPost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPost", referencedColumnName="id")
     * })
     */
    private $idPost;



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
     * Set idSujet
     *
     * @param \Tesseract\MOOCBundle\Entity\BlogPost $idPost
     * @return BlogComment
     */
    public function setIdPost(\Tesseract\MOOCBundle\Entity\BlogPost $idPost = null)
    {
        $this->idPost = $idPost;
    
        return $this;
    }

    /**
     * Get idSujet
     *
     * @return \Tesseract\MOOCBundle\Entity\BlogPost
     */
    public function getIdPost()
    {
        return $this->idPost;
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
}
