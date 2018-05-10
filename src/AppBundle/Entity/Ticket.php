<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="Ticket", indexes={@ORM\Index(name="fk_Ticket_Price1_idx", columns={"Price_id"}), @ORM\Index(name="fk_Ticket_Showing1_idx", columns={"Showing_id"}), @ORM\Index(name="fk_Ticket_Spectator1_idx", columns={"Spectator_id"}), @ORM\Index(name="fk_Ticket_Order1_idx", columns={"Order_id"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Order_id", referencedColumnName="id")
     * })
     */
    private $order;

    /**
     * @var \AppBundle\Entity\Price
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Price")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Price_id", referencedColumnName="id")
     * })
     */
    private $price;

    /**
     * @var \AppBundle\Entity\Showing
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Showing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Showing_id", referencedColumnName="id")
     * })
     */
    private $showing;

    /**
     * @var \AppBundle\Entity\Spectator
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Spectator")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Spectator_id", referencedColumnName="id")
     * })
     */
    private $spectator;



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
     * Set order
     *
     * @param \AppBundle\Entity\Order $order
     *
     * @return Ticket
     */
    public function setOrder(\AppBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set price
     *
     * @param \AppBundle\Entity\Price $price
     *
     * @return Ticket
     */
    public function setPrice(\AppBundle\Entity\Price $price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return \AppBundle\Entity\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set showing
     *
     * @param \AppBundle\Entity\Showing $showing
     *
     * @return Ticket
     */
    public function setShowing(\AppBundle\Entity\Showing $showing = null)
    {
        $this->showing = $showing;

        return $this;
    }

    /**
     * Get showing
     *
     * @return \AppBundle\Entity\Showing
     */
    public function getShowing()
    {
        return $this->showing;
    }

    /**
     * Set spectator
     *
     * @param \AppBundle\Entity\Spectator $spectator
     *
     * @return Ticket
     */
    public function setSpectator(\AppBundle\Entity\Spectator $spectator = null)
    {
        $this->spectator = $spectator;

        return $this;
    }

    /**
     * Get spectator
     *
     * @return \AppBundle\Entity\Spectator
     */
    public function getSpectator()
    {
        return $this->spectator;
    }
}
