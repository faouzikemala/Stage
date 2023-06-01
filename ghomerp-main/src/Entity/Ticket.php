<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ticket_ref", columns={"ref", "entity"}), @ORM\UniqueConstraint(name="uk_ticket_track_id", columns={"track_id"})}, indexes={@ORM\Index(name="idx_ticket_entity", columns={"entity"}), @ORM\Index(name="idx_ticket_fk_user_assign", columns={"fk_user_assign"}), @ORM\Index(name="idx_ticket_fk_statut", columns={"fk_statut"}), @ORM\Index(name="idx_ticket_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_ticket_fk_project", columns={"fk_project"})})
 * @ORM\Entity
 */
class Ticket
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
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="track_id", type="string", length=128, nullable=false)
     */
    private $trackId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_project", type="integer", nullable=true)
     */
    private $fkProject = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin_email", type="string", length=128, nullable=true)
     */
    private $originEmail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_create", type="integer", nullable=true)
     */
    private $fkUserCreate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_assign", type="integer", nullable=true)
     */
    private $fkUserAssign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_statut", type="integer", nullable=true)
     */
    private $fkStatut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resolution", type="integer", nullable=true)
     */
    private $resolution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="progress", type="string", length=100, nullable=true)
     */
    private $progress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="timing", type="string", length=20, nullable=true)
     */
    private $timing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_code", type="string", length=32, nullable=true)
     */
    private $typeCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_code", type="string", length=32, nullable=true)
     */
    private $categoryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="severity_code", type="string", length=32, nullable=true)
     */
    private $severityCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_read", type="datetime", nullable=true)
     */
    private $dateRead;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_close", type="datetime", nullable=true)
     */
    private $dateClose;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="notify_tiers_at_create", type="boolean", nullable=true)
     */
    private $notifyTiersAtCreate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_msgid", type="string", length=255, nullable=true)
     */
    private $emailMsgid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkTicket")
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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(?int $entity): self
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

    public function getTrackId(): ?string
    {
        return $this->trackId;
    }

    public function setTrackId(string $trackId): self
    {
        $this->trackId = $trackId;

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

    public function getOriginEmail(): ?string
    {
        return $this->originEmail;
    }

    public function setOriginEmail(?string $originEmail): self
    {
        $this->originEmail = $originEmail;

        return $this;
    }

    public function getFkUserCreate(): ?int
    {
        return $this->fkUserCreate;
    }

    public function setFkUserCreate(?int $fkUserCreate): self
    {
        $this->fkUserCreate = $fkUserCreate;

        return $this;
    }

    public function getFkUserAssign(): ?int
    {
        return $this->fkUserAssign;
    }

    public function setFkUserAssign(?int $fkUserAssign): self
    {
        $this->fkUserAssign = $fkUserAssign;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

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

    public function getResolution(): ?int
    {
        return $this->resolution;
    }

    public function setResolution(?int $resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getProgress(): ?string
    {
        return $this->progress;
    }

    public function setProgress(?string $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function getTiming(): ?string
    {
        return $this->timing;
    }

    public function setTiming(?string $timing): self
    {
        $this->timing = $timing;

        return $this;
    }

    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    public function getCategoryCode(): ?string
    {
        return $this->categoryCode;
    }

    public function setCategoryCode(?string $categoryCode): self
    {
        $this->categoryCode = $categoryCode;

        return $this;
    }

    public function getSeverityCode(): ?string
    {
        return $this->severityCode;
    }

    public function setSeverityCode(?string $severityCode): self
    {
        $this->severityCode = $severityCode;

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

    public function getDateRead(): ?\DateTimeInterface
    {
        return $this->dateRead;
    }

    public function setDateRead(?\DateTimeInterface $dateRead): self
    {
        $this->dateRead = $dateRead;

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

    public function getNotifyTiersAtCreate(): ?bool
    {
        return $this->notifyTiersAtCreate;
    }

    public function setNotifyTiersAtCreate(?bool $notifyTiersAtCreate): self
    {
        $this->notifyTiersAtCreate = $notifyTiersAtCreate;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

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
            $fkCategorie->addFkTicket($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkTicket($this);
        }

        return $this;
    }

}
