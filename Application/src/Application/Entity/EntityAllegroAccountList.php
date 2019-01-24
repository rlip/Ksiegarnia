<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAccountList
 *
 * @ORM\Table(name="allegro_account_list")
 * @ORM\Entity
 */
class EntityAllegroAccountList extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegroal_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegroalId;

    /**
     * @var string
     *
     * @ORM\Column(name="allegroal_login", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroalLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="allegroal_password", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegroalPassword;


    /**
     * Get allegroalId
     *
     * @return integer
     */
    public function getAllegroalId()
    {
        return $this->allegroalId;
    }

    /**
     * Set allegroalLogin
     *
     * @param string $allegroalLogin
     *
     * @return EntityAllegroAccountList
     */
    public function setAllegroalLogin($allegroalLogin)
    {
        $this->allegroalLogin = $allegroalLogin;

        return $this;
    }

    /**
     * Get allegroalLogin
     *
     * @return string
     */
    public function getAllegroalLogin()
    {
        return $this->allegroalLogin;
    }

    /**
     * Set allegroalPassword
     *
     * @param string $allegroalPassword
     *
     * @return EntityAllegroAccountList
     */
    public function setAllegroalPassword($allegroalPassword)
    {
        $this->allegroalPassword = $allegroalPassword;

        return $this;
    }

    /**
     * Get allegroalPassword
     *
     * @return string
     */
    public function getAllegroalPassword()
    {
        return $this->allegroalPassword;
    }
}

