<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireCours
 *
 * @ORM\Table(name="commentaire_cours", indexes={@ORM\Index(name="fk_cours_has_utilisateur_utilisateur1_idx", columns={"id_utilisateur"}), @ORM\Index(name="fk_cours_has_utilisateur_cours1_idx", columns={"id_cours"})})
 * @ORM\Entity
 */
class CommentaireCours
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
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


}
