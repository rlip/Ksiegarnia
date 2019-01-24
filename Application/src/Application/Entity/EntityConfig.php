<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityConfig
 *
 * @ORM\Table(name="config")
 * @ORM\Entity
 */
class EntityConfig extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="config_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configId;

    /**
     * @var string
     *
     * @ORM\Column(name="config_key", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $configKey;

    /**
     * @var string
     *
     * @ORM\Column(name="config_value", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $configValue;


    /**
     * Get configId
     *
     * @return integer 
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     * Set configKey
     *
     * @param string $configKey
     * @return EntityConfig
     */
    public function setConfigKey($configKey)
    {
        $this->configKey = $configKey;

        return $this;
    }

    /**
     * Get configKey
     *
     * @return string 
     */
    public function getConfigKey()
    {
        return $this->configKey;
    }

    /**
     * Set configValue
     *
     * @param string $configValue
     * @return EntityConfig
     */
    public function setConfigValue($configValue)
    {
        $this->configValue = $configValue;

        return $this;
    }

    /**
     * Get configValue
     *
     * @return string 
     */
    public function getConfigValue()
    {
        return $this->configValue;
    }
}
