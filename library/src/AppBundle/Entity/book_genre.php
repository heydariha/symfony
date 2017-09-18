<?php

namespace AppBundle\Entity;

/**
 * book_genre
 */
class book_genre
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $bookId;

    /**
     * @var int
     */
    private $genreId;


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
     * Set bookId
     *
     * @param integer $bookId
     *
     * @return book_genre
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;

        return $this;
    }

    /**
     * Get bookId
     *
     * @return int
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Set genreId
     *
     * @param integer $genreId
     *
     * @return book_genre
     */
    public function setGenreId($genreId)
    {
        $this->genreId = $genreId;

        return $this;
    }

    /**
     * Get genreId
     *
     * @return int
     */
    public function getGenreId()
    {
        return $this->genreId;
    }
}

