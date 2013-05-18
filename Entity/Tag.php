<?php

namespace Videl\PublishMyCodeBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tag
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Videl\PublishMyCodeBundle\Entity\TagRepository")
 */
class Tag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Videl\PublishMyCodeBundle\Entity\Post", mappedBy="tags")
     */
    protected $posts;

    public function __construct() 
    {
        $this->posts = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function setPosts(\ArrayCollection $posts)
    {
        $this->posts = $posts;

        return $this;
    }
}