<?php

namespace Tesseract\MOOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations", indexes={@ORM\Index(name="id_organisme", columns={"id_organisme", "id_utilisateur"}), @ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="IDX_232710AE5D3AF914", columns={"id_organisme"})})
 * @ORM\Entity
 */
class Invitations
{
    /**
     * @var string
     *
     * @ORM\Column(name="sens", type="string", length=1, nullable=true)
     */
    private $sens;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=3, nullable=false)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
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
     * @var \Tesseract\MOOCBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Tesseract\MOOCBundle\Entity\Organisation
     *
     * @ORM\ManyToOne(targetEntity="Tesseract\MOOCBundle\Entity\Organisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisme", referencedColumnName="id")
     * })
     */
    private $idOrganisme;



    /**
     * Set sens
     *
     * @param string $sens
     * @return Invitations
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return string 
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Invitations
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
     * Set date
     *
     * @param \DateTime $date
     * @return Invitations
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
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
     * Set idUtilisateur
     *
     * @param \Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur
     * @return Invitations
     */
    public function setIdUtilisateur(\Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \Tesseract\MOOCBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idOrganisme
     *
     * @param \Tesseract\MOOCBundle\Entity\Organisation $idOrganisme
     * @return Invitations
     */
    public function setIdOrganisme(\Tesseract\MOOCBundle\Entity\Organisation $idOrganisme = null)
    {
        $this->idOrganisme = $idOrganisme;

        return $this;
    }

    /**
     * Get idOrganisme
     *
     * @return \Tesseract\MOOCBundle\Entity\Organisation 
     */
    public function getIdOrganisme()
    {
        return $this->idOrganisme;
    }
}
