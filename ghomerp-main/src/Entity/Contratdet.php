<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contratdet
 *
 * @ORM\Table(name="contratdet", indexes={@ORM\Index(name="fk_contratdet_fk_unit", columns={"fk_unit"}), @ORM\Index(name="idx_contratdet_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_contratdet_date_ouverture", columns={"date_ouverture"}), @ORM\Index(name="idx_contratdet_date_fin_validite", columns={"date_fin_validite"}), @ORM\Index(name="idx_contratdet_fk_contrat", columns={"fk_contrat"}), @ORM\Index(name="idx_contratdet_date_ouverture_prevue", columns={"date_ouverture_prevue"})})
 * @ORM\Entity
 */
class Contratdet
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
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_remise_except", type="integer", nullable=true)
     */
    private $fkRemiseExcept;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_commande", type="datetime", nullable=true)
     */
    private $dateCommande;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ouverture_prevue", type="datetime", nullable=true)
     */
    private $dateOuverturePrevue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ouverture", type="datetime", nullable=true)
     */
    private $dateOuverture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_validite", type="datetime", nullable=true)
     */
    private $dateFinValidite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cloture", type="datetime", nullable=true)
     */
    private $dateCloture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vat_src_code", type="string", length=10, nullable=true)
     */
    private $vatSrcCode = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $tvaTx = 0.000;

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
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
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
     * @ORM\Column(name="subprice", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $subprice = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_ht", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceHt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
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
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_type", type="integer", nullable=true, options={"default"="1"})
     */
    private $productType = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="info_bits", type="integer", nullable=true)
     */
    private $infoBits = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="buy_price_ht", type="float", precision=24, scale=8, nullable=true)
     */
    private $buyPriceHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product_fournisseur_price", type="integer", nullable=true)
     */
    private $fkProductFournisseurPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_ouverture", type="integer", nullable=true)
     */
    private $fkUserOuverture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cloture", type="integer", nullable=true)
     */
    private $fkUserCloture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

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
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_contrat", referencedColumnName="rowid")
     * })
     */
    private $fkContrat;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): self
    {
        $this->statut = $statut;

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

    public function getFkRemiseExcept(): ?int
    {
        return $this->fkRemiseExcept;
    }

    public function setFkRemiseExcept(?int $fkRemiseExcept): self
    {
        $this->fkRemiseExcept = $fkRemiseExcept;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(?\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getDateOuverturePrevue(): ?\DateTimeInterface
    {
        return $this->dateOuverturePrevue;
    }

    public function setDateOuverturePrevue(?\DateTimeInterface $dateOuverturePrevue): self
    {
        $this->dateOuverturePrevue = $dateOuverturePrevue;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(?\DateTimeInterface $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getDateFinValidite(): ?\DateTimeInterface
    {
        return $this->dateFinValidite;
    }

    public function setDateFinValidite(?\DateTimeInterface $dateFinValidite): self
    {
        $this->dateFinValidite = $dateFinValidite;

        return $this;
    }

    public function getDateCloture(): ?\DateTimeInterface
    {
        return $this->dateCloture;
    }

    public function setDateCloture(?\DateTimeInterface $dateCloture): self
    {
        $this->dateCloture = $dateCloture;

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

    public function setQty(float $qty): self
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

    public function getSubprice(): ?float
    {
        return $this->subprice;
    }

    public function setSubprice(?float $subprice): self
    {
        $this->subprice = $subprice;

        return $this;
    }

    public function getPriceHt(): ?float
    {
        return $this->priceHt;
    }

    public function setPriceHt(?float $priceHt): self
    {
        $this->priceHt = $priceHt;

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

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }

    public function getFkUserOuverture(): ?int
    {
        return $this->fkUserOuverture;
    }

    public function setFkUserOuverture(?int $fkUserOuverture): self
    {
        $this->fkUserOuverture = $fkUserOuverture;

        return $this;
    }

    public function getFkUserCloture(): ?int
    {
        return $this->fkUserCloture;
    }

    public function setFkUserCloture(?int $fkUserCloture): self
    {
        $this->fkUserCloture = $fkUserCloture;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

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

    public function getFkContrat(): ?Contrat
    {
        return $this->fkContrat;
    }

    public function setFkContrat(?Contrat $fkContrat): self
    {
        $this->fkContrat = $fkContrat;

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
