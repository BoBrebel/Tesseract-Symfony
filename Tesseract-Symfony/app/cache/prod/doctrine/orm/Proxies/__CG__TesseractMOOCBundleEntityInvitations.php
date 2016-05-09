<?php

namespace Proxies\__CG__\Tesseract\MOOCBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Invitations extends \Tesseract\MOOCBundle\Entity\Invitations implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'sens', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'etat', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'date', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'id', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'idUtilisateur', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'idOrganisme'];
        }

        return ['__isInitialized__', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'sens', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'etat', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'date', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'id', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'idUtilisateur', '' . "\0" . 'Tesseract\\MOOCBundle\\Entity\\Invitations' . "\0" . 'idOrganisme'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Invitations $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setSens($sens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSens', [$sens]);

        return parent::setSens($sens);
    }

    /**
     * {@inheritDoc}
     */
    public function getSens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSens', []);

        return parent::getSens();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUtilisateur(\Tesseract\MOOCBundle\Entity\Utilisateur $idUtilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUtilisateur', [$idUtilisateur]);

        return parent::setIdUtilisateur($idUtilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUtilisateur', []);

        return parent::getIdUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOrganisme(\Tesseract\MOOCBundle\Entity\Organisation $idOrganisme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrganisme', [$idOrganisme]);

        return parent::setIdOrganisme($idOrganisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrganisme', []);

        return parent::getIdOrganisme();
    }

}
