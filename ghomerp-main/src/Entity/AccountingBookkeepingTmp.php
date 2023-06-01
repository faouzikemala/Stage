<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountingBookkeepingTmp
 *
 * @ORM\Table(name="accounting_bookkeeping_tmp", indexes={@ORM\Index(name="idx_accounting_bookkeeping_tmp_fk_docdet", columns={"fk_docdet"}), @ORM\Index(name="idx_accounting_bookkeeping_tmp_code_journal", columns={"code_journal"}), @ORM\Index(name="idx_accounting_bookkeeping_tmp_doc_date", columns={"doc_date"}), @ORM\Index(name="idx_accounting_bookkeeping_tmp_numero_compte", columns={"numero_compte"})})
 * @ORM\Entity
 */
class AccountingBookkeepingTmp
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
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date", nullable=false)
     */
    private $docDate;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_type", type="string", length=30, nullable=false)
     */
    private $docType;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_ref", type="string", length=300, nullable=false)
     */
    private $docRef;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_doc", type="integer", nullable=false)
     */
    private $fkDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_docdet", type="integer", nullable=false)
     */
    private $fkDocdet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thirdparty_code", type="string", length=32, nullable=true)
     */
    private $thirdpartyCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subledger_account", type="string", length=32, nullable=true)
     */
    private $subledgerAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subledger_label", type="string", length=255, nullable=true)
     */
    private $subledgerLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_compte", type="string", length=32, nullable=true)
     */
    private $numeroCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="label_compte", type="string", length=255, nullable=false)
     */
    private $labelCompte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label_operation", type="string", length=255, nullable=true)
     */
    private $labelOperation;

    /**
     * @var float
     *
     * @ORM\Column(name="debit", type="float", precision=24, scale=8, nullable=false)
     */
    private $debit;

    /**
     * @var float
     *
     * @ORM\Column(name="credit", type="float", precision=24, scale=8, nullable=false)
     */
    private $credit;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=24, scale=8, nullable=false)
     */
    private $montant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sens", type="string", length=1, nullable=true)
     */
    private $sens;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lettering_code", type="string", length=255, nullable=true)
     */
    private $letteringCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lettering", type="datetime", nullable=true)
     */
    private $dateLettering;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lim_reglement", type="datetime", nullable=true)
     */
    private $dateLimReglement;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string
     *
     * @ORM\Column(name="code_journal", type="string", length=32, nullable=false)
     */
    private $codeJournal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="journal_label", type="string", length=255, nullable=true)
     */
    private $journalLabel;

    /**
     * @var int
     *
     * @ORM\Column(name="piece_num", type="integer", nullable=false)
     */
    private $pieceNum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_validated", type="datetime", nullable=true)
     */
    private $dateValidated;

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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getDocDate(): ?\DateTimeInterface
    {
        return $this->docDate;
    }

    public function setDocDate(\DateTimeInterface $docDate): self
    {
        $this->docDate = $docDate;

        return $this;
    }

    public function getDocType(): ?string
    {
        return $this->docType;
    }

    public function setDocType(string $docType): self
    {
        $this->docType = $docType;

        return $this;
    }

    public function getDocRef(): ?string
    {
        return $this->docRef;
    }

    public function setDocRef(string $docRef): self
    {
        $this->docRef = $docRef;

        return $this;
    }

    public function getFkDoc(): ?int
    {
        return $this->fkDoc;
    }

    public function setFkDoc(int $fkDoc): self
    {
        $this->fkDoc = $fkDoc;

        return $this;
    }

    public function getFkDocdet(): ?int
    {
        return $this->fkDocdet;
    }

    public function setFkDocdet(int $fkDocdet): self
    {
        $this->fkDocdet = $fkDocdet;

        return $this;
    }

    public function getThirdpartyCode(): ?string
    {
        return $this->thirdpartyCode;
    }

    public function setThirdpartyCode(?string $thirdpartyCode): self
    {
        $this->thirdpartyCode = $thirdpartyCode;

        return $this;
    }

    public function getSubledgerAccount(): ?string
    {
        return $this->subledgerAccount;
    }

    public function setSubledgerAccount(?string $subledgerAccount): self
    {
        $this->subledgerAccount = $subledgerAccount;

        return $this;
    }

    public function getSubledgerLabel(): ?string
    {
        return $this->subledgerLabel;
    }

    public function setSubledgerLabel(?string $subledgerLabel): self
    {
        $this->subledgerLabel = $subledgerLabel;

        return $this;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(?string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getLabelCompte(): ?string
    {
        return $this->labelCompte;
    }

    public function setLabelCompte(string $labelCompte): self
    {
        $this->labelCompte = $labelCompte;

        return $this;
    }

    public function getLabelOperation(): ?string
    {
        return $this->labelOperation;
    }

    public function setLabelOperation(?string $labelOperation): self
    {
        $this->labelOperation = $labelOperation;

        return $this;
    }

    public function getDebit(): ?float
    {
        return $this->debit;
    }

    public function setDebit(float $debit): self
    {
        $this->debit = $debit;

        return $this;
    }

    public function getCredit(): ?float
    {
        return $this->credit;
    }

    public function setCredit(float $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getSens(): ?string
    {
        return $this->sens;
    }

    public function setSens(?string $sens): self
    {
        $this->sens = $sens;

        return $this;
    }

    public function getMulticurrencyAmount(): ?float
    {
        return $this->multicurrencyAmount;
    }

    public function setMulticurrencyAmount(?float $multicurrencyAmount): self
    {
        $this->multicurrencyAmount = $multicurrencyAmount;

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

    public function getLetteringCode(): ?string
    {
        return $this->letteringCode;
    }

    public function setLetteringCode(?string $letteringCode): self
    {
        $this->letteringCode = $letteringCode;

        return $this;
    }

    public function getDateLettering(): ?\DateTimeInterface
    {
        return $this->dateLettering;
    }

    public function setDateLettering(?\DateTimeInterface $dateLettering): self
    {
        $this->dateLettering = $dateLettering;

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

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(int $fkUserAuthor): self
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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getCodeJournal(): ?string
    {
        return $this->codeJournal;
    }

    public function setCodeJournal(string $codeJournal): self
    {
        $this->codeJournal = $codeJournal;

        return $this;
    }

    public function getJournalLabel(): ?string
    {
        return $this->journalLabel;
    }

    public function setJournalLabel(?string $journalLabel): self
    {
        $this->journalLabel = $journalLabel;

        return $this;
    }

    public function getPieceNum(): ?int
    {
        return $this->pieceNum;
    }

    public function setPieceNum(int $pieceNum): self
    {
        $this->pieceNum = $pieceNum;

        return $this;
    }

    public function getDateValidated(): ?\DateTimeInterface
    {
        return $this->dateValidated;
    }

    public function setDateValidated(?\DateTimeInterface $dateValidated): self
    {
        $this->dateValidated = $dateValidated;

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
