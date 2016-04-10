<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireSujet
 *
 * @ORM\Table(name="commentaire_sujet", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur", "id_sujet"}), @ORM\Index(name="id_sujet", columns={"id_sujet"}), @ORM\Index(name="IDX_AB9F918150EAE44", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class CommentaireSujet
{
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
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
     * @var \Tesseract\UserBundle\Entity\SujetForum
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\SujetForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sujet", referencedColumnName="id")
     * })
     */
    private $idSujet;


}
