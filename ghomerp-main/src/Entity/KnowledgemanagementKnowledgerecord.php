<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KnowledgemanagementKnowledgerecord
 *
 * @ORM\Table(name="knowledgemanagement_knowledgerecord", indexes={@ORM\Index(name="idx_knowledgemanagement_knowledgerecord_ref", columns={"ref"}), @ORM\Index(name="idx_knowledgemanagement_knowledgerecord_status", columns={"status"}), @ORM\Index(name="idx_knowledgemanagement_knowledgerecord_rowid", columns={"rowid"}), @ORM\Index(name="knowledgemanagement_knowledgerecord_fk_user_creat", columns={"fk_user_creat"})})
 * @ORM\Entity
 */
class KnowledgemanagementKnowledgerecord
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
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_main_doc", type="string", length=255, nullable=true)
     */
    private $lastMainDoc;

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
     * @var string
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=false)
     */
    private $question;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer", type="text", length=65535, nullable=true)
     */
    private $answer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_ticket", type="integer", nullable=true)
     */
    private $fkTicket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_c_ticket_category", type="integer", nullable=true)
     */
    private $fkCTicketCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

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

    public function getLastMainDoc(): ?string
    {
        return $this->lastMainDoc;
    }

    public function setLastMainDoc(?string $lastMainDoc): self
    {
        $this->lastMainDoc = $lastMainDoc;

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

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;

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

    public function getFkTicket(): ?int
    {
        return $this->fkTicket;
    }

    public function setFkTicket(?int $fkTicket): self
    {
        $this->fkTicket = $fkTicket;

        return $this;
    }

    public function getFkCTicketCategory(): ?int
    {
        return $this->fkCTicketCategory;
    }

    public function setFkCTicketCategory(?int $fkCTicketCategory): self
    {
        $this->fkCTicketCategory = $fkCTicketCategory;

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
