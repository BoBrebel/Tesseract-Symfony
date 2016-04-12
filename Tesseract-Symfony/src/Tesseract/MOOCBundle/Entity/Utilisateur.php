<?php

namespace Tesseract\MOOCBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="nom_utilisateur_UNIQUE", columns={"pseudo"})}, indexes={@ORM\Index(name="fk_users_organisations1_idx", columns={"id_organisation"})})
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=45, nullable=true)
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=45, nullable=true)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=45, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=45, nullable=true)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=3, nullable=true)
     */
    protected $roles;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=100, nullable=true)
     */
    private $cv;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=3, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_sercours", type="string", length=45, nullable=true)
     */
    private $mailSercours;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \Tesseract\AccessBundle\Entity\Organisation
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\AccessBundle\Entity\Organisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisation", referencedColumnName="id")
     * })
     */
    private $idOrganisation;

    private $type;
            function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getScore() {
        return $this->score;
    }

    function getCv() {
        return $this->cv;
    }

    function getEtat() {
        return $this->etat;
    }

    function getMailSercours() {
        return $this->mailSercours;
    }

    function getId() {
        return $this->id;
    }

    function getIdOrganisation() {
        return $this->idOrganisation;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateNaissance(\DateTime $dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setScore($score) {
        $this->score = $score;
    }

    function setCv($cv) {
        $this->cv = $cv;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setMailSercours($mailSercours) {
        $this->mailSercours = $mailSercours;
    }

    function setId($id) {
        $this->id = $id;
    }
    function getType() {
        return $this->type;
    }

    function setType($type) {
        $this->type = $type;
    }

        function setIdOrganisation(\Tesseract\AccessBundle\Entity\Organisation $idOrganisation) {
        $this->idOrganisation = $idOrganisation;
    }


}