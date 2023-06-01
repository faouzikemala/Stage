<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_ref", columns={"ref", "entity"}), @ORM\UniqueConstraint(name="uk_product_barcode", columns={"barcode", "fk_barcode_type", "entity"})}, indexes={@ORM\Index(name="idx_product_fk_barcode_type", columns={"fk_barcode_type"}), @ORM\Index(name="fk_product_fk_unit", columns={"fk_unit"}), @ORM\Index(name="fk_product_default_warehouse", columns={"fk_default_warehouse"}), @ORM\Index(name="idx_product_label", columns={"label"}), @ORM\Index(name="idx_product_import_key", columns={"import_key"}), @ORM\Index(name="idx_product_fk_country", columns={"fk_country"}), @ORM\Index(name="idx_product_fk_project", columns={"fk_project"}), @ORM\Index(name="fk_product_finished", columns={"finished"}), @ORM\Index(name="idx_product_barcode", columns={"barcode"}), @ORM\Index(name="idx_product_seuil_stock_alerte", columns={"seuil_stock_alerte"}), @ORM\Index(name="idx_product_fk_user_author", columns={"fk_user_author"})})
 * @ORM\Entity
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=128, nullable=true)
     */
    private $refExt;

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
     * @ORM\Column(name="fk_parent", type="integer", nullable=true)
     */
    private $fkParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customcode", type="string", length=32, nullable=true)
     */
    private $customcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_state", type="integer", nullable=true)
     */
    private $fkState;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceTtc = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceMin = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceMinTtc = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_base_type", type="string", length=3, nullable=true, options={"default"="HT"})
     */
    private $priceBaseType = 'HT';

    /**
     * @var float|null
     *
     * @ORM\Column(name="cost_price", type="float", precision=24, scale=8, nullable=true)
     */
    private $costPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_vat_code", type="string", length=10, nullable=true)
     */
    private $defaultVatCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true)
     */
    private $tvaTx;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tosell", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tosell = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="tobuy", type="boolean", nullable=true, options={"default"="1"})
     */
    private $tobuy = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="onportal", type="boolean", nullable=true)
     */
    private $onportal = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tobatch", type="boolean", nullable=false)
     */
    private $tobatch = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_mask", type="string", length=32, nullable=true)
     */
    private $batchMask;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product_type", type="integer", nullable=true)
     */
    private $fkProductType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration", type="string", length=6, nullable=true)
     */
    private $duration;

    /**
     * @var float|null
     *
     * @ORM\Column(name="seuil_stock_alerte", type="float", precision=10, scale=0, nullable=true)
     */
    private $seuilStockAlerte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", length=180, nullable=true)
     */
    private $barcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell_intra", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSellIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell_export", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSellExport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy_intra", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuyIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy_export", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuyExport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partnumber", type="string", length=32, nullable=true)
     */
    private $partnumber;

    /**
     * @var float|null
     *
     * @ORM\Column(name="net_measure", type="float", precision=10, scale=0, nullable=true)
     */
    private $netMeasure;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="net_measure_units", type="boolean", nullable=true)
     */
    private $netMeasureUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="weight_units", type="boolean", nullable=true)
     */
    private $weightUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="length", type="float", precision=10, scale=0, nullable=true)
     */
    private $length;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="length_units", type="boolean", nullable=true)
     */
    private $lengthUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="width", type="float", precision=10, scale=0, nullable=true)
     */
    private $width;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="width_units", type="boolean", nullable=true)
     */
    private $widthUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="height", type="float", precision=10, scale=0, nullable=true)
     */
    private $height;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="height_units", type="boolean", nullable=true)
     */
    private $heightUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="surface", type="float", precision=10, scale=0, nullable=true)
     */
    private $surface;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="surface_units", type="boolean", nullable=true)
     */
    private $surfaceUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="volume_units", type="boolean", nullable=true)
     */
    private $volumeUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="stock", type="float", precision=10, scale=0, nullable=true)
     */
    private $stock;

    /**
     * @var float
     *
     * @ORM\Column(name="pmp", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $pmp = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fifo", type="float", precision=24, scale=8, nullable=true)
     */
    private $fifo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="lifo", type="float", precision=24, scale=8, nullable=true)
     */
    private $lifo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="canvas", type="string", length=32, nullable=true)
     */
    private $canvas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lifetime", type="integer", nullable=true)
     */
    private $lifetime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qc_frequency", type="integer", nullable=true)
     */
    private $qcFrequency;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=true)
     */
    private $hidden = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_price_expression", type="integer", nullable=true)
     */
    private $fkPriceExpression;

    /**
     * @var float|null
     *
     * @ORM\Column(name="desiredstock", type="float", precision=10, scale=0, nullable=true)
     */
    private $desiredstock = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="price_autogen", type="boolean", nullable=true)
     */
    private $priceAutogen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_project", type="integer", nullable=true)
     */
    private $fkProject;

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
     * @var \Entrepot
     *
     * @ORM\ManyToOne(targetEntity="Entrepot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_default_warehouse", referencedColumnName="rowid")
     * })
     */
    private $fkDefaultWarehouse;

    /**
     * @var \CProductNature
     *
     * @ORM\ManyToOne(targetEntity="CProductNature")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="finished", referencedColumnName="code")
     * })
     */
    private $finished;

    /**
     * @var \CCountry
     *
     * @ORM\ManyToOne(targetEntity="CCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_country", referencedColumnName="rowid")
     * })
     */
    private $fkCountry;

    /**
     * @var \CUnits
     *
     * @ORM\ManyToOne(targetEntity="CUnits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_unit", referencedColumnName="rowid")
     * })
     */
    private $fkUnit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkProduct")
     */
    private $fkCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
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

    public function getRefExt(): ?string
    {
        return $this->refExt;
    }

    public function setRefExt(?string $refExt): self
    {
        $this->refExt = $refExt;

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

    public function getFkParent(): ?int
    {
        return $this->fkParent;
    }

    public function setFkParent(?int $fkParent): self
    {
        $this->fkParent = $fkParent;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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

    public function getNotePublic(): ?string
    {
        return $this->notePublic;
    }

    public function setNotePublic(?string $notePublic): self
    {
        $this->notePublic = $notePublic;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCustomcode(): ?string
    {
        return $this->customcode;
    }

    public function setCustomcode(?string $customcode): self
    {
        $this->customcode = $customcode;

        return $this;
    }

    public function getFkState(): ?int
    {
        return $this->fkState;
    }

    public function setFkState(?int $fkState): self
    {
        $this->fkState = $fkState;

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

    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    public function setCostPrice(?float $costPrice): self
    {
        $this->costPrice = $costPrice;

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

    public function setTvaTx(?float $tvaTx): self
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

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

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

    public function getTosell(): ?bool
    {
        return $this->tosell;
    }

    public function setTosell(?bool $tosell): self
    {
        $this->tosell = $tosell;

        return $this;
    }

    public function getTobuy(): ?bool
    {
        return $this->tobuy;
    }

    public function setTobuy(?bool $tobuy): self
    {
        $this->tobuy = $tobuy;

        return $this;
    }

    public function getOnportal(): ?bool
    {
        return $this->onportal;
    }

    public function setOnportal(?bool $onportal): self
    {
        $this->onportal = $onportal;

        return $this;
    }

    public function getTobatch(): ?bool
    {
        return $this->tobatch;
    }

    public function setTobatch(bool $tobatch): self
    {
        $this->tobatch = $tobatch;

        return $this;
    }

    public function getBatchMask(): ?string
    {
        return $this->batchMask;
    }

    public function setBatchMask(?string $batchMask): self
    {
        $this->batchMask = $batchMask;

        return $this;
    }

    public function getFkProductType(): ?int
    {
        return $this->fkProductType;
    }

    public function setFkProductType(?int $fkProductType): self
    {
        $this->fkProductType = $fkProductType;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getSeuilStockAlerte(): ?float
    {
        return $this->seuilStockAlerte;
    }

    public function setSeuilStockAlerte(?float $seuilStockAlerte): self
    {
        $this->seuilStockAlerte = $seuilStockAlerte;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

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

    public function getAccountancyCodeSell(): ?string
    {
        return $this->accountancyCodeSell;
    }

    public function setAccountancyCodeSell(?string $accountancyCodeSell): self
    {
        $this->accountancyCodeSell = $accountancyCodeSell;

        return $this;
    }

    public function getAccountancyCodeSellIntra(): ?string
    {
        return $this->accountancyCodeSellIntra;
    }

    public function setAccountancyCodeSellIntra(?string $accountancyCodeSellIntra): self
    {
        $this->accountancyCodeSellIntra = $accountancyCodeSellIntra;

        return $this;
    }

    public function getAccountancyCodeSellExport(): ?string
    {
        return $this->accountancyCodeSellExport;
    }

    public function setAccountancyCodeSellExport(?string $accountancyCodeSellExport): self
    {
        $this->accountancyCodeSellExport = $accountancyCodeSellExport;

        return $this;
    }

    public function getAccountancyCodeBuy(): ?string
    {
        return $this->accountancyCodeBuy;
    }

    public function setAccountancyCodeBuy(?string $accountancyCodeBuy): self
    {
        $this->accountancyCodeBuy = $accountancyCodeBuy;

        return $this;
    }

    public function getAccountancyCodeBuyIntra(): ?string
    {
        return $this->accountancyCodeBuyIntra;
    }

    public function setAccountancyCodeBuyIntra(?string $accountancyCodeBuyIntra): self
    {
        $this->accountancyCodeBuyIntra = $accountancyCodeBuyIntra;

        return $this;
    }

    public function getAccountancyCodeBuyExport(): ?string
    {
        return $this->accountancyCodeBuyExport;
    }

    public function setAccountancyCodeBuyExport(?string $accountancyCodeBuyExport): self
    {
        $this->accountancyCodeBuyExport = $accountancyCodeBuyExport;

        return $this;
    }

    public function getPartnumber(): ?string
    {
        return $this->partnumber;
    }

    public function setPartnumber(?string $partnumber): self
    {
        $this->partnumber = $partnumber;

        return $this;
    }

    public function getNetMeasure(): ?float
    {
        return $this->netMeasure;
    }

    public function setNetMeasure(?float $netMeasure): self
    {
        $this->netMeasure = $netMeasure;

        return $this;
    }

    public function getNetMeasureUnits(): ?bool
    {
        return $this->netMeasureUnits;
    }

    public function setNetMeasureUnits(?bool $netMeasureUnits): self
    {
        $this->netMeasureUnits = $netMeasureUnits;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeightUnits(): ?bool
    {
        return $this->weightUnits;
    }

    public function setWeightUnits(?bool $weightUnits): self
    {
        $this->weightUnits = $weightUnits;

        return $this;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getLengthUnits(): ?bool
    {
        return $this->lengthUnits;
    }

    public function setLengthUnits(?bool $lengthUnits): self
    {
        $this->lengthUnits = $lengthUnits;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getWidthUnits(): ?bool
    {
        return $this->widthUnits;
    }

    public function setWidthUnits(?bool $widthUnits): self
    {
        $this->widthUnits = $widthUnits;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getHeightUnits(): ?bool
    {
        return $this->heightUnits;
    }

    public function setHeightUnits(?bool $heightUnits): self
    {
        $this->heightUnits = $heightUnits;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(?float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getSurfaceUnits(): ?bool
    {
        return $this->surfaceUnits;
    }

    public function setSurfaceUnits(?bool $surfaceUnits): self
    {
        $this->surfaceUnits = $surfaceUnits;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getVolumeUnits(): ?bool
    {
        return $this->volumeUnits;
    }

    public function setVolumeUnits(?bool $volumeUnits): self
    {
        $this->volumeUnits = $volumeUnits;

        return $this;
    }

    public function getStock(): ?float
    {
        return $this->stock;
    }

    public function setStock(?float $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getPmp(): ?float
    {
        return $this->pmp;
    }

    public function setPmp(float $pmp): self
    {
        $this->pmp = $pmp;

        return $this;
    }

    public function getFifo(): ?float
    {
        return $this->fifo;
    }

    public function setFifo(?float $fifo): self
    {
        $this->fifo = $fifo;

        return $this;
    }

    public function getLifo(): ?float
    {
        return $this->lifo;
    }

    public function setLifo(?float $lifo): self
    {
        $this->lifo = $lifo;

        return $this;
    }

    public function getCanvas(): ?string
    {
        return $this->canvas;
    }

    public function setCanvas(?string $canvas): self
    {
        $this->canvas = $canvas;

        return $this;
    }

    public function getLifetime(): ?int
    {
        return $this->lifetime;
    }

    public function setLifetime(?int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }

    public function getQcFrequency(): ?int
    {
        return $this->qcFrequency;
    }

    public function setQcFrequency(?int $qcFrequency): self
    {
        $this->qcFrequency = $qcFrequency;

        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;

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

    public function getModelPdf(): ?string
    {
        return $this->modelPdf;
    }

    public function setModelPdf(?string $modelPdf): self
    {
        $this->modelPdf = $modelPdf;

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

    public function getDesiredstock(): ?float
    {
        return $this->desiredstock;
    }

    public function setDesiredstock(?float $desiredstock): self
    {
        $this->desiredstock = $desiredstock;

        return $this;
    }

    public function getPriceAutogen(): ?bool
    {
        return $this->priceAutogen;
    }

    public function setPriceAutogen(?bool $priceAutogen): self
    {
        $this->priceAutogen = $priceAutogen;

        return $this;
    }

    public function getFkProject(): ?int
    {
        return $this->fkProject;
    }

    public function setFkProject(?int $fkProject): self
    {
        $this->fkProject = $fkProject;

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

    public function getFkDefaultWarehouse(): ?Entrepot
    {
        return $this->fkDefaultWarehouse;
    }

    public function setFkDefaultWarehouse(?Entrepot $fkDefaultWarehouse): self
    {
        $this->fkDefaultWarehouse = $fkDefaultWarehouse;

        return $this;
    }

    public function getFinished(): ?CProductNature
    {
        return $this->finished;
    }

    public function setFinished(?CProductNature $finished): self
    {
        $this->finished = $finished;

        return $this;
    }

    public function getFkCountry(): ?CCountry
    {
        return $this->fkCountry;
    }

    public function setFkCountry(?CCountry $fkCountry): self
    {
        $this->fkCountry = $fkCountry;

        return $this;
    }

    public function getFkUnit(): ?CUnits
    {
        return $this->fkUnit;
    }

    public function setFkUnit(?CUnits $fkUnit): self
    {
        $this->fkUnit = $fkUnit;

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getFkCategorie(): Collection
    {
        return $this->fkCategorie;
    }

    public function addFkCategorie(Categorie $fkCategorie): self
    {
        if (!$this->fkCategorie->contains($fkCategorie)) {
            $this->fkCategorie[] = $fkCategorie;
            $fkCategorie->addFkProduct($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkProduct($this);
        }

        return $this;
    }

}
