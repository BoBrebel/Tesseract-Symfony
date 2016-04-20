<?php

namespace Tesseract\MOOCBundle\Entity;

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
     * @var \Tesseract\MOOCBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id")
     * })
     */
    private $idQuestion;



    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set justification
     *
     * @param string $justification
     * @return Reponse
     */
    public function setJustification($justification)
    {
        $this->justification = $justification;

        return $this;
    }

    /**
     * Get justification
     *
     * @return string 
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Reponse
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
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
     * Set idQuestion
     *
     * @param \Tesseract\MOOCBundle\Entity\Question $idQuestion
     * @return Reponse
     */
    public function setIdQuestion(\Tesseract\MOOCBundle\Entity\Question $idQuestion = null)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion
     *
     * @return \Tesseract\MOOCBundle\Entity\Question 
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }
}
