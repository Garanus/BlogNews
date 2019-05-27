<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
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
}


