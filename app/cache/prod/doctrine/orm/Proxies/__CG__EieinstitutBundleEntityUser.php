<?php

namespace Proxies\__CG__\Ei\einstitutBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Ei\einstitutBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setCommentaireForum(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setCommentaireForum($values);
    }

    public function getCommentaireForum()
    {
        $this->__load();
        return parent::getCommentaireForum();
    }

    public function addCommentaireForum($value)
    {
        $this->__load();
        return parent::addCommentaireForum($value);
    }

    public function removeCommentaireForum($value)
    {
        $this->__load();
        return parent::removeCommentaireForum($value);
    }

    public function setForum(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setForum($values);
    }

    public function getForum()
    {
        $this->__load();
        return parent::getForum();
    }

    public function addForum($value)
    {
        $this->__load();
        return parent::addForum($value);
    }

    public function removeForum($value)
    {
        $this->__load();
        return parent::removeForum($value);
    }

    public function setContact1(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setContact1($values);
    }

    public function getContact1()
    {
        $this->__load();
        return parent::getContact1();
    }

    public function addContact1($value)
    {
        $this->__load();
        return parent::addContact1($value);
    }

    public function removeContact1($value)
    {
        $this->__load();
        return parent::removeContact1($value);
    }

    public function setContacts(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setContacts($values);
    }

    public function getContacts()
    {
        $this->__load();
        return parent::getContacts();
    }

    public function addContact($value)
    {
        $this->__load();
        return parent::addContact($value);
    }

    public function removeContact($value)
    {
        $this->__load();
        return parent::removeContact($value);
    }

    public function setActualites(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setActualites($values);
    }

    public function getActualites()
    {
        $this->__load();
        return parent::getActualites();
    }

    public function addActualite($value)
    {
        $this->__load();
        return parent::addActualite($value);
    }

    public function removeActualite($value)
    {
        $this->__load();
        return parent::removeActualite($value);
    }

    public function setMessage(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setMessage($values);
    }

    public function getMessage()
    {
        $this->__load();
        return parent::getMessage();
    }

    public function addMessage($value)
    {
        $this->__load();
        return parent::addMessage($value);
    }

    public function removeMessage($value)
    {
        $this->__load();
        return parent::removeMessage($value);
    }

    public function setEtickets(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setEtickets($values);
    }

    public function getEtickets()
    {
        $this->__load();
        return parent::getEtickets();
    }

    public function addEticket($value)
    {
        $this->__load();
        return parent::addEticket($value);
    }

    public function removeEticket($value)
    {
        $this->__load();
        return parent::removeEticket($value);
    }

    public function setCercles(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setCercles($values);
    }

    public function getCercles()
    {
        $this->__load();
        return parent::getCercles();
    }

    public function addCercles($value)
    {
        $this->__load();
        return parent::addCercles($value);
    }

    public function removeCercles($value)
    {
        $this->__load();
        return parent::removeCercles($value);
    }

    public function setCercle(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setCercle($values);
    }

    public function getCercle()
    {
        $this->__load();
        return parent::getCercle();
    }

    public function addCercle($value)
    {
        $this->__load();
        return parent::addCercle($value);
    }

    public function removeCercle($value)
    {
        $this->__load();
        return parent::removeCercle($value);
    }

    public function setMessages(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setMessages($values);
    }

    public function getMessages()
    {
        $this->__load();
        return parent::getMessages();
    }

    public function addMessages($value)
    {
        $this->__load();
        return parent::addMessages($value);
    }

    public function removeMessages($value)
    {
        $this->__load();
        return parent::removeMessages($value);
    }

    public function setEvenements(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setEvenements($values);
    }

    public function getEvenements()
    {
        $this->__load();
        return parent::getEvenements();
    }

    public function addEvenement($value)
    {
        $this->__load();
        return parent::addEvenement($value);
    }

    public function removeEvenements($value)
    {
        $this->__load();
        return parent::removeEvenements($value);
    }

    public function setEvenementsUser(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setEvenementsUser($values);
    }

    public function getEvenementsUser()
    {
        $this->__load();
        return parent::getEvenementsUser();
    }

    public function addEvenementsUser($value)
    {
        $this->__load();
        return parent::addEvenementsUser($value);
    }

    public function removeEvenementsUser($value)
    {
        $this->__load();
        return parent::removeEvenementsUser($value);
    }

    public function setTutorielsEnLigne(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setTutorielsEnLigne($values);
    }

    public function getTutorielsEnLigne()
    {
        $this->__load();
        return parent::getTutorielsEnLigne();
    }

    public function addTutorielsEnLigne($value)
    {
        $this->__load();
        return parent::addTutorielsEnLigne($value);
    }

    public function removeTutorielsEnLigne($value)
    {
        $this->__load();
        return parent::removeTutorielsEnLigne($value);
    }

    public function setFiche(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setFiche($values);
    }

    public function getFiche()
    {
        $this->__load();
        return parent::getFiche();
    }

    public function addFiche($value)
    {
        $this->__load();
        return parent::addFiche($value);
    }

    public function removeFiche($value)
    {
        $this->__load();
        return parent::removeFiche($value);
    }

    public function setFiches(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setFiches($values);
    }

    public function getFiches()
    {
        $this->__load();
        return parent::getFiches();
    }

    public function addFiches($value)
    {
        $this->__load();
        return parent::addFiches($value);
    }

    public function removeFiches($value)
    {
        $this->__load();
        return parent::removeFiches($value);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setAvatar($avatar)
    {
        $this->__load();
        return parent::setAvatar($avatar);
    }

    public function getAvatar()
    {
        $this->__load();
        return parent::getAvatar();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setSexe($sexe)
    {
        $this->__load();
        return parent::setSexe($sexe);
    }

    public function getSexe()
    {
        $this->__load();
        return parent::getSexe();
    }

    public function setTel($tel)
    {
        $this->__load();
        return parent::setTel($tel);
    }

    public function getTel()
    {
        $this->__load();
        return parent::getTel();
    }

    public function setPays($pays)
    {
        $this->__load();
        return parent::setPays($pays);
    }

    public function getPays()
    {
        $this->__load();
        return parent::getPays();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function addRole($role)
    {
        $this->__load();
        return parent::addRole($role);
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function getUsernameCanonical()
    {
        $this->__load();
        return parent::getUsernameCanonical();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function getEmailCanonical()
    {
        $this->__load();
        return parent::getEmailCanonical();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getPlainPassword()
    {
        $this->__load();
        return parent::getPlainPassword();
    }

    public function getLastLogin()
    {
        $this->__load();
        return parent::getLastLogin();
    }

    public function getConfirmationToken()
    {
        $this->__load();
        return parent::getConfirmationToken();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function hasRole($role)
    {
        $this->__load();
        return parent::hasRole($role);
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isCredentialsExpired()
    {
        $this->__load();
        return parent::isCredentialsExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function isExpired()
    {
        $this->__load();
        return parent::isExpired();
    }

    public function isLocked()
    {
        $this->__load();
        return parent::isLocked();
    }

    public function isSuperAdmin()
    {
        $this->__load();
        return parent::isSuperAdmin();
    }

    public function isUser(\FOS\UserBundle\Model\UserInterface $user = NULL)
    {
        $this->__load();
        return parent::isUser($user);
    }

    public function removeRole($role)
    {
        $this->__load();
        return parent::removeRole($role);
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        $this->__load();
        return parent::setUsernameCanonical($usernameCanonical);
    }

    public function setCredentialsExpireAt(\DateTime $date)
    {
        $this->__load();
        return parent::setCredentialsExpireAt($date);
    }

    public function setCredentialsExpired($boolean)
    {
        $this->__load();
        return parent::setCredentialsExpired($boolean);
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function setEmailCanonical($emailCanonical)
    {
        $this->__load();
        return parent::setEmailCanonical($emailCanonical);
    }

    public function setEnabled($boolean)
    {
        $this->__load();
        return parent::setEnabled($boolean);
    }

    public function setExpired($boolean)
    {
        $this->__load();
        return parent::setExpired($boolean);
    }

    public function setExpiresAt(\DateTime $date)
    {
        $this->__load();
        return parent::setExpiresAt($date);
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function setSuperAdmin($boolean)
    {
        $this->__load();
        return parent::setSuperAdmin($boolean);
    }

    public function setPlainPassword($password)
    {
        $this->__load();
        return parent::setPlainPassword($password);
    }

    public function setLastLogin(\DateTime $time)
    {
        $this->__load();
        return parent::setLastLogin($time);
    }

    public function setLocked($boolean)
    {
        $this->__load();
        return parent::setLocked($boolean);
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->__load();
        return parent::setConfirmationToken($confirmationToken);
    }

    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {
        $this->__load();
        return parent::setPasswordRequestedAt($date);
    }

    public function getPasswordRequestedAt()
    {
        $this->__load();
        return parent::getPasswordRequestedAt();
    }

    public function isPasswordRequestNonExpired($ttl)
    {
        $this->__load();
        return parent::isPasswordRequestNonExpired($ttl);
    }

    public function setRoles(array $roles)
    {
        $this->__load();
        return parent::setRoles($roles);
    }

    public function getGroups()
    {
        $this->__load();
        return parent::getGroups();
    }

    public function getGroupNames()
    {
        $this->__load();
        return parent::getGroupNames();
    }

    public function hasGroup($name)
    {
        $this->__load();
        return parent::hasGroup($name);
    }

    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::addGroup($group);
    }

    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::removeGroup($group);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'lastLogin', 'locked', 'expired', 'expiresAt', 'confirmationToken', 'passwordRequestedAt', 'roles', 'credentialsExpired', 'credentialsExpireAt', 'id', 'avatar', 'nom', 'prenom', 'sexe', 'tel', 'pays', 'ville', 'adresse', 'comentforum', 'user_forum', 'user_contact1', 'user_contact', 'actualites', 'user_messages', 'user_eticket', 'user_cercles', 'cercle', 'message', 'evenements', 'evenements_user', 'user_tuto_en_ligne', 'preconisation', 'fiche', 'fiches');
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