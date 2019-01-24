<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityUser
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class EntityUser extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=32, precision=0, scale=0, nullable=false, unique=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_salt", type="string", length=32, precision=0, scale=0, nullable=false, unique=false)
     */
    private $userSalt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_active", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $userActive;


    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return EntityUser
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return EntityUser
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userSalt
     *
     * @param string $userSalt
     *
     * @return EntityUser
     */
    public function setUserSalt($userSalt)
    {
        $this->userSalt = $userSalt;

        return $this;
    }

    /**
     * Get userSalt
     *
     * @return string
     */
    public function getUserSalt()
    {
        return $this->userSalt;
    }

    /**
     * Set userActive
     *
     * @param boolean $userActive
     *
     * @return EntityUser
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return boolean
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}

