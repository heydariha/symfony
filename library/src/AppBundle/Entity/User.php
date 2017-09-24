<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
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

    public function __construct()
    {
        parent::__construct();
    }
	
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
