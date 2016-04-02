<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BanForum
 *
 * @ORM\Table(name="ban_forum", indexes={@ORM\Index(name="fk_ban_forum_utilisateur1_idx", columns={"id_utilisateur"})})
 * @ORM\Entity
 */
class BanForum
{
    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="string", length=45, nullable=true)
     */
    private $cause;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

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


}
