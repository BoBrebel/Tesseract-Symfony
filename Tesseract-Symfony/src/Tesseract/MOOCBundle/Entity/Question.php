<?php

namespace Tesseract\MOOCBundle\Entity;

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
     * @var \Tesseract\MOOCBundle\Entity\Epreuve
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Epreuve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_epreuve", referencedColumnName="id")
     * })
     */
    private $idEpreuve;



    /**
     * Set question
     *
     * @param string $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEpreuve
     *
     * @param \Tesseract\MOOCBundle\Entity\Epreuve $idEpreuve
     * @return Question
     */
    public function setIdEpreuve(\Tesseract\MOOCBundle\Entity\Epreuve $idEpreuve = null)
    {
        $this->idEpreuve = $idEpreuve;

        return $this;
    }

    /**
     * Get idEpreuve
     *
     * @return \Tesseract\MOOCBundle\Entity\Epreuve 
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }
}
