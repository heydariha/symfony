<?php

namespace AppBundle\Entity;

/**
 * books
 */
class books
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bookName;

    /**
     * @var \DateTime
     */
    private $releaseDate;

    /**
     * @var int
     */
    private $length;


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
     * Set bookName
     *
     * @param string $bookName
     *
     * @return books
     */
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;

        return $this;
    }

    /**
     * Get bookName
     *
     * @return string
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return books
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return books
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }
}
