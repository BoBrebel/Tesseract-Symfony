<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionEvenement
 *
 * @ORM\Table(name="inscription_evenement", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_evenement", columns={"id_evenement"})})
 * @ORM\Entity
 */
class InscriptionEvenement
{
    /**
     * @var \DateTime
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
     * @var \Tesseract\UserBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\UserBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id")
     * })
     */
    private $idEvenement;


}
