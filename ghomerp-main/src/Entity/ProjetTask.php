<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetTask
 *
 * @ORM\Table(name="projet_task", uniqueConstraints={@ORM\UniqueConstraint(name="uk_projet_task_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_projet_task_fk_user_creat", columns={"fk_user_creat"}), @ORM\Index(name="idx_projet_task_fk_projet", columns={"fk_projet"}), @ORM\Index(name="idx_projet_task_fk_user_valid", columns={"fk_user_valid"})})
 * @ORM\Entity
 */
class ProjetTask
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
     * @var int
     *
     * @ORM\Column(name="fk_task_parent", type="integer", nullable=false)
     */
    private $fkTaskParent = '0';

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
     * @ORM\Column(name="dateo", type="datetime", nullable=true)
     */
    private $dateo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datee", type="datetime", nullable=true)
     */
    private $datee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datev", type="datetime", nullable=true)
     */
    private $datev;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="duration_effective", type="float", precision=10, scale=0, nullable=true)
     */
    private $durationEffective = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="planned_workload", type="float", precision=10, scale=0, nullable=true)
     */
    private $plannedWorkload = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="progress", type="integer", nullable=true)
     */
    private $progress = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut = '0';

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
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

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
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_projet", referencedColumnName="rowid")
     * })
     */
    private $fkProjet;

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
     *   @ORM\JoinColumn(name="fk_user_valid", referencedColumnName="rowid")
     * })
     */
    private $fkUserValid;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getFkTaskParent(): ?int
    {
        return $this->fkTaskParent;
    }

    public function setFkTaskParent(int $fkTaskParent): self
    {
        $this->fkTaskParent = $fkTaskParent;

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

    public function getDatev(): ?\DateTimeInterface
    {
        return $this->datev;
    }

    public function setDatev(?\DateTimeInterface $datev): self
    {
        $this->datev = $datev;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDurationEffective(): ?float
    {
        return $this->durationEffective;
    }

    public function setDurationEffective(?float $durationEffective): self
    {
        $this->durationEffective = $durationEffective;

        return $this;
    }

    public function getPlannedWorkload(): ?float
    {
        return $this->plannedWorkload;
    }

    public function setPlannedWorkload(?float $plannedWorkload): self
    {
        $this->plannedWorkload = $plannedWorkload;

        return $this;
    }

    public function getProgress(): ?int
    {
        return $this->progress;
    }

    public function setProgress(?int $progress): self
    {
        $this->progress = $progress;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

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

    public function getFkStatut(): ?int
    {
        return $this->fkStatut;
    }

    public function setFkStatut(int $fkStatut): self
    {
        $this->fkStatut = $fkStatut;

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

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

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

    public function getFkProjet(): ?Projet
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?Projet $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

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

    public function getFkUserValid(): ?User
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?User $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }


}
