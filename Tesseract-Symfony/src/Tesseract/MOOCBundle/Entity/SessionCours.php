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
     * @var \Tesseract\UserBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\UserBundle\Entity\Cours
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Cours")
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


}
