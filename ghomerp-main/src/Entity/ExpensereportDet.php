<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpensereportDet
 *
 * @ORM\Table(name="expensereport_det")
 * @ORM\Entity
 */
class ExpensereportDet
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
     * @ORM\Column(name="fk_expensereport", type="integer", nullable=false)
     */
    private $fkExpensereport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="docnumber", type="string", length=128, nullable=true)
     */
    private $docnumber;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_c_type_fees", type="integer", nullable=false)
     */
    private $fkCTypeFees;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_c_exp_tax_cat", type="integer", nullable=true)
     */
    private $fkCExpTaxCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_type", type="integer", nullable=true, options={"default"="-1"})
     */
    private $productType = -1;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty;

    /**
     * @var float
     *
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $subprice = 0.00000000;

    /**
     * @var float
     *
     * @ORM\Column(name="value_unit", type="float", precision=24, scale=8, nullable=false)
     */
    private $valueUnit;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $remisePercent;

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
     * @var float
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $totalHt = 0.00000000;

    /**
     * @var float
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $totalTva = 0.00000000;

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
     * @var float
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $totalTtc = 0.00000000;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=true)
     */
    private $infoBits = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="special_code", type="integer", nullable=true)
     */
    private $specialCode = '0';

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
     * @var int|null
     *
     * @ORM\Column(name="fk_facture", type="integer", nullable=true)
     */
    private $fkFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_ecm_files", type="integer", nullable=true)
     */
    private $fkEcmFiles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_code_ventilation", type="integer", nullable=true)
     */
    private $fkCodeVentilation = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rule_warning_message", type="text", length=65535, nullable=true)
     */
    private $ruleWarningMessage;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkExpensereport(): ?int
    {
        return $this->fkExpensereport;
    }

    public function setFkExpensereport(int $fkExpensereport): self
    {
        $this->fkExpensereport = $fkExpensereport;

        return $this;
    }

    public function getDocnumber(): ?string
    {
        return $this->docnumber;
    }

    public function setDocnumber(?string $docnumber): self
    {
        $this->docnumber = $docnumber;

        return $this;
    }

    public function getFkCTypeFees(): ?int
    {
        return $this->fkCTypeFees;
    }

    public function setFkCTypeFees(int $fkCTypeFees): self
    {
        $this->fkCTypeFees = $fkCTypeFees;

        return $this;
    }

    public function getFkCExpTaxCat(): ?int
    {
        return $this->fkCExpTaxCat;
    }

    public function setFkCExpTaxCat(?int $fkCExpTaxCat): self
    {
        $this->fkCExpTaxCat = $fkCExpTaxCat;

        return $this;
    }

    public function getFkProjet(): ?int
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?int $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

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

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getSubprice(): ?float
    {
        return $this->subprice;
    }

    public function setSubprice(float $subprice): self
    {
        $this->subprice = $subprice;

        return $this;
    }

    public function getValueUnit(): ?float
    {
        return $this->valueUnit;
    }

    public function setValueUnit(float $valueUnit): self
    {
        $this->valueUnit = $valueUnit;

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

    public function getTotalHt(): ?float
    {
        return $this->totalHt;
    }

    public function setTotalHt(float $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    public function getTotalTva(): ?float
    {
        return $this->totalTva;
    }

    public function setTotalTva(float $totalTva): self
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

    public function setTotalTtc(float $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getSpecialCode(): ?int
    {
        return $this->specialCode;
    }

    public function setSpecialCode(?int $specialCode): self
    {
        $this->specialCode = $specialCode;

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

    public function getFkFacture(): ?int
    {
        return $this->fkFacture;
    }

    public function setFkFacture(?int $fkFacture): self
    {
        $this->fkFacture = $fkFacture;

        return $this;
    }

    public function getFkEcmFiles(): ?int
    {
        return $this->fkEcmFiles;
    }

    public function setFkEcmFiles(?int $fkEcmFiles): self
    {
        $this->fkEcmFiles = $fkEcmFiles;

        return $this;
    }

    public function getFkCodeVentilation(): ?int
    {
        return $this->fkCodeVentilation;
    }

    public function setFkCodeVentilation(?int $fkCodeVentilation): self
    {
        $this->fkCodeVentilation = $fkCodeVentilation;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }

    public function getRuleWarningMessage(): ?string
    {
        return $this->ruleWarningMessage;
    }

    public function setRuleWarningMessage(?string $ruleWarningMessage): self
    {
        $this->ruleWarningMessage = $ruleWarningMessage;

        return $this;
    }


}
