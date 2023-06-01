<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partnership
 *
 * @ORM\Table(name="partnership", uniqueConstraints={@ORM\UniqueConstraint(name="uk_partnership_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_partnership_entity", columns={"entity"})})
 * @ORM\Entity
 */
class Partnership
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
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_member", type="integer", nullable=true)
     */
    private $fkMember;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_partnership_start", type="date", nullable=false)
     */
    private $datePartnershipStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_partnership_end", type="date", nullable=false)
     */
    private $datePartnershipEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_decline_or_cancel", type="text", length=65535, nullable=true)
     */
    private $reasonDeclineOrCancel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

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
     * @ORM\Column(name="last_main_doc", type="string", length=255, nullable=true)
     */
    private $lastMainDoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_last_url_check_error", type="integer", nullable=true)
     */
    private $countLastUrlCheckError = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_check_backlink", type="datetime", nullable=true)
     */
    private $lastCheckBacklink;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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

    public function getFkMember(): ?int
    {
        return $this->fkMember;
    }

    public function setFkMember(?int $fkMember): self
    {
        $this->fkMember = $fkMember;

        return $this;
    }

    public function getDatePartnershipStart(): ?\DateTimeInterface
    {
        return $this->datePartnershipStart;
    }

    public function setDatePartnershipStart(\DateTimeInterface $datePartnershipStart): self
    {
        $this->datePartnershipStart = $datePartnershipStart;

        return $this;
    }

    public function getDatePartnershipEnd(): ?\DateTimeInterface
    {
        return $this->datePartnershipEnd;
    }

    public function setDatePartnershipEnd(\DateTimeInterface $datePartnershipEnd): self
    {
        $this->datePartnershipEnd = $datePartnershipEnd;

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

    public function getReasonDeclineOrCancel(): ?string
    {
        return $this->reasonDeclineOrCancel;
    }

    public function setReasonDeclineOrCancel(?string $reasonDeclineOrCancel): self
    {
        $this->reasonDeclineOrCancel = $reasonDeclineOrCancel;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

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

    public function getLastMainDoc(): ?string
    {
        return $this->lastMainDoc;
    }

    public function setLastMainDoc(?string $lastMainDoc): self
    {
        $this->lastMainDoc = $lastMainDoc;

        return $this;
    }

    public function getCountLastUrlCheckError(): ?int
    {
        return $this->countLastUrlCheckError;
    }

    public function setCountLastUrlCheckError(?int $countLastUrlCheckError): self
    {
        $this->countLastUrlCheckError = $countLastUrlCheckError;

        return $this;
    }

    public function getLastCheckBacklink(): ?\DateTimeInterface
    {
        return $this->lastCheckBacklink;
    }

    public function setLastCheckBacklink(?\DateTimeInterface $lastCheckBacklink): self
    {
        $this->lastCheckBacklink = $lastCheckBacklink;

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


}
