<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecruitmentRecruitmentcandidature
 *
 * @ORM\Table(name="recruitment_recruitmentcandidature", uniqueConstraints={@ORM\UniqueConstraint(name="uk_recruitmentcandidature_email_msgid", columns={"email_msgid"})}, indexes={@ORM\Index(name="idx_recruitment_recruitmentcandidature_rowid", columns={"rowid"}), @ORM\Index(name="recruitment_recruitmentcandidature_fk_user_creat", columns={"fk_user_creat"}), @ORM\Index(name="idx_recruitment_recruitmentcandidature_ref", columns={"ref"}), @ORM\Index(name="idx_recruitment_recruitmentcandidature_status", columns={"status"})})
 * @ORM\Entity
 */
class RecruitmentRecruitmentcandidature
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=false, options={"default"="(PROV)"})
     */
    private $ref = '(PROV)';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_recruitmentjobposition", type="integer", nullable=true)
     */
    private $fkRecruitmentjobposition;

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
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=128, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=128, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=64, nullable=true)
     */
    private $phone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_birth", type="date", nullable=true)
     */
    private $dateBirth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="remuneration_requested", type="integer", nullable=true)
     */
    private $remunerationRequested;

    /**
     * @var int|null
     *
     * @ORM\Column(name="remuneration_proposed", type="integer", nullable=true)
     */
    private $remunerationProposed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_msgid", type="string", length=175, nullable=true)
     */
    private $emailMsgid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_recruitment_origin", type="integer", nullable=true)
     */
    private $fkRecruitmentOrigin;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_creat", referencedColumnName="rowid")
     * })
     */
    private $fkUserCreat;

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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getFkRecruitmentjobposition(): ?int
    {
        return $this->fkRecruitmentjobposition;
    }

    public function setFkRecruitmentjobposition(?int $fkRecruitmentjobposition): self
    {
        $this->fkRecruitmentjobposition = $fkRecruitmentjobposition;

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getDateBirth(): ?\DateTimeInterface
    {
        return $this->dateBirth;
    }

    public function setDateBirth(?\DateTimeInterface $dateBirth): self
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    public function getRemunerationRequested(): ?int
    {
        return $this->remunerationRequested;
    }

    public function setRemunerationRequested(?int $remunerationRequested): self
    {
        $this->remunerationRequested = $remunerationRequested;

        return $this;
    }

    public function getRemunerationProposed(): ?int
    {
        return $this->remunerationProposed;
    }

    public function setRemunerationProposed(?int $remunerationProposed): self
    {
        $this->remunerationProposed = $remunerationProposed;

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

    public function getFkRecruitmentOrigin(): ?int
    {
        return $this->fkRecruitmentOrigin;
    }

    public function setFkRecruitmentOrigin(?int $fkRecruitmentOrigin): self
    {
        $this->fkRecruitmentOrigin = $fkRecruitmentOrigin;

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


}
