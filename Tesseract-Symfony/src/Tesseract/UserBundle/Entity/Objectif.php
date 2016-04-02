<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectif
 *
 * @ORM\Table(name="objectif", indexes={@ORM\Index(name="fk_objectif_chapitre1_idx", columns={"id_chapitre"})})
 * @ORM\Entity
 */
class Objectif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

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
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=255, nullable=true)
     */
    private $difficulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\UserBundle\Entity\Chapitre
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Chapitre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chapitre", referencedColumnName="id")
     * })
     */
    private $idChapitre;


}
