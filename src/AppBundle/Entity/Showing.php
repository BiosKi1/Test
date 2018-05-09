<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Showing
 *
 * @ORM\Table(name="Showing", indexes={@ORM\Index(name="fk_Showing_Room1_idx", columns={"Room_id"}), @ORM\Index(name="fk_Showing_Movie1_idx", columns={"Movie_id"})})
 * @ORM\Entity
 */
class Showing
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="3D", type="boolean", nullable=true)
     */
    private $3d;

    /**
     * @var \Movie
     *
     * @ORM\ManyToOne(targetEntity="Movie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Movie_id", referencedColumnName="id")
     * })
     */
    private $movie;

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Room_id", referencedColumnName="id")
     * })
     */
    private $room;


}

