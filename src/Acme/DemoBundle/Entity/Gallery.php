<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Entity
 * @ORM\Table()
 */
class Gallery extends Content
{

    /** @ORM\OneToMany(targetEntity="Content", mappedBy="container") */
    private $contents;


    /**
     * Set contents
     *
     * @param string $contents
     * @return Gallery
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }
}
