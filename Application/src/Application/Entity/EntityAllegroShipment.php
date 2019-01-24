<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityAllegroShipment
 *
 * @ORM\Table(name="allegro_shipment", uniqueConstraints={@ORM\UniqueConstraint(name="allegros_id_allegro", columns={"allegros_id_allegro"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\RepositoryAllegroShipment")
 */
class EntityAllegroShipment extends \Application\Entity\EntityAbstract
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allegros_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allegrosId;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegros_id_allegro", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrosIdAllegro;

    /**
     * @var string
     *
     * @ORM\Column(name="allegros_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $allegrosName;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegros_type", type="integer", precision=0, scale=0, nullable=false, unique=false, options={"comment":"Typ sposobu płatności (1 - płatność z góry, 2 - płatność przy odbiorze) "})
     */
    private $allegrosType;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegros_time_from", type="integer", precision=0, scale=0, nullable=false, unique=false, options={"comment":"Początek zakresu dla czasu wysyłki określonego przez przewoźnika (w godzinach) "})
     */
    private $allegrosTimeFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="allegros_time_to", type="integer", precision=0, scale=0, nullable=false, unique=false, options={"comment":"Koniec zakresu dla czasu wysyłki określonego przez przewoźnika (w godzinach)"})
     */
    private $allegrosTimeTo;


    /**
     * Get allegrosId
     *
     * @return integer
     */
    public function getAllegrosId()
    {
        return $this->allegrosId;
    }

    /**
     * Set allegrosIdAllegro
     *
     * @param integer $allegrosIdAllegro
     *
     * @return EntityAllegroShipment
     */
    public function setAllegrosIdAllegro($allegrosIdAllegro)
    {
        $this->allegrosIdAllegro = $allegrosIdAllegro;

        return $this;
    }

    /**
     * Get allegrosIdAllegro
     *
     * @return integer
     */
    public function getAllegrosIdAllegro()
    {
        return $this->allegrosIdAllegro;
    }

    /**
     * Set allegrosName
     *
     * @param string $allegrosName
     *
     * @return EntityAllegroShipment
     */
    public function setAllegrosName($allegrosName)
    {
        $this->allegrosName = $allegrosName;

        return $this;
    }

    /**
     * Get allegrosName
     *
     * @return string
     */
    public function getAllegrosName()
    {
        return $this->allegrosName;
    }

    /**
     * Set allegrosType
     *
     * @param integer $allegrosType
     *
     * @return EntityAllegroShipment
     */
    public function setAllegrosType($allegrosType)
    {
        $this->allegrosType = $allegrosType;

        return $this;
    }

    /**
     * Get allegrosType
     *
     * @return integer
     */
    public function getAllegrosType()
    {
        return $this->allegrosType;
    }

    /**
     * Set allegrosTimeFrom
     *
     * @param integer $allegrosTimeFrom
     *
     * @return EntityAllegroShipment
     */
    public function setAllegrosTimeFrom($allegrosTimeFrom)
    {
        $this->allegrosTimeFrom = $allegrosTimeFrom;

        return $this;
    }

    /**
     * Get allegrosTimeFrom
     *
     * @return integer
     */
    public function getAllegrosTimeFrom()
    {
        return $this->allegrosTimeFrom;
    }

    /**
     * Set allegrosTimeTo
     *
     * @param integer $allegrosTimeTo
     *
     * @return EntityAllegroShipment
     */
    public function setAllegrosTimeTo($allegrosTimeTo)
    {
        $this->allegrosTimeTo = $allegrosTimeTo;

        return $this;
    }

    /**
     * Get allegrosTimeTo
     *
     * @return integer
     */
    public function getAllegrosTimeTo()
    {
        return $this->allegrosTimeTo;
    }
}

