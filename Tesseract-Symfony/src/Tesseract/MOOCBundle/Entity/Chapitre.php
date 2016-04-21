<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre", indexes={@ORM\Index(name="fk_chapitre_cours1_idx", columns={"id_cours"})})
 * @ORM\Entity
 */
class Chapitre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Cours
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="id")
     * })
     */
    private $idCours;
    function getNom() {
        return $this->nom;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDescription() {
        return $this->description;
    }

    function getResume() {
        return $this->resume;
    }

    function getId() {
        return $this->id;
    }

    function getIdCours() {
        return $this->idCours;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setResume($resume) {
        $this->resume = $resume;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCours(\Tesseract\UserBundle\Entity\Cours $idCours) {
        $this->idCours = $idCours;
    }




    /**
     * Set nom
     *
     * @param string $nom
     * @return Chapitre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Chapitre
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Chapitre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Chapitre
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
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
     * Set idCours
     *
     * @param \Tesseract\MOOCBundle\Entity\Cours $idCours
     * @return Chapitre
     */
    public function setIdCours(\Tesseract\MOOCBundle\Entity\Cours $idCours = null)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return \Tesseract\MOOCBundle\Entity\Cours 
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}
