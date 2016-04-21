<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere", uniqueConstraints={@ORM\UniqueConstraint(name="nom_UNIQUE", columns={"nom"})})
 * @ORM\Entity
 */
class Matiere
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="text", nullable=true)
     */
    private $photo;
    
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

    function getDescription() {
        return $this->description;
    }

    function getId() {
        return $this->id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setId($id) {
        $this->id = $id;
    }
    function getPhoto() {
        return $this->photo;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }



}
