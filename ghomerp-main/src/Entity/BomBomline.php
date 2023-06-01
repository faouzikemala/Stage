<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BomBomline
 *
 * @ORM\Table(name="bom_bomline", indexes={@ORM\Index(name="idx_bom_bomline_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_bom_bomline_rowid", columns={"rowid"}), @ORM\Index(name="idx_bom_bomline_fk_bom", columns={"fk_bom"})})
 * @ORM\Entity
 */
class BomBomline
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
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bom_child", type="integer", nullable=true)
     */
    private $fkBomChild;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=24, scale=8, nullable=false)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty_frozen", type="smallint", nullable=true)
     */
    private $qtyFrozen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="disable_stock_change", type="smallint", nullable=true)
     */
    private $disableStockChange = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="efficiency", type="float", precision=24, scale=8, nullable=false, options={"default"="1.00000000"})
     */
    private $efficiency = 1.00000000;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';

    /**
     * @var \BomBom
     *
     * @ORM\ManyToOne(targetEntity="BomBom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_bom", referencedColumnName="rowid")
     * })
     */
    private $fkBom;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProduct(): ?int
    {
        return $this->fkProduct;
    }

    public function setFkProduct(int $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

        return $this;
    }

    public function getFkBomChild(): ?int
    {
        return $this->fkBomChild;
    }

    public function setFkBomChild(?int $fkBomChild): self
    {
        $this->fkBomChild = $fkBomChild;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getQtyFrozen(): ?int
    {
        return $this->qtyFrozen;
    }

    public function setQtyFrozen(?int $qtyFrozen): self
    {
        $this->qtyFrozen = $qtyFrozen;

        return $this;
    }

    public function getDisableStockChange(): ?int
    {
        return $this->disableStockChange;
    }

    public function setDisableStockChange(?int $disableStockChange): self
    {
        $this->disableStockChange = $disableStockChange;

        return $this;
    }

    public function getEfficiency(): ?float
    {
        return $this->efficiency;
    }

    public function setEfficiency(float $efficiency): self
    {
        $this->efficiency = $efficiency;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getFkBom(): ?BomBom
    {
        return $this->fkBom;
    }

    public function setFkBom(?BomBom $fkBom): self
    {
        $this->fkBom = $fkBom;

        return $this;
    }


}
