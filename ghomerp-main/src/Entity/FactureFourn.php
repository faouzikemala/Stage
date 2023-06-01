<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FactureFourn
 *
 * @ORM\Table(name="facture_fourn", uniqueConstraints={@ORM\UniqueConstraint(name="uk_facture_fourn_ref_supplier", columns={"ref_supplier", "fk_soc", "entity"}), @ORM\UniqueConstraint(name="uk_facture_fourn_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_facture_fourn_date_lim_reglement", columns={"date_lim_reglement"}), @ORM\Index(name="idx_facture_fourn_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_facture_fourn_fk_projet", columns={"fk_projet"}), @ORM\Index(name="idx_facture_fourn_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_facture_fourn_fk_user_valid", columns={"fk_user_valid"})})
 * @ORM\Entity
 */
class FactureFourn
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
     * @ORM\Column(name="ref", type="string", length=180, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_supplier", type="string", length=180, nullable=false)
     */
    private $refSupplier;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datef", type="date", nullable=true)
     */
    private $datef;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_pointoftax", type="date", nullable=true)
     */
    private $datePointoftax;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="date", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_closing", type="datetime", nullable=true)
     */
    private $dateClosing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="paye", type="smallint", nullable=false)
     */
    private $paye = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $remise = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="close_code", type="string", length=16, nullable=true)
     */
    private $closeCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="close_note", type="string", length=128, nullable=true)
     */
    private $closeNote;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $tva = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $localtax1 = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $localtax2 = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $total = 0.00000000;

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
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = 0.00000000;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_closing", type="integer", nullable=true)
     */
    private $fkUserClosing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facture_source", type="integer", nullable=true)
     */
    private $fkFactureSource;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_cond_reglement", type="integer", nullable=true)
     */
    private $fkCondReglement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mode_reglement", type="integer", nullable=true)
     */
    private $fkModeReglement;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lim_reglement", type="date", nullable=true)
     */
    private $dateLimReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_incoterms", type="integer", nullable=true)
     */
    private $fkIncoterms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_incoterms", type="string", length=255, nullable=true)
     */
    private $locationIncoterms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_transport_mode", type="integer", nullable=true)
     */
    private $fkTransportMode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_main_doc", type="string", length=255, nullable=true)
     */
    private $lastMainDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

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
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_projet", referencedColumnName="rowid")
     * })
     */
    private $fkProjet;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_valid", referencedColumnName="rowid")
     * })
     */
    private $fkUserValid;

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

    public function getRefSupplier(): ?string
    {
        return $this->refSupplier;
    }

    public function setRefSupplier(string $refSupplier): self
    {
        $this->refSupplier = $refSupplier;

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

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

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

    public function getDatef(): ?\DateTimeInterface
    {
        return $this->datef;
    }

    public function setDatef(?\DateTimeInterface $datef): self
    {
        $this->datef = $datef;

        return $this;
    }

    public function getDatePointoftax(): ?\DateTimeInterface
    {
        return $this->datePointoftax;
    }

    public function setDatePointoftax(?\DateTimeInterface $datePointoftax): self
    {
        $this->datePointoftax = $datePointoftax;

        return $this;
    }

    public function getDateValid(): ?\DateTimeInterface
    {
        return $this->dateValid;
    }

    public function setDateValid(?\DateTimeInterface $dateValid): self
    {
        $this->dateValid = $dateValid;

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

    public function getDateClosing(): ?\DateTimeInterface
    {
        return $this->dateClosing;
    }

    public function setDateClosing(?\DateTimeInterface $dateClosing): self
    {
        $this->dateClosing = $dateClosing;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPaye(): ?int
    {
        return $this->paye;
    }

    public function setPaye(int $paye): self
    {
        $this->paye = $paye;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

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

    public function getCloseCode(): ?string
    {
        return $this->closeCode;
    }

    public function setCloseCode(?string $closeCode): self
    {
        $this->closeCode = $closeCode;

        return $this;
    }

    public function getCloseNote(): ?string
    {
        return $this->closeNote;
    }

    public function setCloseNote(?string $closeNote): self
    {
        $this->closeNote = $closeNote;

        return $this;
    }

    public function getTva(): ?float
    {
        return $this->tva;
    }

    public function setTva(?float $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getLocaltax1(): ?float
    {
        return $this->localtax1;
    }

    public function setLocaltax1(?float $localtax1): self
    {
        $this->localtax1 = $localtax1;

        return $this;
    }

    public function getLocaltax2(): ?float
    {
        return $this->localtax2;
    }

    public function setLocaltax2(?float $localtax2): self
    {
        $this->localtax2 = $localtax2;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;

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

    public function getTotalTtc(): ?float
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(?float $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getFkStatut(): ?int
    {
        return $this->fkStatut;
    }

    public function setFkStatut(int $fkStatut): self
    {
        $this->fkStatut = $fkStatut;

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

    public function getFkUserClosing(): ?int
    {
        return $this->fkUserClosing;
    }

    public function setFkUserClosing(?int $fkUserClosing): self
    {
        $this->fkUserClosing = $fkUserClosing;

        return $this;
    }

    public function getFkFactureSource(): ?int
    {
        return $this->fkFactureSource;
    }

    public function setFkFactureSource(?int $fkFactureSource): self
    {
        $this->fkFactureSource = $fkFactureSource;

        return $this;
    }

    public function getFkAccount(): ?int
    {
        return $this->fkAccount;
    }

    public function setFkAccount(?int $fkAccount): self
    {
        $this->fkAccount = $fkAccount;

        return $this;
    }

    public function getFkCondReglement(): ?int
    {
        return $this->fkCondReglement;
    }

    public function setFkCondReglement(?int $fkCondReglement): self
    {
        $this->fkCondReglement = $fkCondReglement;

        return $this;
    }

    public function getFkModeReglement(): ?int
    {
        return $this->fkModeReglement;
    }

    public function setFkModeReglement(?int $fkModeReglement): self
    {
        $this->fkModeReglement = $fkModeReglement;

        return $this;
    }

    public function getDateLimReglement(): ?\DateTimeInterface
    {
        return $this->dateLimReglement;
    }

    public function setDateLimReglement(?\DateTimeInterface $dateLimReglement): self
    {
        $this->dateLimReglement = $dateLimReglement;

        return $this;
    }

    public function getNotePrivate(): ?string
    {
        return $this->notePrivate;
    }

    public function setNotePrivate(?string $notePrivate): self
    {
        $this->notePrivate = $notePrivate;

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

    public function getFkIncoterms(): ?int
    {
        return $this->fkIncoterms;
    }

    public function setFkIncoterms(?int $fkIncoterms): self
    {
        $this->fkIncoterms = $fkIncoterms;

        return $this;
    }

    public function getLocationIncoterms(): ?string
    {
        return $this->locationIncoterms;
    }

    public function setLocationIncoterms(?string $locationIncoterms): self
    {
        $this->locationIncoterms = $locationIncoterms;

        return $this;
    }

    public function getFkTransportMode(): ?int
    {
        return $this->fkTransportMode;
    }

    public function setFkTransportMode(?int $fkTransportMode): self
    {
        $this->fkTransportMode = $fkTransportMode;

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

    public function getLastMainDoc(): ?string
    {
        return $this->lastMainDoc;
    }

    public function setLastMainDoc(?string $lastMainDoc): self
    {
        $this->lastMainDoc = $lastMainDoc;

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

    public function getExtraparams(): ?string
    {
        return $this->extraparams;
    }

    public function setExtraparams(?string $extraparams): self
    {
        $this->extraparams = $extraparams;

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

    public function getFkProjet(): ?Projet
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?Projet $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

        return $this;
    }

    public function getFkSoc(): ?Societe
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?Societe $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

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

    public function getFkUserValid(): ?User
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?User $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }


}
