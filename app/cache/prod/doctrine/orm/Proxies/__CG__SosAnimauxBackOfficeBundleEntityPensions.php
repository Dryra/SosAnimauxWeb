<?php

namespace Proxies\__CG__\SosAnimaux\BackOfficeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pensions extends \SosAnimaux\BackOfficeBundle\Entity\Pensions implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'adr', 'tel', 'prixServ', 'jourDisp', 'prixPens', 'nom', 'note', 'idPrest');
        }

        return array('__isInitialized__', 'id', 'adr', 'tel', 'prixServ', 'jourDisp', 'prixPens', 'nom', 'note', 'idPrest');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pensions $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdr($adr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdr', array($adr));

        return parent::setAdr($adr);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdr', array());

        return parent::getAdr();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', array($tel));

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', array());

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixServ($prixServ)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixServ', array($prixServ));

        return parent::setPrixServ($prixServ);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixServ()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixServ', array());

        return parent::getPrixServ();
    }

    /**
     * {@inheritDoc}
     */
    public function setJourDisp($jourDisp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJourDisp', array($jourDisp));

        return parent::setJourDisp($jourDisp);
    }

    /**
     * {@inheritDoc}
     */
    public function getJourDisp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJourDisp', array());

        return parent::getJourDisp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixPens($prixPens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixPens', array($prixPens));

        return parent::setPrixPens($prixPens);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixPens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixPens', array());

        return parent::getPrixPens();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', array($note));

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', array());

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPrest(\SosAnimaux\BackOfficeBundle\Entity\Prestataire $idPrest = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPrest', array($idPrest));

        return parent::setIdPrest($idPrest);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPrest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPrest', array());

        return parent::getIdPrest();
    }

}