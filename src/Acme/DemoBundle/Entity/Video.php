<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Entity
 */
class Video extends Media
{

    /**
     * @var string
     *
     * @ORM\Column(name="bitrate", type="string", length=255)
     */
    private $bitrate;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=255)
     */
    private $duration;


    /**
     * Set bitrate
     *
     * @param string $bitrate
     * @return Video
     */
    public function setBitrate($bitrate)
    {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * Get bitrate
     *
     * @return string
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return Video
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
