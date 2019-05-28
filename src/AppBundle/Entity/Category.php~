<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category extends AbstractTaxonomy
{

    /**
     * @ORM\OneToMany(
     *     targetEntity = "News",
     *     mappedBy = "category"
     * )
     *
     */
    protected $posts;

}

