<?php

namespace Proxies\__CG__\Ei\einstitutBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NewsLetters extends \Ei\einstitutBundle\Entity\NewsLetters implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setNewsLettersEnvoye(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setNewsLettersEnvoye($values);
    }

    public function getNewsLettersEnvoye()
    {
        $this->__load();
        return parent::getNewsLettersEnvoye();
    }

    public function addNewsLettersEnvoye($value)
    {
        $this->__load();
        return parent::addNewsLettersEnvoye($value);
    }

    public function removeNewsLettersEnvoye($value)
    {
        $this->__load();
        return parent::removeNewsLettersEnvoye($value);
    }

    public function getNewsLettersTypeLetter()
    {
        $this->__load();
        return parent::getNewsLettersTypeLetter();
    }

    public function setNewsLettersTypeLetter($u2)
    {
        $this->__load();
        return parent::setNewsLettersTypeLetter($u2);
    }

    public function setNewsLettersClic(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setNewsLettersClic($values);
    }

    public function getNewsLettersClic()
    {
        $this->__load();
        return parent::getNewsLettersClic();
    }

    public function addNewsLettersClic($value)
    {
        $this->__load();
        return parent::addNewsLettersClic($value);
    }

    public function removeNewsLettersClic($value)
    {
        $this->__load();
        return parent::removeNewsLettersClic($value);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setContenu($contenu)
    {
        $this->__load();
        return parent::setContenu($contenu);
    }

    public function getContenu()
    {
        $this->__load();
        return parent::getContenu();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'contenu', 'newsletter_envoye', 'newsletter_typeletter', 'newsletter_clic');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}