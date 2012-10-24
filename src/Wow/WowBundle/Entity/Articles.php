<?php

namespace Wow\WowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wow\WowBundle\Entity\Articles
 */
class Articles
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var date $date
     */
    private $date;

    /**
     * @var string $shortdesc
     */
    private $shortdesc;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var string $author
     */
    private $author;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set shortdesc
     *
     * @param string $shortdesc
     */
    public function setShortdesc($shortdesc)
    {
        $this->shortdesc = $shortdesc;
    }

    /**
     * Get shortdesc
     *
     * @return string 
     */
    public function getShortdesc()
    {
        return $this->shortdesc;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}