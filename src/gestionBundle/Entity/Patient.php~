<?php

namespace gestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="gestionBundle\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroSecu", type="string", length=255)
     */
    private $numeroSecu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaiss", type="date")
     */
    private $dateNaiss;

    /**
     * @var int
     *
     * @ORM\Column(name="adrPostal", type="integer")
     */
    private $adrPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="adrMail", type="string", length=255)
     */
    private $adrMail;

    /**
     * @var bool
     *
     * @ORM\Column(name="assurer", type="boolean")
     */
    private $assurer;

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
     * Set numeroSecu
     *
     * @param string $numeroSecu
     * @return Patient
     */
    public function setNumeroSecu($numeroSecu)
    {
        $this->numeroSecu = $numeroSecu;

        return $this;
    }

    /**
     * Get numeroSecu
     *
     * @return string 
     */
    public function getNumeroSecu()
    {
        return $this->numeroSecu;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Patient
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
     * Set prenom
     *
     * @param string $prenom
     * @return Patient
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return Patient
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set adrPostal
     *
     * @param integer $adrPostal
     * @return Patient
     */
    public function setAdrPostal($adrPostal)
    {
        $this->adrPostal = $adrPostal;

        return $this;
    }

    /**
     * Get adrPostal
     *
     * @return integer 
     */
    public function getAdrPostal()
    {
        return $this->adrPostal;
    }

    /**
     * Set adrMail
     *
     * @param string $adrMail
     * @return Patient
     */
    public function setAdrMail($adrMail)
    {
        $this->adrMail = $adrMail;

        return $this;
    }

    /**
     * Get adrMail
     *
     * @return string 
     */
    public function getAdrMail()
    {
        return $this->adrMail;
    }

    /**
     * Set assurer
     *
     * @param boolean $assurer
     * @return Patient
     */
    public function setAssurer($assurer)
    {
        $this->assurer = $assurer;

        return $this;
    }

    /**
     * Get assurer
     *
     * @return boolean 
     */
    public function getAssurer()
    {
        return $this->assurer;
    }

}
