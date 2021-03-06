<?php

namespace gestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sejour
 *
 * @ORM\Table(name="sejour")
 * @ORM\Entity(repositoryClass="gestionBundle\Repository\SejourRepository")
 */
class Sejour
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFin", type="string", length=255)
     */
    private $dateFin;
	
	/**
	* @var Patient $lePatient
	*@ORM\ManyToOne(targetEntity="Patient")
	*/
	private $lePatient;

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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Sejour
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     * @return Sejour
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set lePatient
     *
     * @param \gestionBundle\Entity\Patient $lePatient
     * @return Sejour
     */
    public function setLePatient(\gestionBundle\Entity\Patient $lePatient = null)
    {
        $this->lePatient = $lePatient;

        return $this;
    }

    /**
     * Get lePatient
     *
     * @return \gestionBundle\Entity\Patient 
     */
    public function getLePatient()
    {
        return $this->lePatient;
    }
}
