<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuve
 *
 * @ORM\Table(name="epreuve", indexes={@ORM\Index(name="fk_epreuve_objectif1_idx", columns={"id_objectif"})})
 * @ORM\Entity
 */
class Epreuve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cours", type="integer", nullable=false)
     */
    private $idCours;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="text", nullable=true)
     */
    private $difficulte;

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
     * @var \Tesseract\UserBundle\Entity\Objectif
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Objectif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_objectif", referencedColumnName="id")
     * })
     */
    private $idObjectif;


}
