<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturedet
 *
 * @ORM\Table(name="facturedet", uniqueConstraints={@ORM\UniqueConstraint(name="uk_fk_remise_except", columns={"fk_remise_except", "fk_facture"})}, indexes={@ORM\Index(name="idx_facturedet_fk_product", columns={"fk_product"}), @ORM\Index(name="fk_facturedet_fk_unit", columns={"fk_unit"}), @ORM\Index(name="idx_facturedet_fk_facture", columns={"fk_facture"}), @ORM\Index(name="idx_facturedet_fk_code_ventilation", columns={"fk_code_ventilation"})})
 * @ORM\Entity
 */
class Facturedet
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
     * @ORM\Column(name="fk_parent_line", type="integer", nullable=true)
     */
    private $fkParentLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="vat_src_code", type="string", length=10, nullable=true)
     */
    private $vatSrcCode = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true)
     */
    private $tvaTx;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax1Tx = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=true)
     */
    private $localtax1Type;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax2Tx = 0.000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=true)
     */
    private $localtax2Type;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $remisePercent = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_remise_except", type="integer", nullable=true)
     */
    private $fkRemiseExcept;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true)
     */
    private $subprice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true)
     */
    private $price;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true)
     */
    private $totalHt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=true)
     */
    private $totalTva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_localtax1", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalLocaltax1 = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_localtax2", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalLocaltax2 = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true)
     */
    private $totalTtc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_type", type="integer", nullable=true)
     */
    private $productType = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=true)
     */
    private $infoBits = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="buy_price_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $buyPriceHt = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product_fournisseur_price", type="integer", nullable=true)
     */
    private $fkProductFournisseurPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="special_code", type="integer", nullable=true)
     */
    private $specialCode = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contract_line", type="integer", nullable=true)
     */
    private $fkContractLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_code_ventilation", type="integer", nullable=false)
     */
    private $fkCodeVentilation = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="situation_percent", type="float", precision=10, scale=0, nullable=true, options={"default"="100"})
     */
    private $situationPercent = 100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_prev_id", type="integer", nullable=true)
     */
    private $fkPrevId;

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
     * @ORM\Column(name="multicurrency_subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencySubprice = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalHt = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTva = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTtc = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_facture", referencedColumnName="rowid")
     * })
     */
    private $fkFacture;

    /**
     * @var \CUnits
     *
     * @ORM\ManyToOne(targetEntity="CUnits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_unit", referencedColumnName="rowid")
     * })
     */
    private $fkUnit;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkParentLine(): ?int
    {
        return $this->fkParentLine;
    }

    public function setFkParentLine(?int $fkParentLine): self
    {
        $this->fkParentLine = $fkParentLine;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
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

    public function getVatSrcCode(): ?string
    {
        return $this->vatSrcCode;
    }

    public function setVatSrcCode(?string $vatSrcCode): self
    {
        $this->vatSrcCode = $vatSrcCode;

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

    public function setLocaltax1Type(?string $localtax1Type): self
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

    public function setLocaltax2Type(?string $localtax2Type): self
    {
        $this->localtax2Type = $localtax2Type;

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

    public function getRemisePercent(): ?float
    {
        return $this->remisePercent;
    }

    public function setRemisePercent(?float $remisePercent): self
    {
        $this->remisePercent = $remisePercent;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(?float $remise): self
    {
        $this->remise = $remise;

        return $this;
    }

    public function getFkRemiseExcept(): ?int
    {
        return $this->fkRemiseExcept;
    }

    public function setFkRemiseExcept(?int $fkRemiseExcept): self
    {
        $this->fkRemiseExcept = $fkRemiseExcept;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

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

    public function getTotalTva(): ?float
    {
        return $this->totalTva;
    }

    public function setTotalTva(?float $totalTva): self
    {
        $this->totalTva = $totalTva;

        return $this;
    }

    public function getTotalLocaltax1(): ?float
    {
        return $this->totalLocaltax1;
    }

    public function setTotalLocaltax1(?float $totalLocaltax1): self
    {
        $this->totalLocaltax1 = $totalLocaltax1;

        return $this;
    }

    public function getTotalLocaltax2(): ?float
    {
        return $this->totalLocaltax2;
    }

    public function setTotalLocaltax2(?float $totalLocaltax2): self
    {
        $this->totalLocaltax2 = $totalLocaltax2;

        return $this;
    }

    public function getTotalTtc(): ?float
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(?float $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getProductType(): ?int
    {
        return $this->productType;
    }

    public function setProductType(?int $productType): self
    {
        $this->productType = $productType;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(?\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getInfoBits(): ?int
    {
        return $this->infoBits;
    }

    public function setInfoBits(?int $infoBits): self
    {
        $this->infoBits = $infoBits;

        return $this;
    }

    public function getBuyPriceHt(): ?float
    {
        return $this->buyPriceHt;
    }

    public function setBuyPriceHt(?float $buyPriceHt): self
    {
        $this->buyPriceHt = $buyPriceHt;

        return $this;
    }

    public function getFkProductFournisseurPrice(): ?int
    {
        return $this->fkProductFournisseurPrice;
    }

    public function setFkProductFournisseurPrice(?int $fkProductFournisseurPrice): self
    {
        $this->fkProductFournisseurPrice = $fkProductFournisseurPrice;

        return $this;
    }

    public function getSpecialCode(): ?int
    {
        return $this->specialCode;
    }

    public function setSpecialCode(?int $specialCode): self
    {
        $this->specialCode = $specialCode;

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

    public function getFkContractLine(): ?int
    {
        return $this->fkContractLine;
    }

    public function setFkContractLine(?int $fkContractLine): self
    {
        $this->fkContractLine = $fkContractLine;

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

    public function getFkCodeVentilation(): ?int
    {
        return $this->fkCodeVentilation;
    }

    public function setFkCodeVentilation(int $fkCodeVentilation): self
    {
        $this->fkCodeVentilation = $fkCodeVentilation;

        return $this;
    }

    public function getSituationPercent(): ?float
    {
        return $this->situationPercent;
    }

    public function setSituationPercent(?float $situationPercent): self
    {
        $this->situationPercent = $situationPercent;

        return $this;
    }

    public function getFkPrevId(): ?int
    {
        return $this->fkPrevId;
    }

    public function setFkPrevId(?int $fkPrevId): self
    {
        $this->fkPrevId = $fkPrevId;

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

    public function getMulticurrencySubprice(): ?float
    {
        return $this->multicurrencySubprice;
    }

    public function setMulticurrencySubprice(?float $multicurrencySubprice): self
    {
        $this->multicurrencySubprice = $multicurrencySubprice;

        return $this;
    }

    public function getMulticurrencyTotalHt(): ?float
    {
        return $this->multicurrencyTotalHt;
    }

    public function setMulticurrencyTotalHt(?float $multicurrencyTotalHt): self
    {
        $this->multicurrencyTotalHt = $multicurrencyTotalHt;

        return $this;
    }

    public function getMulticurrencyTotalTva(): ?float
    {
        return $this->multicurrencyTotalTva;
    }

    public function setMulticurrencyTotalTva(?float $multicurrencyTotalTva): self
    {
        $this->multicurrencyTotalTva = $multicurrencyTotalTva;

        return $this;
    }

    public function getMulticurrencyTotalTtc(): ?float
    {
        return $this->multicurrencyTotalTtc;
    }

    public function setMulticurrencyTotalTtc(?float $multicurrencyTotalTtc): self
    {
        $this->multicurrencyTotalTtc = $multicurrencyTotalTtc;

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

    public function getFkFacture(): ?Facture
    {
        return $this->fkFacture;
    }

    public function setFkFacture(?Facture $fkFacture): self
    {
        $this->fkFacture = $fkFacture;

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


}
