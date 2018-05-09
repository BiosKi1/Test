<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="Room")
 * @ORM\Entity
 */
class Room
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_places", type="integer", nullable=true)
     */
    private $nbPlaces;


}

