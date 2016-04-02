<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikeSujetForum
 *
 * @ORM\Table(name="like_sujet_forum", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_sujet", columns={"id_sujet"})})
 * @ORM\Entity
 */
class LikeSujetForum
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
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
