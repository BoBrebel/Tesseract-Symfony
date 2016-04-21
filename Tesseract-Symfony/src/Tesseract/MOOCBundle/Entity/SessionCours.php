<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionCours
 *
 * @ORM\Table(name="session_cours", indexes={@ORM\Index(name="id_chapitre", columns={"nbr"}), @ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_cour", columns={"id_cours"})})
 * @ORM\Entity
 */
class SessionCours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbr", type="integer", nullable=true)
     */
    private $nbr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="badge", type="string", length=255, nullable=true)
     */
    private $badge;

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

    function getNbr() {
        return $this->nbr;
    }

    function getDate() {
        return $this->date;
    }

    function getBadge() {
        return $this->badge;
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

    function setNbr($nbr) {
        $this->nbr = $nbr;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setBadge($badge) {
        $this->badge = $badge;
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
     * Set nbr
     *
     * @param integer $nbr
     * @return SessionCours
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr
     *
     * @return integer 
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return SessionCours
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
     * Set badge
     *
     * @param string $badge
     * @return SessionCours
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge
     *
     * @return string 
     */
    public function getBadge()
    {
        return $this->badge;
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
     * @return SessionCours
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
     * @return SessionCours
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
