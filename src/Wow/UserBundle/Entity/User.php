<?php
// src/Acme/UserBundle/Entity/User.php

namespace Wow\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="255")
     *
     * @Assert\NotBlank()
     */
    private $world;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
}