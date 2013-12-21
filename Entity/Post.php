<?php

namespace Videl\PublishMyCodeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Videl\PublishMyCodeBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity="Videl\PublishMyCodeBundle\Entity\Post")
     * @ORM\JoinColumn(nullable=true)
     */
    private $response_to;

    /**
     * @ORM\OneToOne(targetEntity="Videl\PublishMyCodeBundle\Entity\Code", cascade={"persist", "remove"})
     */
    private $code;


    public function __construct()
    {
        $this->date = new \DateTime();
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
     * Set titre
     *
     * @param string $titre
     * @return Post
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
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
     * Set response_to
     *
     * @param \Videl\PublishMyCodeBundle\Entity\Post $responseTo
     * @return Post
     */
    public function setResponseTo(\Videl\PublishMyCodeBundle\Entity\Post $responseTo)
    {
        $this->response_to = $responseTo;

        return $this;
    }

    /**
     * Get response_to
     *
     * @return \Videl\PublishMyCodeBundle\Entity\Post 
     */
    public function getResponseTo()
    {
        return $this->response_to;
    }

    /**
     * Set code
     *
     * @param \Videl\PublishMyCodeBundle\Entity\Code $code
     * @return code
     */
    public function setCode(\Videl\PublishMyCodeBundle\Entity\Code $code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return \Videl\PublishMyCodeBundle\Entity\Code 
     */
    public function getCode()
    {
        return $this->code;
    }
}
