<?php



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
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Order
     *
     * @ORM\ManyToOne(targetEntity="Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Order_id", referencedColumnName="id")
     * })
     */
    private $order;

    /**
     * @var \Price
     *
     * @ORM\ManyToOne(targetEntity="Price")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Price_id", referencedColumnName="id")
     * })
     */
    private $price;

    /**
     * @var \Showing
     *
     * @ORM\ManyToOne(targetEntity="Showing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Showing_id", referencedColumnName="id")
     * })
     */
    private $showing;

    /**
     * @var \Spectator
     *
     * @ORM\ManyToOne(targetEntity="Spectator")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Spectator_id", referencedColumnName="id")
     * })
     */
    private $spectator;


}

