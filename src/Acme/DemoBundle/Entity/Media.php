<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Entity
 * @ORM\Table()
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="media_type", type="string")
 * @ORM\DiscriminatorMap({
 *      "video" = "Video",
 *      "image" = "Image"
 *  })
 */
abstract class Media extends Content
{

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=255)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=255)
     */
    private $height;


    /**
     * Set width
     *
     * @param string $width
     * @return Media
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return Media
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }
}
