<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPriceByQty
 *
 * @ORM\Table(name="product_price_by_qty", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_price_by_qty_level", columns={"fk_product_price", "quantity"})}, indexes={@ORM\Index(name="idx_product_price_by_qty_fk_product_price", columns={"fk_product_price"})})
 * @ORM\Entity
 */
class ProductPriceByQty
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
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_base_type", type="string", length=3, nullable=true, options={"default"="HT"})
     */
    private $priceBaseType = 'HT';

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $remisePercent = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=false)
     */
    private $remise = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="unitprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $unitprice = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=true)
     */
    private $fkMulticurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_tx", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $multicurrencyTx = 1.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_price", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyPrice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_price_ttc", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyPriceTtc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \ProductPrice
     *
     * @ORM\ManyToOne(targetEntity="ProductPrice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product_price", referencedColumnName="rowid")
     * })
     */
    private $fkProductPrice;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPriceBaseType(): ?string
    {
        return $this->priceBaseType;
    }

    public function setPriceBaseType(?string $priceBaseType): self
    {
        $this->priceBaseType = $priceBaseType;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getRemisePercent(): ?float
    {
        return $this->remisePercent;
    }

    public function setRemisePercent(float $remisePercent): self
    {
        $this->remisePercent = $remisePercent;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(float $remise): self
    {
        $this->remise = $remise;

        return $this;
    }

    public function getUnitprice(): ?float
    {
        return $this->unitprice;
    }

    public function setUnitprice(?float $unitprice): self
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
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

    public function getFkMulticurrency(): ?int
    {
        return $this->fkMulticurrency;
    }

    public function setFkMulticurrency(?int $fkMulticurrency): self
    {
        $this->fkMulticurrency = $fkMulticurrency;

        return $this;
    }

    public function getMulticurrencyCode(): ?string
    {
        return $this->multicurrencyCode;
    }

    public function setMulticurrencyCode(?string $multicurrencyCode): self
    {
        $this->multicurrencyCode = $multicurrencyCode;

        return $this;
    }

    public function getMulticurrencyTx(): ?float
    {
        return $this->multicurrencyTx;
    }

    public function setMulticurrencyTx(?float $multicurrencyTx): self
    {
        $this->multicurrencyTx = $multicurrencyTx;

        return $this;
    }

    public function getMulticurrencyPrice(): ?float
    {
        return $this->multicurrencyPrice;
    }

    public function setMulticurrencyPrice(?float $multicurrencyPrice): self
    {
        $this->multicurrencyPrice = $multicurrencyPrice;

        return $this;
    }

    public function getMulticurrencyPriceTtc(): ?float
    {
        return $this->multicurrencyPriceTtc;
    }

    public function setMulticurrencyPriceTtc(?float $multicurrencyPriceTtc): self
    {
        $this->multicurrencyPriceTtc = $multicurrencyPriceTtc;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }

    public function getFkProductPrice(): ?ProductPrice
    {
        return $this->fkProductPrice;
    }

    public function setFkProductPrice(?ProductPrice $fkProductPrice): self
    {
        $this->fkProductPrice = $fkProductPrice;

        return $this;
    }


}
