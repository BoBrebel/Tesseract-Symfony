<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionChallenge
 *
 * @ORM\Table(name="inscription_challenge", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_challenge", columns={"id_challenge"})})
 * @ORM\Entity
 */
class InscriptionChallenge
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="string", length=100, nullable=true)
     */
    private $solution;

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
     * @var \Tesseract\UserBundle\Entity\Challenge
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Challenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_challenge", referencedColumnName="id")
     * })
     */
    private $idChallenge;


}
