<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MrpProduction
 *
 * @ORM\Table(name="mrp_production", indexes={@ORM\Index(name="fk_mrp_production_stock_movement", columns={"fk_stock_movement"}), @ORM\Index(name="fk_mrp_production_product", columns={"fk_product"}), @ORM\Index(name="idx_mrp_production_fk_mo", columns={"fk_mo"})})
 * @ORM\Entity
 */
class MrpProduction
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
     * @ORM\Column(name="origin_id", type="integer", nullable=true)
     */
    private $originId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin_type", type="string", length=10, nullable=true)
     */
    private $originType;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $qty = 1;

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
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=128, nullable=true)
     */
    private $batch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=10, nullable=true)
     */
    private $role;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mrp_production", type="integer", nullable=true)
     */
    private $fkMrpProduction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \MrpMo
     *
     * @ORM\ManyToOne(targetEntity="MrpMo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_mo", referencedColumnName="rowid")
     * })
     */
    private $fkMo;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product", referencedColumnName="rowid")
     * })
     */
    private $fkProduct;

    /**
     * @var \StockMouvement
     *
     * @ORM\ManyToOne(targetEntity="StockMouvement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_stock_movement", referencedColumnName="rowid")
     * })
     */
    private $fkStockMovement;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getOriginId(): ?int
    {
        return $this->originId;
    }

    public function setOriginId(?int $originId): self
    {
        $this->originId = $originId;

        return $this;
    }

    public function getOriginType(): ?string
    {
        return $this->originType;
    }

    public function setOriginType(?string $originType): self
    {
        $this->originType = $originType;

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

    public function getFkWarehouse(): ?int
    {
        return $this->fkWarehouse;
    }

    public function setFkWarehouse(?int $fkWarehouse): self
    {
        $this->fkWarehouse = $fkWarehouse;

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

    public function getBatch(): ?string
    {
        return $this->batch;
    }

    public function setBatch(?string $batch): self
    {
        $this->batch = $batch;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getFkMrpProduction(): ?int
    {
        return $this->fkMrpProduction;
    }

    public function setFkMrpProduction(?int $fkMrpProduction): self
    {
        $this->fkMrpProduction = $fkMrpProduction;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserModif(): ?int
    {
        return $this->fkUserModif;
    }

    public function setFkUserModif(?int $fkUserModif): self
    {
        $this->fkUserModif = $fkUserModif;

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

    public function getFkMo(): ?MrpMo
    {
        return $this->fkMo;
    }

    public function setFkMo(?MrpMo $fkMo): self
    {
        $this->fkMo = $fkMo;

        return $this;
    }

    public function getFkProduct(): ?Product
    {
        return $this->fkProduct;
    }

    public function setFkProduct(?Product $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

        return $this;
    }

    public function getFkStockMovement(): ?StockMouvement
    {
        return $this->fkStockMovement;
    }

    public function setFkStockMovement(?StockMouvement $fkStockMovement): self
    {
        $this->fkStockMovement = $fkStockMovement;

        return $this;
    }


}
