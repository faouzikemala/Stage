<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductFournisseurPrice
 *
 * @ORM\Table(name="product_fournisseur_price", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_barcode", columns={"barcode", "fk_barcode_type", "entity"}), @ORM\UniqueConstraint(name="uk_product_fournisseur_price_ref", columns={"ref_fourn", "fk_soc", "quantity", "entity"})}, indexes={@ORM\Index(name="idx_product_fournisseur_price_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_product_fk_barcode_type", columns={"fk_barcode_type"}), @ORM\Index(name="idx_product_fourn_price_fk_product", columns={"fk_product", "entity"}), @ORM\Index(name="idx_product_fourn_price_fk_soc", columns={"fk_soc", "entity"}), @ORM\Index(name="idx_product_barcode", columns={"barcode"}), @ORM\Index(name="IDX_631BA57F23653981", columns={"fk_product"})})
 * @ORM\Entity
 */
class ProductFournisseurPrice
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
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_fourn", type="string", length=128, nullable=true)
     */
    private $refFourn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_fourn", type="text", length=65535, nullable=true)
     */
    private $descFourn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_availability", type="integer", nullable=true)
     */
    private $fkAvailability;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = 0.00000000;

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
     * @var float|null
     *
     * @ORM\Column(name="charges", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $charges = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_vat_code", type="string", length=10, nullable=true)
     */
    private $defaultVatCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", length=180, nullable=true)
     */
    private $barcode;

    /**
     * @var float
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=false)
     */
    private $tvaTx;

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
     * @var int
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=false)
     */
    private $infoBits = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_supplier_price_expression", type="integer", nullable=true)
     */
    private $fkSupplierPriceExpression;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delivery_time_days", type="integer", nullable=true)
     */
    private $deliveryTimeDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_reputation", type="string", length=10, nullable=true)
     */
    private $supplierReputation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="packaging", type="string", length=64, nullable=true)
     */
    private $packaging;

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
     * @ORM\Column(name="multicurrency_unitprice", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyUnitprice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_price", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyPrice;

    /**
     * @var \CBarcodeType
     *
     * @ORM\ManyToOne(targetEntity="CBarcodeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_barcode_type", referencedColumnName="rowid")
     * })
     */
    private $fkBarcodeType;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;

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

    public function getFkSoc(): ?int
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?int $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
    }

    public function getRefFourn(): ?string
    {
        return $this->refFourn;
    }

    public function setRefFourn(?string $refFourn): self
    {
        $this->refFourn = $refFourn;

        return $this;
    }

    public function getDescFourn(): ?string
    {
        return $this->descFourn;
    }

    public function setDescFourn(?string $descFourn): self
    {
        $this->descFourn = $descFourn;

        return $this;
    }

    public function getFkAvailability(): ?int
    {
        return $this->fkAvailability;
    }

    public function setFkAvailability(?int $fkAvailability): self
    {
        $this->fkAvailability = $fkAvailability;

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

    public function getCharges(): ?float
    {
        return $this->charges;
    }

    public function setCharges(?float $charges): self
    {
        $this->charges = $charges;

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

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;

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

    public function getInfoBits(): ?int
    {
        return $this->infoBits;
    }

    public function setInfoBits(int $infoBits): self
    {
        $this->infoBits = $infoBits;

        return $this;
    }

    public function getFkSupplierPriceExpression(): ?int
    {
        return $this->fkSupplierPriceExpression;
    }

    public function setFkSupplierPriceExpression(?int $fkSupplierPriceExpression): self
    {
        $this->fkSupplierPriceExpression = $fkSupplierPriceExpression;

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

    public function getDeliveryTimeDays(): ?int
    {
        return $this->deliveryTimeDays;
    }

    public function setDeliveryTimeDays(?int $deliveryTimeDays): self
    {
        $this->deliveryTimeDays = $deliveryTimeDays;

        return $this;
    }

    public function getSupplierReputation(): ?string
    {
        return $this->supplierReputation;
    }

    public function setSupplierReputation(?string $supplierReputation): self
    {
        $this->supplierReputation = $supplierReputation;

        return $this;
    }

    public function getPackaging(): ?string
    {
        return $this->packaging;
    }

    public function setPackaging(?string $packaging): self
    {
        $this->packaging = $packaging;

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

    public function getMulticurrencyUnitprice(): ?float
    {
        return $this->multicurrencyUnitprice;
    }

    public function setMulticurrencyUnitprice(?float $multicurrencyUnitprice): self
    {
        $this->multicurrencyUnitprice = $multicurrencyUnitprice;

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

    public function getFkBarcodeType(): ?CBarcodeType
    {
        return $this->fkBarcodeType;
    }

    public function setFkBarcodeType(?CBarcodeType $fkBarcodeType): self
    {
        $this->fkBarcodeType = $fkBarcodeType;

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

    public function getFkUser(): ?User
    {
        return $this->fkUser;
    }

    public function setFkUser(?User $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }


}
