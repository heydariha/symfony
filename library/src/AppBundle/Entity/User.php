<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $uname;

    /**
     * @var string
     */
    protected $ufamily;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $userbook;


    /**
     * Add userbook
     *
     * @param \AppBundle\Entity\Userbook $userbook
     *
     * @return User
     */
    public function addUserbook(\AppBundle\Entity\Userbook $userbook)
    {
        $this->userbook[] = $userbook;

        return $this;
    }

    /**
     * Remove userbook
     *
     * @param \AppBundle\Entity\Userbook $userbook
     */
    public function removeUserbook(\AppBundle\Entity\Userbook $userbook)
    {
        $this->userbook->removeElement($userbook);
    }

    /**
     * Get userbook
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserbook()
    {
        return $this->userbook;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user_book;


}
