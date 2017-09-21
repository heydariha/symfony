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



}
