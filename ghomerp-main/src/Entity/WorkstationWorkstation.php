<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkstationWorkstation
 *
 * @ORM\Table(name="workstation_workstation", indexes={@ORM\Index(name="idx_workstation_workstation_ref", columns={"ref"}), @ORM\Index(name="idx_workstation_workstation_status", columns={"status"}), @ORM\Index(name="idx_workstation_workstation_rowid", columns={"rowid"}), @ORM\Index(name="fk_workstation_workstation_fk_user_creat", columns={"fk_user_creat"})})
 * @ORM\Entity
 */
class WorkstationWorkstation
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
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=7, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

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
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_operators_required", type="integer", nullable=true)
     */
    private $nbOperatorsRequired;

    /**
     * @var float|null
     *
     * @ORM\Column(name="thm_operator_estimated", type="float", precision=10, scale=0, nullable=true)
     */
    private $thmOperatorEstimated;

    /**
     * @var float|null
     *
     * @ORM\Column(name="thm_machine_estimated", type="float", precision=10, scale=0, nullable=true)
     */
    private $thmMachineEstimated;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(?int $entity): self
    {
        $this->entity = $entity;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getNbOperatorsRequired(): ?int
    {
        return $this->nbOperatorsRequired;
    }

    public function setNbOperatorsRequired(?int $nbOperatorsRequired): self
    {
        $this->nbOperatorsRequired = $nbOperatorsRequired;

        return $this;
    }

    public function getThmOperatorEstimated(): ?float
    {
        return $this->thmOperatorEstimated;
    }

    public function setThmOperatorEstimated(?float $thmOperatorEstimated): self
    {
        $this->thmOperatorEstimated = $thmOperatorEstimated;

        return $this;
    }

    public function getThmMachineEstimated(): ?float
    {
        return $this->thmMachineEstimated;
    }

    public function setThmMachineEstimated(?float $thmMachineEstimated): self
    {
        $this->thmMachineEstimated = $thmMachineEstimated;

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
