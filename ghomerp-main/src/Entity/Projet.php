<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", uniqueConstraints={@ORM\UniqueConstraint(name="uk_projet_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_projet_fk_soc", columns={"fk_soc"})})
 * @ORM\Entity
 */
class Projet
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateo", type="date", nullable=true)
     */
    private $dateo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datee", type="date", nullable=true)
     */
    private $datee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
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
     * @ORM\Column(name="public", type="integer", nullable=true)
     */
    private $public;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="integer", nullable=false)
     */
    private $fkStatut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_opp_status", type="integer", nullable=true)
     */
    private $fkOppStatus;

    /**
     * @var float|null
     *
     * @ORM\Column(name="opp_percent", type="float", precision=5, scale=2, nullable=true)
     */
    private $oppPercent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_opp_status_end", type="integer", nullable=true)
     */
    private $fkOppStatusEnd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_close", type="datetime", nullable=true)
     */
    private $dateClose;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_close", type="integer", nullable=true)
     */
    private $fkUserClose;

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
     * @ORM\Column(name="email_msgid", type="string", length=175, nullable=true)
     */
    private $emailMsgid;

    /**
     * @var float|null
     *
     * @ORM\Column(name="opp_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $oppAmount;

    /**
     * @var float|null
     *
     * @ORM\Column(name="budget_amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $budgetAmount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_opportunity", type="integer", nullable=true)
     */
    private $usageOpportunity = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_task", type="integer", nullable=true, options={"default"="1"})
     */
    private $usageTask = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_bill_time", type="integer", nullable=true)
     */
    private $usageBillTime = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_organize_event", type="integer", nullable=true)
     */
    private $usageOrganizeEvent = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="accept_conference_suggestions", type="integer", nullable=true)
     */
    private $acceptConferenceSuggestions = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="accept_booth_suggestions", type="integer", nullable=true)
     */
    private $acceptBoothSuggestions = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_registration", type="float", precision=24, scale=8, nullable=true)
     */
    private $priceRegistration;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_booth", type="float", precision=24, scale=8, nullable=true)
     */
    private $priceBooth;

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
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkProject")
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

    public function getDateo(): ?\DateTimeInterface
    {
        return $this->dateo;
    }

    public function setDateo(?\DateTimeInterface $dateo): self
    {
        $this->dateo = $dateo;

        return $this;
    }

    public function getDatee(): ?\DateTimeInterface
    {
        return $this->datee;
    }

    public function setDatee(?\DateTimeInterface $datee): self
    {
        $this->datee = $datee;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(int $fkUserCreat): self
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

    public function getPublic(): ?int
    {
        return $this->public;
    }

    public function setPublic(?int $public): self
    {
        $this->public = $public;

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

    public function getFkOppStatus(): ?int
    {
        return $this->fkOppStatus;
    }

    public function setFkOppStatus(?int $fkOppStatus): self
    {
        $this->fkOppStatus = $fkOppStatus;

        return $this;
    }

    public function getOppPercent(): ?float
    {
        return $this->oppPercent;
    }

    public function setOppPercent(?float $oppPercent): self
    {
        $this->oppPercent = $oppPercent;

        return $this;
    }

    public function getFkOppStatusEnd(): ?int
    {
        return $this->fkOppStatusEnd;
    }

    public function setFkOppStatusEnd(?int $fkOppStatusEnd): self
    {
        $this->fkOppStatusEnd = $fkOppStatusEnd;

        return $this;
    }

    public function getDateClose(): ?\DateTimeInterface
    {
        return $this->dateClose;
    }

    public function setDateClose(?\DateTimeInterface $dateClose): self
    {
        $this->dateClose = $dateClose;

        return $this;
    }

    public function getFkUserClose(): ?int
    {
        return $this->fkUserClose;
    }

    public function setFkUserClose(?int $fkUserClose): self
    {
        $this->fkUserClose = $fkUserClose;

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

    public function getEmailMsgid(): ?string
    {
        return $this->emailMsgid;
    }

    public function setEmailMsgid(?string $emailMsgid): self
    {
        $this->emailMsgid = $emailMsgid;

        return $this;
    }

    public function getOppAmount(): ?float
    {
        return $this->oppAmount;
    }

    public function setOppAmount(?float $oppAmount): self
    {
        $this->oppAmount = $oppAmount;

        return $this;
    }

    public function getBudgetAmount(): ?float
    {
        return $this->budgetAmount;
    }

    public function setBudgetAmount(?float $budgetAmount): self
    {
        $this->budgetAmount = $budgetAmount;

        return $this;
    }

    public function getUsageOpportunity(): ?int
    {
        return $this->usageOpportunity;
    }

    public function setUsageOpportunity(?int $usageOpportunity): self
    {
        $this->usageOpportunity = $usageOpportunity;

        return $this;
    }

    public function getUsageTask(): ?int
    {
        return $this->usageTask;
    }

    public function setUsageTask(?int $usageTask): self
    {
        $this->usageTask = $usageTask;

        return $this;
    }

    public function getUsageBillTime(): ?int
    {
        return $this->usageBillTime;
    }

    public function setUsageBillTime(?int $usageBillTime): self
    {
        $this->usageBillTime = $usageBillTime;

        return $this;
    }

    public function getUsageOrganizeEvent(): ?int
    {
        return $this->usageOrganizeEvent;
    }

    public function setUsageOrganizeEvent(?int $usageOrganizeEvent): self
    {
        $this->usageOrganizeEvent = $usageOrganizeEvent;

        return $this;
    }

    public function getAcceptConferenceSuggestions(): ?int
    {
        return $this->acceptConferenceSuggestions;
    }

    public function setAcceptConferenceSuggestions(?int $acceptConferenceSuggestions): self
    {
        $this->acceptConferenceSuggestions = $acceptConferenceSuggestions;

        return $this;
    }

    public function getAcceptBoothSuggestions(): ?int
    {
        return $this->acceptBoothSuggestions;
    }

    public function setAcceptBoothSuggestions(?int $acceptBoothSuggestions): self
    {
        $this->acceptBoothSuggestions = $acceptBoothSuggestions;

        return $this;
    }

    public function getPriceRegistration(): ?float
    {
        return $this->priceRegistration;
    }

    public function setPriceRegistration(?float $priceRegistration): self
    {
        $this->priceRegistration = $priceRegistration;

        return $this;
    }

    public function getPriceBooth(): ?float
    {
        return $this->priceBooth;
    }

    public function setPriceBooth(?float $priceBooth): self
    {
        $this->priceBooth = $priceBooth;

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

    public function getFkSoc(): ?Societe
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?Societe $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

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
            $fkCategorie->addFkProject($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkProject($this);
        }

        return $this;
    }

}
