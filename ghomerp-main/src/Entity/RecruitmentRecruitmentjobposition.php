<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecruitmentRecruitmentjobposition
 *
 * @ORM\Table(name="recruitment_recruitmentjobposition", indexes={@ORM\Index(name="recruitment_recruitmentjobposition_fk_user_supervisor", columns={"fk_user_supervisor"}), @ORM\Index(name="recruitment_recruitmentjobposition_fk_user_creat", columns={"fk_user_creat"}), @ORM\Index(name="idx_recruitment_recruitmentjobposition_ref", columns={"ref"}), @ORM\Index(name="idx_recruitment_recruitmentjobposition_fk_project", columns={"fk_project"}), @ORM\Index(name="recruitment_recruitmentjobposition_fk_user_recruiter", columns={"fk_user_recruiter"}), @ORM\Index(name="recruitment_recruitmentjobposition_fk_establishment", columns={"fk_establishment"}), @ORM\Index(name="idx_recruitment_recruitmentjobposition_status", columns={"status"}), @ORM\Index(name="idx_recruitment_recruitmentjobposition_rowid", columns={"rowid"}), @ORM\Index(name="idx_recruitment_recruitmentjobposition_fk_soc", columns={"fk_soc"})})
 * @ORM\Entity
 */
class RecruitmentRecruitmentjobposition
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
     * @ORM\Column(name="ref", type="string", length=128, nullable=false, options={"default"="(PROV)"})
     */
    private $ref = '(PROV)';

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="qty", type="integer", nullable=false, options={"default"="1"})
     */
    private $qty = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_project", type="integer", nullable=true)
     */
    private $fkProject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_recruiter", type="string", length=255, nullable=true)
     */
    private $emailRecruiter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_planned", type="date", nullable=true)
     */
    private $datePlanned;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remuneration_suggested", type="string", length=255, nullable=true)
     */
    private $remunerationSuggested;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
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
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

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
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var \Establishment
     *
     * @ORM\ManyToOne(targetEntity="Establishment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_establishment", referencedColumnName="rowid")
     * })
     */
    private $fkEstablishment;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_creat", referencedColumnName="rowid")
     * })
     */
    private $fkUserCreat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_recruiter", referencedColumnName="rowid")
     * })
     */
    private $fkUserRecruiter;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_supervisor", referencedColumnName="rowid")
     * })
     */
    private $fkUserSupervisor;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getQty(): ?int
    {
        return $this->qty;
    }

    public function setQty(int $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getFkSoc(): ?int
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?int $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
    }

    public function getFkProject(): ?int
    {
        return $this->fkProject;
    }

    public function setFkProject(?int $fkProject): self
    {
        $this->fkProject = $fkProject;

        return $this;
    }

    public function getEmailRecruiter(): ?string
    {
        return $this->emailRecruiter;
    }

    public function setEmailRecruiter(?string $emailRecruiter): self
    {
        $this->emailRecruiter = $emailRecruiter;

        return $this;
    }

    public function getDatePlanned(): ?\DateTimeInterface
    {
        return $this->datePlanned;
    }

    public function setDatePlanned(?\DateTimeInterface $datePlanned): self
    {
        $this->datePlanned = $datePlanned;

        return $this;
    }

    public function getRemunerationSuggested(): ?string
    {
        return $this->remunerationSuggested;
    }

    public function setRemunerationSuggested(?string $remunerationSuggested): self
    {
        $this->remunerationSuggested = $remunerationSuggested;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
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

    public function getFkUserModif(): ?int
    {
        return $this->fkUserModif;
    }

    public function setFkUserModif(?int $fkUserModif): self
    {
        $this->fkUserModif = $fkUserModif;

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

    public function getModelPdf(): ?string
    {
        return $this->modelPdf;
    }

    public function setModelPdf(?string $modelPdf): self
    {
        $this->modelPdf = $modelPdf;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFkEstablishment(): ?Establishment
    {
        return $this->fkEstablishment;
    }

    public function setFkEstablishment(?Establishment $fkEstablishment): self
    {
        $this->fkEstablishment = $fkEstablishment;

        return $this;
    }

    public function getFkUserCreat(): ?User
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?User $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserRecruiter(): ?User
    {
        return $this->fkUserRecruiter;
    }

    public function setFkUserRecruiter(?User $fkUserRecruiter): self
    {
        $this->fkUserRecruiter = $fkUserRecruiter;

        return $this;
    }

    public function getFkUserSupervisor(): ?User
    {
        return $this->fkUserSupervisor;
    }

    public function setFkUserSupervisor(?User $fkUserSupervisor): self
    {
        $this->fkUserSupervisor = $fkUserSupervisor;

        return $this;
    }


}
