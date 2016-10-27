<?php

/*
 * *
 * Pricemania registration test project.
 *
 * @author Matej Kuna <mat.kuna@gmail.com>
 */

/**
 * Pricemania registration test project.
 *
 * @author Matej Kuna <mat.kuna@gmail.com>
 */

namespace Pricemania\Bundle\RegistrationBundle\Entity;

use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Description of User.
 *
 * @author Matej Kuna <matej.kuna@smeonline.sk>
 */
class User implements UserInterface, EncoderAwareInterface
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $plainPassword;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var bool
     */
    private $enabled = true;

    /**
     * @var int
     */
    private $userId;

    public function getEncoderName()
    {
        return; // use the default encoder
    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getUsername()
    {
        return $this->getEmail();
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthdate.
     *
     * @param string $birthdate
     *
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate.
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set plainPassword.
     *
     * @param string $plainPassword
     *
     * @return User
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get plainPassword.
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set salt.
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt.
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set enabled.
     *
     * @param bool $enabled
     *
     * @return User
     */
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled.
     *
     * @return \bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
