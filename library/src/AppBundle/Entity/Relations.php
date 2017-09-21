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
     * @var \AppBundle\Entity\Book
     */
    private $book;

    /**
     * @var \AppBundle\Entity\Genre
     */
    private $genre;


    /**
     * Set book
     *
     * @param \AppBundle\Entity\Book $book
     *
     * @return Relations
     */
    public function setBook(\AppBundle\Entity\Book $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \AppBundle\Entity\Book
     */
    public function getBook()
    {
        return $this->book;
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
