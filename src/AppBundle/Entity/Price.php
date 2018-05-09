<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Price
 *
 * @ORM\Table(name="Price")
 * @ORM\Entity
 */
class Price
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
     * @var string
     *
     * @ORM\Column(name="type_name", type="string", length=100, nullable=true)
     */
    private $typeName;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="float", precision=10, scale=0, nullable=true)
     */
    private $value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="current", type="boolean", nullable=true)
     */
    private $current;


}

