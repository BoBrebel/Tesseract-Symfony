<?php

namespace Tesseract\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="fk_question_epreuve1_idx", columns={"id_epreuve"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", nullable=true)
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\UserBundle\Entity\Epreuve
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\UserBundle\Entity\Epreuve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_epreuve", referencedColumnName="id")
     * })
     */
    private $idEpreuve;


}
