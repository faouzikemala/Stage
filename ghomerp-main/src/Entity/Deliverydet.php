<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deliverydet
 *
 * @ORM\Table(name="deliverydet", indexes={@ORM\Index(name="idx_deliverydet_fk_delivery", columns={"fk_delivery"})})
 * @ORM\Entity
 */
class Deliverydet
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_origin_line", type="integer", nullable=true)
     */
    private $fkOriginLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $subprice = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var \Delivery
     *
     * @ORM\ManyToOne(targetEntity="Delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_delivery", referencedColumnName="rowid")
     * })
     */
    private $fkDelivery;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkOriginLine(): ?int
    {
        return $this->fkOriginLine;
    }

    public function setFkOriginLine(?int $fkOriginLine): self
    {
        $this->fkOriginLine = $fkOriginLine;

        return $this;
    }

    public function getFkProduct(): ?int
    {
        return $this->fkProduct;
    }

    public function setFkProduct(?int $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(?float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getSubprice(): ?float
    {
        return $this->subprice;
    }

    public function setSubprice(?float $subprice): self
    {
        $this->subprice = $subprice;

        return $this;
    }

    public function getTotalHt(): ?float
    {
        return $this->totalHt;
    }

    public function setTotalHt(?float $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getFkDelivery(): ?Delivery
    {
        return $this->fkDelivery;
    }

    public function setFkDelivery(?Delivery $fkDelivery): self
    {
        $this->fkDelivery = $fkDelivery;

        return $this;
    }


}
