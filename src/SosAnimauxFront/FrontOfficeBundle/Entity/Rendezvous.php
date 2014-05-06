<?php

namespace SosAnimauxFront\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="id_prest", columns={"id_prest"}), @ORM\Index(name="id_adh", columns={"id_adh"})})
 * @ORM\Entity
 */
class Rendezvous
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
     * @ORM\Column(name="etat", type="string", length=30, nullable=false)
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
     * @return Rendezvous
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
     * @return Rendezvous
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
     * @return Rendezvous
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
     * Set idAdh
     *
     * @param \SosAnimauxFront\FrontOfficeBundle\Entity\Adherant $idAdh
     * @return Rendezvous
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
