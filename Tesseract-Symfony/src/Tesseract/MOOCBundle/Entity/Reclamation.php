<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_reclamation_utilisateur1_idx", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=200, nullable=true)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=3, nullable=true)
     */
    private $etat;

    /**
     * @var \Date
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

    function getSujet() {
        return $this->sujet;
    }

    function getDescription() {
        return $this->description;
    }

    function getEtat() {
        return $this->etat;
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

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setEtat($etat) {
        $this->etat = $etat;
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


}
