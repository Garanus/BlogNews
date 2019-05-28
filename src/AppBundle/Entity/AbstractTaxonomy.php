<?php

namespace AppBundle\Entity;

use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;
use Monolog\Utils;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
abstract class AbstractTaxonomy
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=120, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(name="slug", type="string", length=120, unique=true)
     */
    private $slug;

    protected $posts;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\News $post
     *
     * @return Tag
     */
    public function addPost(\AppBundle\Entity\News $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\News $post
     */
    public function removePost(\AppBundle\Entity\News $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
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
     *
     * @return AbstractTaxonomy
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

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return AbstractTaxonomy
     */
    public function setSlug($slug)
    {
        $this->slug = \AppBundle\LIBS\Utils::sluggify($slug);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave(){
        if(null === $this->slug){
            $this->setSlug($this->getName());
        }
    }
}
