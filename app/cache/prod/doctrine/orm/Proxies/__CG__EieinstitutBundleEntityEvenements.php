<?php

namespace Proxies\__CG__\Ei\einstitutBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Evenements extends \Ei\einstitutBundle\Entity\Evenements implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setUsers(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setUsers($values);
    }

    public function getUsers()
    {
        $this->__load();
        return parent::getUsers();
    }

    public function addUsers($value)
    {
        $this->__load();
        return parent::addUsers($value);
    }

    public function removeUsers($value)
    {
        $this->__load();
        return parent::removeUsers($value);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setUser($value)
    {
        $this->__load();
        return parent::setUser($value);
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

    public function setDateDebut($dateDebut)
    {
        $this->__load();
        return parent::setDateDebut($dateDebut);
    }

    public function getDateDebut()
    {
        $this->__load();
        return parent::getDateDebut();
    }

    public function setDateFin($dateFin)
    {
        $this->__load();
        return parent::setDateFin($dateFin);
    }

    public function getDateFin()
    {
        $this->__load();
        return parent::getDateFin();
    }

    public function setAlarme($alarme)
    {
        $this->__load();
        return parent::setAlarme($alarme);
    }

    public function getAlarme()
    {
        $this->__load();
        return parent::getAlarme();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function setLocalisation($localisation)
    {
        $this->__load();
        return parent::setLocalisation($localisation);
    }

    public function getLocalisation()
    {
        $this->__load();
        return parent::getLocalisation();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'dateDebut', 'dateFin', 'alarme', 'notes', 'localisation', 'url', 'users', 'user');
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