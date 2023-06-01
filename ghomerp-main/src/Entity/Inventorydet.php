<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventorydet
 *
 * @ORM\Table(name="inventorydet", uniqueConstraints={@ORM\UniqueConstraint(name="uk_inventorydet", columns={"fk_inventory", "fk_warehouse", "fk_product", "batch"})}, indexes={@ORM\Index(name="idx_inventorydet_datec", columns={"datec"}), @ORM\Index(name="idx_inventorydet_tms", columns={"tms"}), @ORM\Index(name="idx_inventorydet_fk_inventory", columns={"fk_inventory"})})
 * @ORM\Entity
 */
class Inventorydet
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_inventory", type="integer", nullable=true)
     */
    private $fkInventory = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=128, nullable=true)
     */
    private $batch;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty_stock", type="float", precision=10, scale=0, nullable=true)
     */
    private $qtyStock;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty_view", type="float", precision=10, scale=0, nullable=true)
     */
    private $qtyView;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty_regulated", type="float", precision=10, scale=0, nullable=true)
     */
    private $qtyRegulated;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getFkInventory(): ?int
    {
        return $this->fkInventory;
    }

    public function setFkInventory(?int $fkInventory): self
    {
        $this->fkInventory = $fkInventory;

        return $this;
    }

    public function getFkWarehouse(): ?int
    {
        return $this->fkWarehouse;
    }

    public function setFkWarehouse(?int $fkWarehouse): self
    {
        $this->fkWarehouse = $fkWarehouse;

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

    public function getBatch(): ?string
    {
        return $this->batch;
    }

    public function setBatch(?string $batch): self
    {
        $this->batch = $batch;

        return $this;
    }

    public function getQtyStock(): ?float
    {
        return $this->qtyStock;
    }

    public function setQtyStock(?float $qtyStock): self
    {
        $this->qtyStock = $qtyStock;

        return $this;
    }

    public function getQtyView(): ?float
    {
        return $this->qtyView;
    }

    public function setQtyView(?float $qtyView): self
    {
        $this->qtyView = $qtyView;

        return $this;
    }

    public function getQtyRegulated(): ?float
    {
        return $this->qtyRegulated;
    }

    public function setQtyRegulated(?float $qtyRegulated): self
    {
        $this->qtyRegulated = $qtyRegulated;

        return $this;
    }


}
