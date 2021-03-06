<?php

namespace App\Models\Proxies\__CG__\App\Models\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pitanje extends \App\Models\Entities\Pitanje implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'idpitanje', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'odgovor', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'naslov', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'tekstpitanja', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'nazivstruke', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'idlekar'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'idpitanje', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'odgovor', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'naslov', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'tekstpitanja', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'nazivstruke', '' . "\0" . 'App\\Models\\Entities\\Pitanje' . "\0" . 'idlekar'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pitanje $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdpitanje()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdpitanje();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdpitanje', []);

        return parent::getIdpitanje();
    }

    /**
     * {@inheritDoc}
     */
    public function setOdgovor($odgovor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOdgovor', [$odgovor]);

        return parent::setOdgovor($odgovor);
    }

    /**
     * {@inheritDoc}
     */
    public function getOdgovor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOdgovor', []);

        return parent::getOdgovor();
    }

    /**
     * {@inheritDoc}
     */
    public function setNaslov($naslov)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNaslov', [$naslov]);

        return parent::setNaslov($naslov);
    }

    /**
     * {@inheritDoc}
     */
    public function getNaslov()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNaslov', []);

        return parent::getNaslov();
    }

    /**
     * {@inheritDoc}
     */
    public function setTekstpitanja($tekstpitanja)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTekstpitanja', [$tekstpitanja]);

        return parent::setTekstpitanja($tekstpitanja);
    }

    /**
     * {@inheritDoc}
     */
    public function getTekstpitanja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTekstpitanja', []);

        return parent::getTekstpitanja();
    }

    /**
     * {@inheritDoc}
     */
    public function setNazivstruke(\App\Models\Entities\Struka $nazivstruke = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNazivstruke', [$nazivstruke]);

        return parent::setNazivstruke($nazivstruke);
    }

    /**
     * {@inheritDoc}
     */
    public function getNazivstruke()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNazivstruke', []);

        return parent::getNazivstruke();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdlekar(\App\Models\Entities\Lekar $idlekar = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdlekar', [$idlekar]);

        return parent::setIdlekar($idlekar);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdlekar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdlekar', []);

        return parent::getIdlekar();
    }

}
