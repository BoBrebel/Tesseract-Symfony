<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="fk_cours_matiere1_idx", columns={"id_matiere"}), @ORM\Index(name="fk_cours_utilisateur1_idx", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Cours
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
     * @ORM\Column(name="difficulte", type="string", length=45, nullable=true)
     */
    private $difficulte;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="badge", type="string", length=255, nullable=false)
     */
    private $badge;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche", type="string", length=100, nullable=true)
     */
    private $affiche;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="validation1", type="string", length=50, nullable=false)
     */
    private $validation1;

    /**
     * @var string
     *
     * @ORM\Column(name="validation2", type="string", length=50, nullable=false)
     */
    private $validation2;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="upload", type="date", nullable=true)
     */
    private $upload;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\UserBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\UserBundle\Entity\Matiere
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Matiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_matiere", referencedColumnName="id")
     * })
     */
    private $idMatiere;

    function getNom() {
        return $this->nom;
    }

    function getDifficulte() {
        return $this->difficulte;
    }

    function getDescription() {
        return $this->description;
    }

    function getBadge() {
        return $this->badge;
    }

    function getAffiche() {
        return $this->affiche;
    }

    function getVideo() {
        return $this->video;
    }

    function getValidation1() {
        return $this->validation1;
    }

    function getValidation2() {
        return $this->validation2;
    }

    function getLanguage() {
        return $this->language;
    }

    function getUpload() {
        return $this->upload;
    }

    function getId() {
        return $this->id;
    }

    function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    function getIdMatiere() {
        return $this->idMatiere;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDifficulte($difficulte) {
        $this->difficulte = $difficulte;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setBadge($badge) {
        $this->badge = $badge;
    }

    function setAffiche($affiche) {
        $this->affiche = $affiche;
    }

    function setVideo($video) {
        $this->video = $video;
    }

    function setValidation1($validation1) {
        $this->validation1 = $validation1;
    }

    function setValidation2($validation2) {
        $this->validation2 = $validation2;
    }

    function setLanguage($language) {
        $this->language = $language;
    }

    function setUpload(\DateTime $upload) {
        $this->upload = $upload;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdUtilisateur(\Tesseract\UserBundle\Entity\Utilisateur $idUtilisateur) {
        $this->idUtilisateur = $idUtilisateur;
    }

    function setIdMatiere(\Tesseract\UserBundle\Entity\Matiere $idMatiere) {
        $this->idMatiere = $idMatiere;
    }


}
