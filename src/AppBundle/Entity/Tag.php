<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 * @ORM\Entity
 * @ORM\Table(name="tag")
 */
class Tag extends AbstractTaxonomy
{

    /**
     * @ORM\ManyToMany(
     *     targetEntity = "News",
     *     mappedBy = "tags"
     * )
     *
     */
    protected $posts;
}

