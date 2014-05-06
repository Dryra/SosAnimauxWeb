<?php

namespace SosAnimauxFront\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="id_pension", columns={"id_pension"})})
 * @ORM\Entity
 */
class Note
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
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var \SosAnimauxFront\FrontOfficeBundle\Entity\Pensions
     *
     * @ORM\ManyToOne(targetEntity="SosAnimauxFront\FrontOfficeBundle\Entity\Pensions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pension", referencedColumnName="id")
     * })
     */
    private $idPension;



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
     * Set note
     *
     * @param integer $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idPension
     *
     * @param \SosAnimauxFront\FrontOfficeBundle\Entity\Pensions $idPension
     * @return Note
     */
    public function setIdPension(\SosAnimauxFront\FrontOfficeBundle\Entity\Pensions $idPension = null)
    {
        $this->idPension = $idPension;

        return $this;
    }

    /**
     * Get idPension
     *
     * @return \SosAnimauxFront\FrontOfficeBundle\Entity\Pensions 
     */
    public function getIdPension()
    {
        return $this->idPension;
    }
}
