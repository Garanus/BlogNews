<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 * @ORM\Table(name="news")
 * @ORM\HasLifecycleCallbacks
 */
class News

{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string", length=120, unique=true)
     */
    private $title;

    /**
     * @ORM\Column(name="slug", type="string", length=120, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\Column(name="createDate", type="datetime")
     */
    private $createDate;

    /**
     * @ORM\Column(name="thumbnail", type="string", length=90, nullable=true)
     */
    private $thumbnail = null;

    /**
     * @ORM\ManyToOne(
     *     targetEntity = "Category",
     *     inversedBy = "posts"
     * )
     *
     * @ORM\JoinColumn(
     *     name = "category_id",
     *     referencedColumnName = "id",
     *     onDelete = "SET NULL"
     * )
     */
    private $category;

    /**
     * @ORM\ManyToMany(
     *     targetEntity = "Tag",
     *     inversedBy = "posts"
     * )
     *
     * @ORM\JoinTable(
     *     name = "blog_posts_tags"
     * )
     */
    private $tags;

    /**
     * @ORM\Column(name="author", type="string", length=180)
     */
    private $author;

    /**
     * @ORM\Column(name="publishedDate", type="datetime", nullable=true)
     */
    private $publishedDate = null;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
     * @return News
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
     * Set slug
     *
     * @param string $slug
     *
     * @return News
     */
    public function setSlug($slug)
    {
        $this->slug = \AppBundle\Libs\Utils::sluggify($slug);

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
     * Set content
     *
     * @param string $content
     *
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return News
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return News
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return News
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
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

    /**
     * Set publishedDate
     *
     * @param \DateTime $publishedDate
     *
     * @return News
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    /**
     * Get publishedDate
     *
     * @return \DateTime
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return News
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return News
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Tag $tag
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave(){
        if(null === $this->slug){
            $this->setSlug($this->getTitle());
        }
    }
}
