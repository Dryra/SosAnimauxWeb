<?php

namespace SosAnimauxFront\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pensions
 *
 * @ORM\Table(name="pensions", indexes={@ORM\Index(name="id_prest", columns={"id_prest", "adr", "tel", "prix_serv", "jour_disp"}), @ORM\Index(name="IDX_ABA78BB5D25A82E", columns={"id_prest"})})
 * @ORM\Entity
 */
class Pensions
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
     * @ORM\Column(name="adr", type="string", length=30, nullable=false)
     */
    private $adr;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_serv", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $prixServ;

    /**
     * @var string
     *
     * @ORM\Column(name="jour_disp", type="string", length=50, nullable=true)
     */
    private $jourDisp;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_pens", type="integer", nullable=false)
     */
    private $prixPens;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adr
     *
     * @param string $adr
     * @return Pensions
     */
    public function setAdr($adr)
    {
        $this->adr = $adr;

        return $this;
    }

    /**
     * Get adr
     *
     * @return string 
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Pensions
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set prixServ
     *
     * @param string $prixServ
     * @return Pensions
     */
    public function setPrixServ($prixServ)
    {
        $this->prixServ = $prixServ;

        return $this;
    }

    /**
     * Get prixServ
     *
     * @return string 
     */
    public function getPrixServ()
    {
        return $this->prixServ;
    }

    /**
     * Set jourDisp
     *
     * @param string $jourDisp
     * @return Pensions
     */
    public function setJourDisp($jourDisp)
    {
        $this->jourDisp = $jourDisp;

        return $this;
    }

    /**
     * Get jourDisp
     *
     * @return string 
     */
    public function getJourDisp()
    {
        return $this->jourDisp;
    }

    /**
     * Set prixPens
     *
     * @param integer $prixPens
     * @return Pensions
     */
    public function setPrixPens($prixPens)
    {
        $this->prixPens = $prixPens;

        return $this;
    }

    /**
     * Get prixPens
     *
     * @return integer 
     */
    public function getPrixPens()
    {
        return $this->prixPens;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Pensions
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
     * Set note
     *
     * @param integer $note
     * @return Pensions
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
     * Set idPrest
     *
     * @param \SosAnimauxFront\FrontOfficeBundle\Entity\Prestataire $idPrest
     * @return Pensions
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
}
