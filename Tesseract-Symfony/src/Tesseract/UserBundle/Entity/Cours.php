<?php

namespace Tesseract\UserBundle\Entity;

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


}
