<?php

namespace AppBundle\Entity;

/**
 * geners
 */
class geners
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gName
     *
     * @param string $gName
     *
     * @return geners
     */
    public function setGName($gName)
    {
        $this->gName = $gName;

        return $this;
    }

    /**
     * Get gName
     *
     * @return string
     */
    public function getGName()
    {
        return $this->gName;
    }
}

