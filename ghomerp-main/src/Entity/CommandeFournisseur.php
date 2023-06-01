<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeFournisseur
 *
 * @ORM\Table(name="commande_fournisseur", uniqueConstraints={@ORM\UniqueConstraint(name="uk_commande_fournisseur_ref", columns={"ref", "fk_soc", "entity"})}, indexes={@ORM\Index(name="idx_commande_fournisseur_fk_soc", columns={"fk_soc"}), @ORM\Index(name="billed", columns={"billed"})})
 * @ORM\Entity
 */
class CommandeFournisseur
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
     * @var string|null
     *
     * @ORM\Column(name="ref_supplier", type="string", length=255, nullable=true)
     */
    private $refSupplier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_approve", type="datetime", nullable=true)
     */
    private $dateApprove;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_approve2", type="datetime", nullable=true)
     */
    private $dateApprove2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_commande", type="date", nullable=true)
     */
    private $dateCommande;

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
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_approve", type="integer", nullable=true)
     */
    private $fkUserApprove;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_approve2", type="integer", nullable=true)
     */
    private $fkUserApprove2;

    /**
     * @var int
     *
     * @ORM\Column(name="source", type="smallint", nullable=false)
     */
    private $source;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=true)
     */
    private $fkStatut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="billed", type="smallint", nullable=true)
     */
    private $billed = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountHt = 0.00000000;

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
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTva = 0.00000000;

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
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = 0.00000000;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_livraison", type="datetime", nullable=true)
     */
    private $dateLivraison;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_input_method", type="integer", nullable=true)
     */
    private $fkInputMethod = '0';

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
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

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

    public function getRefSupplier(): ?string
    {
        return $this->refSupplier;
    }

    public function setRefSupplier(?string $refSupplier): self
    {
        $this->refSupplier = $refSupplier;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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

    public function getDateApprove(): ?\DateTimeInterface
    {
        return $this->dateApprove;
    }

    public function setDateApprove(?\DateTimeInterface $dateApprove): self
    {
        $this->dateApprove = $dateApprove;

        return $this;
    }

    public function getDateApprove2(): ?\DateTimeInterface
    {
        return $this->dateApprove2;
    }

    public function setDateApprove2(?\DateTimeInterface $dateApprove2): self
    {
        $this->dateApprove2 = $dateApprove2;

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

    public function getFkUserValid(): ?int
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?int $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }

    public function getFkUserApprove(): ?int
    {
        return $this->fkUserApprove;
    }

    public function setFkUserApprove(?int $fkUserApprove): self
    {
        $this->fkUserApprove = $fkUserApprove;

        return $this;
    }

    public function getFkUserApprove2(): ?int
    {
        return $this->fkUserApprove2;
    }

    public function setFkUserApprove2(?int $fkUserApprove2): self
    {
        $this->fkUserApprove2 = $fkUserApprove2;

        return $this;
    }

    public function getSource(): ?int
    {
        return $this->source;
    }

    public function setSource(int $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getFkStatut(): ?int
    {
        return $this->fkStatut;
    }

    public function setFkStatut(?int $fkStatut): self
    {
        $this->fkStatut = $fkStatut;

        return $this;
    }

    public function getBilled(): ?int
    {
        return $this->billed;
    }

    public function setBilled(?int $billed): self
    {
        $this->billed = $billed;

        return $this;
    }

    public function getAmountHt(): ?float
    {
        return $this->amountHt;
    }

    public function setAmountHt(?float $amountHt): self
    {
        $this->amountHt = $amountHt;

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

    public function getTotalTva(): ?float
    {
        return $this->totalTva;
    }

    public function setTotalTva(?float $totalTva): self
    {
        $this->totalTva = $totalTva;

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

    public function getTotalHt(): ?float
    {
        return $this->totalHt;
    }

    public function setTotalHt(?float $totalHt): self
    {
        $this->totalHt = $totalHt;

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

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(?\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

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

    public function getFkInputMethod(): ?int
    {
        return $this->fkInputMethod;
    }

    public function setFkInputMethod(?int $fkInputMethod): self
    {
        $this->fkInputMethod = $fkInputMethod;

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

    public function getFkSoc(): ?Societe
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?Societe $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
    }


}
