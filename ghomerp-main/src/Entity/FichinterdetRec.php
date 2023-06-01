<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichinterdetRec
 *
 * @ORM\Table(name="fichinterdet_rec")
 * @ORM\Entity
 */
class FichinterdetRec
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
     * @ORM\Column(name="fk_fichinter", type="integer", nullable=false)
     */
    private $fkFichinter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true)
     */
    private $totalHt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true)
     */
    private $subprice;

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
     * @ORM\Column(name="localtax1_type", type="string", length=1, nullable=true)
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
     * @ORM\Column(name="localtax2_type", type="string", length=1, nullable=true)
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
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true)
     */
    private $price;

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
     * @var int
     *
     * @ORM\Column(name="fk_code_ventilation", type="integer", nullable=false)
     */
    private $fkCodeVentilation = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_export_commpta", type="integer", nullable=false)
     */
    private $fkExportCommpta = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="special_code", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $specialCode = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_unit", type="integer", nullable=true)
     */
    private $fkUnit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkFichinter(): ?int
    {
        return $this->fkFichinter;
    }

    public function setFkFichinter(int $fkFichinter): self
    {
        $this->fkFichinter = $fkFichinter;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

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

    public function getTotalHt(): ?float
    {
        return $this->totalHt;
    }

    public function setTotalHt(?float $totalHt): self
    {
        $this->totalHt = $totalHt;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

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

    public function getFkCodeVentilation(): ?int
    {
        return $this->fkCodeVentilation;
    }

    public function setFkCodeVentilation(int $fkCodeVentilation): self
    {
        $this->fkCodeVentilation = $fkCodeVentilation;

        return $this;
    }

    public function getFkExportCommpta(): ?int
    {
        return $this->fkExportCommpta;
    }

    public function setFkExportCommpta(int $fkExportCommpta): self
    {
        $this->fkExportCommpta = $fkExportCommpta;

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

    public function getFkUnit(): ?int
    {
        return $this->fkUnit;
    }

    public function setFkUnit(?int $fkUnit): self
    {
        $this->fkUnit = $fkUnit;

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


}
