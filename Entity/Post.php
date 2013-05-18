<?php

namespace Videl\PublishMyCodeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Post
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Videl\PublishMyCodeBundle\Entity\PostRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $votePlus;

    /**
     * @var integer
     */
    private $voteMinus;

    /**
     * @ORM\ManyToMany(targetEntity="Videl\PublishMyCodeBundle\Entity\Tag", inversedBy="posts")
     */
    protected $tags;

    /**
     * @ORM\OneToOne(targetEntity="Videl\PublishMyCodeBundle\Entity\Code", inversedBy="post")
     */
    protected $code;

    public function __construct() 
    {
        $this->tags = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
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
     * Set description
     *
     * @param string $description
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set votePlus
     *
     * @param integer $votePlus
     * @return Post
     */
    public function setVotePlus($votePlus)
    {
        $this->votePlus = $votePlus;
    
        return $this;
    }

    /**
     * Get votePlus
     *
     * @return integer 
     */
    public function getVotePlus()
    {
        return $this->votePlus;
    }

    /**
     * Set voteMinus
     *
     * @param integer $voteMinus
     * @return Post
     */
    public function setVoteMinus($voteMinus)
    {
        $this->voteMinus = $voteMinus;
    
        return $this;
    }

    /**
     * Get voteMinus
     *
     * @return integer 
     */
    public function getVoteMinus()
    {
        return $this->voteMinus;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags(\ArrayCollection $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode(Code $code)
    {
        $this->code = $code;

        return $this;
    }

    // /**
    //  * @ORM\PrePersist()
    //  * @ORM\PreUpdate()
    //  */
    // public function preDate()
    // {
    //     $this->date = new \DateTime();
    // }
}