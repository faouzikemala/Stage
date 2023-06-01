<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPrice
 *
 * @ORM\Table(name="product_price", indexes={@ORM\Index(name="idx_product_price_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_product_price_fk_user_author", columns={"fk_user_author"})})
 * @ORM\Entity
 */
class ProductPrice
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_price", type="datetime", nullable=false)
     */
    private $datePrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_level", type="smallint", nullable=true, options={"default"="1"})
     */
    private $priceLevel = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true)
     */
    private $price;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_ttc", type="float", precision=24, scale=8, nullable=true)
     */
    private $priceTtc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min", type="float", precision=24, scale=8, nullable=true)
     */
    private $priceMin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min_ttc", type="float", precision=24, scale=8, nullable=true)
     */
    private $priceMinTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_base_type", type="string", length=3, nullable=true, options={"default"="HT"})
     */
    private $priceBaseType = 'HT';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_vat_code", type="string", length=10, nullable=true)
     */
    private $defaultVatCode;

    /**
     * @var float
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $tvaTx = 0.000;

    /**
     * @var int
     *
     * @ORM\Column(name="recuperableonly", type="integer", nullable=false)
     */
    private $recuperableonly = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax1Tx = 0.000;

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=false)
     */
    private $localtax1Type = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax2Tx = 0.000;

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=false)
     */
    private $localtax2Type = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tosell", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tosell = true;

    /**
     * @var int
     *
     * @ORM\Column(name="price_by_qty", type="integer", nullable=false)
     */
    private $priceByQty = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_price_expression", type="integer", nullable=true)
     */
    private $fkPriceExpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_author", referencedColumnName="rowid")
     * })
     */
    private $fkUserAuthor;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product", referencedColumnName="rowid")
     * })
     */
    private $fkProduct;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

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

    public function getDatePrice(): ?\DateTimeInterface
    {
        return $this->datePrice;
    }

    public function setDatePrice(\DateTimeInterface $datePrice): self
    {
        $this->datePrice = $datePrice;

        return $this;
    }

    public function getPriceLevel(): ?int
    {
        return $this->priceLevel;
    }

    public function setPriceLevel(?int $priceLevel): self
    {
        $this->priceLevel = $priceLevel;

        return $this;
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

    public function getPriceTtc(): ?float
    {
        return $this->priceTtc;
    }

    public function setPriceTtc(?float $priceTtc): self
    {
        $this->priceTtc = $priceTtc;

        return $this;
    }

    public function getPriceMin(): ?float
    {
        return $this->priceMin;
    }

    public function setPriceMin(?float $priceMin): self
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    public function getPriceMinTtc(): ?float
    {
        return $this->priceMinTtc;
    }

    public function setPriceMinTtc(?float $priceMinTtc): self
    {
        $this->priceMinTtc = $priceMinTtc;

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

    public function getDefaultVatCode(): ?string
    {
        return $this->defaultVatCode;
    }

    public function setDefaultVatCode(?string $defaultVatCode): self
    {
        $this->defaultVatCode = $defaultVatCode;

        return $this;
    }

    public function getTvaTx(): ?float
    {
        return $this->tvaTx;
    }

    public function setTvaTx(float $tvaTx): self
    {
        $this->tvaTx = $tvaTx;

        return $this;
    }

    public function getRecuperableonly(): ?int
    {
        return $this->recuperableonly;
    }

    public function setRecuperableonly(int $recuperableonly): self
    {
        $this->recuperableonly = $recuperableonly;

        return $this;
    }

    public function getLocaltax1Tx(): ?float
    {
        return $this->localtax1Tx;
    }

    public function setLocaltax1Tx(?float $localtax1Tx): self
    {
        $this->localtax1Tx = $localtax1Tx;

        return $this;
    }

    public function getLocaltax1Type(): ?string
    {
        return $this->localtax1Type;
    }

    public function setLocaltax1Type(string $localtax1Type): self
    {
        $this->localtax1Type = $localtax1Type;

        return $this;
    }

    public function getLocaltax2Tx(): ?float
    {
        return $this->localtax2Tx;
    }

    public function setLocaltax2Tx(?float $localtax2Tx): self
    {
        $this->localtax2Tx = $localtax2Tx;

        return $this;
    }

    public function getLocaltax2Type(): ?string
    {
        return $this->localtax2Type;
    }

    public function setLocaltax2Type(string $localtax2Type): self
    {
        $this->localtax2Type = $localtax2Type;

        return $this;
    }

    public function getTosell(): ?bool
    {
        return $this->tosell;
    }

    public function setTosell(?bool $tosell): self
    {
        $this->tosell = $tosell;

        return $this;
    }

    public function getPriceByQty(): ?int
    {
        return $this->priceByQty;
    }

    public function setPriceByQty(int $priceByQty): self
    {
        $this->priceByQty = $priceByQty;

        return $this;
    }

    public function getFkPriceExpression(): ?int
    {
        return $this->fkPriceExpression;
    }

    public function setFkPriceExpression(?int $fkPriceExpression): self
    {
        $this->fkPriceExpression = $fkPriceExpression;

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

    public function getFkUserAuthor(): ?User
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?User $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

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


}
