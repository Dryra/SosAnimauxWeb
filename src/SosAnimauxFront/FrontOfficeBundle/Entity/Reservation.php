<?php

namespace SosAnimauxFront\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_pens", columns={"id_pens", "id_adh", "id_prest"}), @ORM\Index(name="id_adh", columns={"id_adh"}), @ORM\Index(name="id_prest", columns={"id_prest"}), @ORM\Index(name="IDX_42C84955BD350CE6", columns={"id_pens"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dateduree", type="string", length=150, nullable=false)
     */
    private $dateduree;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=3, nullable=false)
     */
    private $etat;

    /**
     * @var \SosAnimauxFront\FrontOfficeBundle\Entity\Prestataire
     *
     * @ORM\ManyToOne(targetEntity="SosAnimauxFront\FrontOfficeBundle\Entity\Prestataire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prest", referencedColumnName="id")
     * })
     */
    private $idPrest;

    /**
     * @var \SosAnimauxFront\FrontOfficeBundle\Entity\Pensions
     *
     * @ORM\ManyToOne(targetEntity="SosAnimauxFront\FrontOfficeBundle\Entity\Pensions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pens", referencedColumnName="id")
     * })
     */
    private $idPens;

    /**
     * @var \SosAnimauxFront\FrontOfficeBundle\Entity\Adherant
     *
     * @ORM\ManyToOne(targetEntity="SosAnimauxFront\FrontOfficeBundle\Entity\Adherant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adh", referencedColumnName="id")
     * })
     */
    private $idAdh;



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
     * Set dateduree
     *
     * @param string $dateduree
     * @return Reservation
     */
    public function setDateduree($dateduree)
    {
        $this->dateduree = $dateduree;

        return $this;
    }

    /**
     * Get dateduree
     *
     * @return string 
     */
    public function getDateduree()
    {
        return $this->dateduree;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Reservation
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
     * Set idPrest
     *
     * @param \SosAnimauxFront\FrontOfficeBundle\Entity\Prestataire $idPrest
     * @return Reservation
     */
    public function setIdPrest(\SosAnimauxFront\FrontOfficeBundle\Entity\Prestataire $idPrest = null)
    {
        $this->idPrest = $idPrest;

        return $this;
    }

    /**
     * Get idPrest
     *
     * @return \SosAnimauxFront\FrontOfficeBundle\Entity\Prestataire 
     */
    public function getIdPrest()
    {
        return $this->idPrest;
    }

    /**
     * Set idPens
     *
     * @param \SosAnimauxFront\FrontOfficeBundle\Entity\Pensions $idPens
     * @return Reservation
     */
    public function setIdPens(\SosAnimauxFront\FrontOfficeBundle\Entity\Pensions $idPens = null)
    {
        $this->idPens = $idPens;

        return $this;
    }

    /**
     * Get idPens
     *
     * @return \SosAnimauxFront\FrontOfficeBundle\Entity\Pensions 
     */
    public function getIdPens()
    {
        return $this->idPens;
    }

    /**
     * Set idAdh
     *
     * @param \SosAnimauxFront\FrontOfficeBundle\Entity\Adherant $idAdh
     * @return Reservation
     */
    public function setIdAdh(\SosAnimauxFront\FrontOfficeBundle\Entity\Adherant $idAdh = null)
    {
        $this->idAdh = $idAdh;

        return $this;
    }

    /**
     * Get idAdh
     *
     * @return \SosAnimauxFront\FrontOfficeBundle\Entity\Adherant 
     */
    public function getIdAdh()
    {
        return $this->idAdh;
    }
}
