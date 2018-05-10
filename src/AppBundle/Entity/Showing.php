<?php

namespace AppBundle\Entity;

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
    private $troisd;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Movie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Movie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Movie_id", referencedColumnName="id")
     * })
     */
    private $movie;

    /**
     * @var \AppBundle\Entity\Room
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Room_id", referencedColumnName="id")
     * })
     */
    private $room;


    /**
     * @var boolean
     */
    private $3d;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Showing
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set 3d
     *
     * @param boolean $3d
     *
     * @return Showing
     */
    public function set3d($3d)
    {
        $this->3d = $3d;

        return $this;
    }

    /**
     * Get 3d
     *
     * @return boolean
     */
    public function get3d()
    {
        return $this->3d;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set movie
     *
     * @param \AppBundle\Entity\Movie $movie
     *
     * @return Showing
     */
    public function setMovie(\AppBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \AppBundle\Entity\Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * Set room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return Showing
     */
    public function setRoom(\AppBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \AppBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }
}
