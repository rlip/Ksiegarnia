<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroAuctionNew
 *
 * @ORM\Table(name="allegro_auction_new")
 * @ORM\Entity
 */
class EntityAllegroAuctionNew extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegroan_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegroanId;


    /**
     * Get allegroanId
     *
     * @return integer
     */
    public function getAllegroanId()
    {
        return $this->allegroanId;
    }
}

