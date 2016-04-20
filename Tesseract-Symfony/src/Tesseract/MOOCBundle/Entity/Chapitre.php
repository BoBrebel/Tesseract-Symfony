<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre", indexes={@ORM\Index(name="fk_chapitre_cours1_idx", columns={"id_cours"})})
 * @ORM\Entity
 */
class Chapitre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\UserBundle\Entity\Cours
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="id")
     * })
     */
    private $idCours;
    function getNom() {
        return $this->nom;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDescription() {
        return $this->description;
    }

    function getResume() {
        return $this->resume;
    }

    function getId() {
        return $this->id;
    }

    function getIdCours() {
        return $this->idCours;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setResume($resume) {
        $this->resume = $resume;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCours(\Tesseract\UserBundle\Entity\Cours $idCours) {
        $this->idCours = $idCours;
    }



}
