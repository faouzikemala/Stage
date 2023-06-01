<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * BankAccount
 *
 * @ORM\Table(name="bank_account", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bank_account_label", columns={"label", "entity"})}, indexes={@ORM\Index(name="idx_fk_accountancy_journal", columns={"fk_accountancy_journal"})})
 * @ORM\Entity
 */
class BankAccount
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=12, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

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
     * @var string|null
     *
     * @ORM\Column(name="bank", type="string", length=60, nullable=true)
     */
    private $bank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_banque", type="string", length=128, nullable=true)
     */
    private $codeBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_guichet", type="string", length=6, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_rib", type="string", length=5, nullable=true)
     */
    private $cleRib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bic", type="string", length=11, nullable=true)
     */
    private $bic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iban_prefix", type="string", length=34, nullable=true)
     */
    private $ibanPrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_iban", type="string", length=2, nullable=true)
     */
    private $countryIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_iban", type="string", length=2, nullable=true)
     */
    private $cleIban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domiciliation", type="string", length=255, nullable=true)
     */
    private $domiciliation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state_id", type="integer", nullable=true)
     */
    private $stateId;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proprio", type="string", length=60, nullable=true)
     */
    private $proprio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner_address", type="string", length=255, nullable=true)
     */
    private $ownerAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="courant", type="smallint", nullable=false)
     */
    private $courant = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="clos", type="smallint", nullable=false)
     */
    private $clos = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rappro", type="smallint", nullable=true, options={"default"="1"})
     */
    private $rappro = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=128, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_number", type="string", length=32, nullable=true)
     */
    private $accountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=3, nullable=false)
     */
    private $currencyCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_allowed", type="integer", nullable=true)
     */
    private $minAllowed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_desired", type="integer", nullable=true)
     */
    private $minDesired = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * @var string|null
     *
     * @ORM\Column(name="ics", type="string", length=32, nullable=true)
     */
    private $ics;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ics_transfer", type="string", length=32, nullable=true)
     */
    private $icsTransfer;

    /**
     * @var \AccountingJournal
     *
     * @ORM\ManyToOne(targetEntity="AccountingJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_accountancy_journal", referencedColumnName="rowid")
     * })
     */
    private $fkAccountancyJournal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkAccount")
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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

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

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getCodeBanque(): ?string
    {
        return $this->codeBanque;
    }

    public function setCodeBanque(?string $codeBanque): self
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    public function getCodeGuichet(): ?string
    {
        return $this->codeGuichet;
    }

    public function setCodeGuichet(?string $codeGuichet): self
    {
        $this->codeGuichet = $codeGuichet;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getCleRib(): ?string
    {
        return $this->cleRib;
    }

    public function setCleRib(?string $cleRib): self
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getIbanPrefix(): ?string
    {
        return $this->ibanPrefix;
    }

    public function setIbanPrefix(?string $ibanPrefix): self
    {
        $this->ibanPrefix = $ibanPrefix;

        return $this;
    }

    public function getCountryIban(): ?string
    {
        return $this->countryIban;
    }

    public function setCountryIban(?string $countryIban): self
    {
        $this->countryIban = $countryIban;

        return $this;
    }

    public function getCleIban(): ?string
    {
        return $this->cleIban;
    }

    public function setCleIban(?string $cleIban): self
    {
        $this->cleIban = $cleIban;

        return $this;
    }

    public function getDomiciliation(): ?string
    {
        return $this->domiciliation;
    }

    public function setDomiciliation(?string $domiciliation): self
    {
        $this->domiciliation = $domiciliation;

        return $this;
    }

    public function getStateId(): ?int
    {
        return $this->stateId;
    }

    public function setStateId(?int $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function getFkPays(): ?int
    {
        return $this->fkPays;
    }

    public function setFkPays(int $fkPays): self
    {
        $this->fkPays = $fkPays;

        return $this;
    }

    public function getProprio(): ?string
    {
        return $this->proprio;
    }

    public function setProprio(?string $proprio): self
    {
        $this->proprio = $proprio;

        return $this;
    }

    public function getOwnerAddress(): ?string
    {
        return $this->ownerAddress;
    }

    public function setOwnerAddress(?string $ownerAddress): self
    {
        $this->ownerAddress = $ownerAddress;

        return $this;
    }

    public function getCourant(): ?int
    {
        return $this->courant;
    }

    public function setCourant(int $courant): self
    {
        $this->courant = $courant;

        return $this;
    }

    public function getClos(): ?int
    {
        return $this->clos;
    }

    public function setClos(int $clos): self
    {
        $this->clos = $clos;

        return $this;
    }

    public function getRappro(): ?int
    {
        return $this->rappro;
    }

    public function setRappro(?int $rappro): self
    {
        $this->rappro = $rappro;

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

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getMinAllowed(): ?int
    {
        return $this->minAllowed;
    }

    public function setMinAllowed(?int $minAllowed): self
    {
        $this->minAllowed = $minAllowed;

        return $this;
    }

    public function getMinDesired(): ?int
    {
        return $this->minDesired;
    }

    public function setMinDesired(?int $minDesired): self
    {
        $this->minDesired = $minDesired;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

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

    public function getIcs(): ?string
    {
        return $this->ics;
    }

    public function setIcs(?string $ics): self
    {
        $this->ics = $ics;

        return $this;
    }

    public function getIcsTransfer(): ?string
    {
        return $this->icsTransfer;
    }

    public function setIcsTransfer(?string $icsTransfer): self
    {
        $this->icsTransfer = $icsTransfer;

        return $this;
    }

    public function getFkAccountancyJournal(): ?AccountingJournal
    {
        return $this->fkAccountancyJournal;
    }

    public function setFkAccountancyJournal(?AccountingJournal $fkAccountancyJournal): self
    {
        $this->fkAccountancyJournal = $fkAccountancyJournal;

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
            $fkCategorie->addFkAccount($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkAccount($this);
        }

        return $this;
    }

}
