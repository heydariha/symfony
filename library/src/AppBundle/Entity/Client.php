<?php

namespace AppBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bname;

    /**
     * @var \DateTime
     */
    private $breleased;

    /**
     * @var int
     */
    private $blength;


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
     * Set bname
     *
     * @param string $bname
     *
     * @return Client
     */
    public function setBname($bname)
    {
        $this->bname = $bname;

        return $this;
    }

    /**
     * Get bname
     *
     * @return string
     */
    public function getBname()
    {
        return $this->bname;
    }

    /**
     * Set breleased
     *
     * @param \DateTime $breleased
     *
     * @return Client
     */
    public function setBreleased($breleased)
    {
        $this->breleased = $breleased;

        return $this;
    }

    /**
     * Get breleased
     *
     * @return \DateTime
     */
    public function getBreleased()
    {
        return $this->breleased;
    }

    /**
     * Set blength
     *
     * @param integer $blength
     *
     * @return Client
     */
    public function setBlength($blength)
    {
        $this->blength = $blength;

        return $this;
    }

    /**
     * Get blength
     *
     * @return int
     */
    public function getBlength()
    {
        return $this->blength;
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
     * @return Client
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
