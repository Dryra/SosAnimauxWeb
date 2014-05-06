<?php

namespace SosAnimauxFront\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestataire
 *
 * @ORM\Table(name="prestataire")
 * @ORM\Entity
 */
class Prestataire
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
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=20, nullable=false)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="jour_disp", type="string", length=50, nullable=true)
     */
    private $jourDisp;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_serv", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $prixServ;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="adr", type="string", length=30, nullable=false)
     */
    private $adr;



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
     * Set nom
     *
     * @param string $nom
     * @return Prestataire
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
     * @return Prestataire
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
     * Set domaine
     *
     * @param string $domaine
     * @return Prestataire
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set jourDisp
     *
     * @param string $jourDisp
     * @return Prestataire
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
     * Set prixServ
     *
     * @param string $prixServ
     * @return Prestataire
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
     * Set email
     *
     * @param string $email
     * @return Prestataire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Prestataire
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
     * Set mdp
     *
     * @param string $mdp
     * @return Prestataire
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set adr
     *
     * @param string $adr
     * @return Prestataire
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
}
