<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="fk_reponse_question1_idx", columns={"id_question"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="text", nullable=true)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="justification", type="text", nullable=true)
     */
    private $justification;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=11, nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\UserBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id")
     * })
     */
    private $idQuestion;


}
