<?php

namespace AppBundle\Entity;

/**
 * Genre
 */
class Genre
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gname;


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
     * Set gname
     *
     * @param string $gname
     *
     * @return Genre
     */
    public function setGname($gname)
    {
        $this->gname = $gname;

        return $this;
    }

    /**
     * Get gname
     *
     * @return string
     */
    public function getGname()
    {
        return $this->gname;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $relation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->relation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add relation
     *
     * @param \AppBundle\Entity\Relations $relation
     *
     * @return Genre
     */
    public function addRelation(\AppBundle\Entity\Relations $relation)
    {
        $this->relation[] = $relation;

        return $this;
    }

    /**
     * Remove relation
     *
     * @param \AppBundle\Entity\Relations $relation
     */
    public function removeRelation(\AppBundle\Entity\Relations $relation)
    {
        $this->relation->removeElement($relation);
    }

    /**
     * Get relation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelation()
    {
        return $this->relation;
    }
}
