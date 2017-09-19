<?php

namespace AppBundle\Entity;

/**
 * Relations
 */
class Relations
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $relDate;


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
     * Set relDate
     *
     * @param \DateTime $relDate
     *
     * @return Relations
     */
    public function setRelDate($relDate)
    {
        $this->relDate = $relDate;

        return $this;
    }

    /**
     * Get relDate
     *
     * @return \DateTime
     */
    public function getRelDate()
    {
        return $this->relDate;
    }
    /**
     * @var \AppBundle\Entity\Client
     */
    private $client;

    /**
     * @var \AppBundle\Entity\Genre
     */
    private $genre;


    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Relations
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Relations
     */
    public function setGenre(\AppBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
