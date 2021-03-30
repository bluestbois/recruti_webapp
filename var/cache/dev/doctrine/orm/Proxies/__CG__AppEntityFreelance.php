<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Freelance extends \App\Entity\Freelance implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'salary', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'Tag', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'Project', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'candidatures'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'salary', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'Tag', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'Project', '' . "\0" . 'App\\Entity\\Freelance' . "\0" . 'candidatures'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Freelance $proxy) {
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
    public function getId(): ?int
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalary(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalary', []);

        return parent::getSalary();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalary(int $salary): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalary', [$salary]);

        return parent::setSalary($salary);
    }

    /**
     * {@inheritDoc}
     */
    public function getTag(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTag', []);

        return parent::getTag();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\App\Entity\Tag $tag): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\App\Entity\Tag $tag): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getProject(): ?\App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProject', []);

        return parent::getProject();
    }

    /**
     * {@inheritDoc}
     */
    public function setProject(?\App\Entity\Project $Project): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProject', [$Project]);

        return parent::setProject($Project);
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidatures(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidatures', []);

        return parent::getCandidatures();
    }

    /**
     * {@inheritDoc}
     */
    public function addCandidature(\App\Entity\Candidature $candidature): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCandidature', [$candidature]);

        return parent::addCandidature($candidature);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCandidature(\App\Entity\Candidature $candidature): \App\Entity\Freelance
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCandidature', [$candidature]);

        return parent::removeCandidature($candidature);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
