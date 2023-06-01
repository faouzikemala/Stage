<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expensereport
 *
 * @ORM\Table(name="expensereport", uniqueConstraints={@ORM\UniqueConstraint(name="idx_expensereport_uk_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_expensereport_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_expensereport_fk_user_approve", columns={"fk_user_approve"}), @ORM\Index(name="idx_expensereport_date_fin", columns={"date_fin"}), @ORM\Index(name="idx_expensereport_fk_user_valid", columns={"fk_user_valid"}), @ORM\Index(name="idx_expensereport_fk_refuse", columns={"fk_user_approve"}), @ORM\Index(name="idx_expensereport_date_debut", columns={"date_debut"}), @ORM\Index(name="idx_expensereport_fk_statut", columns={"fk_statut"})})
 * @ORM\Entity
 */
class Expensereport
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
     * @ORM\Column(name="ref", type="string", length=50, nullable=false)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ref_number_int", type="integer", nullable=true)
     */
    private $refNumberInt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ref_ext", type="integer", nullable=true)
     */
    private $refExt;

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
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = 0.00000000;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

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
     * @ORM\Column(name="date_refuse", type="datetime", nullable=true)
     */
    private $dateRefuse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cancel", type="datetime", nullable=true)
     */
    private $dateCancel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

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
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_validator", type="integer", nullable=true)
     */
    private $fkUserValidator;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_approve", type="integer", nullable=true)
     */
    private $fkUserApprove;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_refuse", type="integer", nullable=true)
     */
    private $fkUserRefuse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cancel", type="integer", nullable=true)
     */
    private $fkUserCancel;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="integer", nullable=false)
     */
    private $fkStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_c_paiement", type="integer", nullable=true)
     */
    private $fkCPaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="smallint", nullable=false)
     */
    private $paid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_refuse", type="string", length=255, nullable=true)
     */
    private $detailRefuse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_cancel", type="string", length=255, nullable=true)
     */
    private $detailCancel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="integration_compta", type="integer", nullable=true)
     */
    private $integrationCompta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank_account", type="integer", nullable=true)
     */
    private $fkBankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=50, nullable=true)
     */
    private $modelPdf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_main_doc", type="string", length=255, nullable=true)
     */
    private $lastMainDoc;

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

    public function getRefNumberInt(): ?int
    {
        return $this->refNumberInt;
    }

    public function setRefNumberInt(?int $refNumberInt): self
    {
        $this->refNumberInt = $refNumberInt;

        return $this;
    }

    public function getRefExt(): ?int
    {
        return $this->refExt;
    }

    public function setRefExt(?int $refExt): self
    {
        $this->refExt = $refExt;

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

    public function getTotalTtc(): ?float
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(?float $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->dateCreate;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

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

    public function getDateRefuse(): ?\DateTimeInterface
    {
        return $this->dateRefuse;
    }

    public function setDateRefuse(?\DateTimeInterface $dateRefuse): self
    {
        $this->dateRefuse = $dateRefuse;

        return $this;
    }

    public function getDateCancel(): ?\DateTimeInterface
    {
        return $this->dateCancel;
    }

    public function setDateCancel(?\DateTimeInterface $dateCancel): self
    {
        $this->dateCancel = $dateCancel;

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

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

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

    public function getFkUserValid(): ?int
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?int $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }

    public function getFkUserValidator(): ?int
    {
        return $this->fkUserValidator;
    }

    public function setFkUserValidator(?int $fkUserValidator): self
    {
        $this->fkUserValidator = $fkUserValidator;

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

    public function getFkUserRefuse(): ?int
    {
        return $this->fkUserRefuse;
    }

    public function setFkUserRefuse(?int $fkUserRefuse): self
    {
        $this->fkUserRefuse = $fkUserRefuse;

        return $this;
    }

    public function getFkUserCancel(): ?int
    {
        return $this->fkUserCancel;
    }

    public function setFkUserCancel(?int $fkUserCancel): self
    {
        $this->fkUserCancel = $fkUserCancel;

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

    public function getFkCPaiement(): ?int
    {
        return $this->fkCPaiement;
    }

    public function setFkCPaiement(?int $fkCPaiement): self
    {
        $this->fkCPaiement = $fkCPaiement;

        return $this;
    }

    public function getPaid(): ?int
    {
        return $this->paid;
    }

    public function setPaid(int $paid): self
    {
        $this->paid = $paid;

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

    public function getNotePrivate(): ?string
    {
        return $this->notePrivate;
    }

    public function setNotePrivate(?string $notePrivate): self
    {
        $this->notePrivate = $notePrivate;

        return $this;
    }

    public function getDetailRefuse(): ?string
    {
        return $this->detailRefuse;
    }

    public function setDetailRefuse(?string $detailRefuse): self
    {
        $this->detailRefuse = $detailRefuse;

        return $this;
    }

    public function getDetailCancel(): ?string
    {
        return $this->detailCancel;
    }

    public function setDetailCancel(?string $detailCancel): self
    {
        $this->detailCancel = $detailCancel;

        return $this;
    }

    public function getIntegrationCompta(): ?int
    {
        return $this->integrationCompta;
    }

    public function setIntegrationCompta(?int $integrationCompta): self
    {
        $this->integrationCompta = $integrationCompta;

        return $this;
    }

    public function getFkBankAccount(): ?int
    {
        return $this->fkBankAccount;
    }

    public function setFkBankAccount(?int $fkBankAccount): self
    {
        $this->fkBankAccount = $fkBankAccount;

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


}
