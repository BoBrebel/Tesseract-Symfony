<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisation
 *
 * @ORM\Table(name="organisation", uniqueConstraints={@ORM\UniqueConstraint(name="matricule_UNIQUE", columns={"matricule"})})
 * @ORM\Entity
 */
class Organisation
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
     * @ORM\Column(name="adress", type="string", length=45, nullable=true)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=45, nullable=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=45, nullable=true)
     */
    private $photo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="integer", nullable=true)
     */
    private $enabled;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    function getNom() {
        return $this->nom;
    }

    function getAdress() {
        return $this->adress;
    }

    function getEmail() {
        return $this->email;
    }

    function getMatricule() {
        return $this->matricule;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getId() {
        return $this->id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setId($id) {
        $this->id = $id;
    }
    function getEnabled() {
        return $this->enabled;
    }

    function setEnabled($enabled) {
        $this->enabled = $enabled;
    }




}
