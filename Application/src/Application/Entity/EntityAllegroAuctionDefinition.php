<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAuctionDefinition
 *
 * @ORM\Table(name="allegro_auction_definition")
 * @ORM\Entity
 */
class EntityAllegroAuctionDefinition extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegroad_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegroadId;


    /**
     * Get allegroadId
     *
     * @return integer
     */
    public function getAllegroadId()
    {
        return $this->allegroadId;
    }
}

