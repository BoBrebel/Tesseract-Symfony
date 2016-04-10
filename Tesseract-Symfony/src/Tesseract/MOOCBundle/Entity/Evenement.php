<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="fk_evenement_organisation1_idx", columns={"id_organisation"})})
 * @ORM\Entity
 */
class Evenement
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_max", type="integer", nullable=true)
     */
    private $nbrMax;

    /**
     * @var string
     *
     * @ORM\Column(name="affiche", type="string", length=100, nullable=true)
     */
    private $affiche;

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
     * @var \Tesseract\UserBundle\Entity\Organisation
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Organisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisation", referencedColumnName="id")
     * })
     */
    private $idOrganisation;


}
