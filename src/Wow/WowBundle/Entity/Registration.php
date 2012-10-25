<?php

namespace Wow\WowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wow\WowBundle\Entity\Registration
 */
class Registration
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $world
     */
    private $world;

    /**
     * @var string $login
     */
    private $login;

    /**
     * @var string $pwd
     */
    private $pwd;

    /**
     * @var string $pwd2
     */
    private $pwd2;

    /**
     * @var string $email
     */
    private $email;

    public function isPasswordLegal()
    {
       return($this->pwd == $this->pwd2);
    }

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
     * Set world
     *
     * @param string $world
     */
    public function setWorld($world)
    {
        $this->world = $world;
    }

    /**
     * Get world
     *
     * @return string 
     */
    public function getWorld()
    {
        return $this->world;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set pwd2
     *
     * @param string $pwd2
     */
    public function setPwd2($pwd2)
    {
        $this->pwd2 = $pwd2;
    }

    /**
     * Get pwd2
     *
     * @return string 
     */
    public function getPwd2()
    {
        return $this->pwd2;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
}