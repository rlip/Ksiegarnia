<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityPublisher
 *
 * @ORM\Table(name="publisher")
 * @ORM\Entity
 */
class EntityPublisher extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="publisher_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $publisherId;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $publisherName;


    /**
     * Get publisherId
     *
     * @return integer 
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * Set publisherName
     *
     * @param string $publisherName
     * @return EntityPublisher
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;

        return $this;
    }

    /**
     * Get publisherName
     *
     * @return string 
     */
    public function getPublisherName()
    {
        return $this->publisherName;
    }
}
