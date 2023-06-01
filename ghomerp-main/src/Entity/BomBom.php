<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BomBom
 *
 * @ORM\Table(name="bom_bom", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bom_bom_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_bom_bom_ref", columns={"ref"}), @ORM\Index(name="idx_bom_bom_status", columns={"status"}), @ORM\Index(name="bom_bom_fk_user_creat", columns={"fk_user_creat"}), @ORM\Index(name="idx_bom_bom_fk_product", columns={"fk_product"}), @ORM\Index(name="idx_bom_bom_rowid", columns={"rowid"})})
 * @ORM\Entity
 */
class BomBom
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
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bomtype", type="integer", nullable=true)
     */
    private $bomtype = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=24, scale=8, nullable=true)
     */
    private $qty;

    /**
     * @var float|null
     *
     * @ORM\Column(name="efficiency", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $efficiency = 1.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="duration", type="float", precision=24, scale=8, nullable=true)
     */
    private $duration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

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

    public function getBomtype(): ?int
    {
        return $this->bomtype;
    }

    public function setBomtype(?int $bomtype): self
    {
        $this->bomtype = $bomtype;

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

    public function getFkProduct(): ?int
    {
        return $this->fkProduct;
    }

    public function setFkProduct(?int $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

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

    public function getFkWarehouse(): ?int
    {
        return $this->fkWarehouse;
    }

    public function setFkWarehouse(?int $fkWarehouse): self
    {
        $this->fkWarehouse = $fkWarehouse;

        return $this;
    }

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(?float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getEfficiency(): ?float
    {
        return $this->efficiency;
    }

    public function setEfficiency(?float $efficiency): self
    {
        $this->efficiency = $efficiency;

        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;

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

    public function getDateValid(): ?\DateTimeInterface
    {
        return $this->dateValid;
    }

    public function setDateValid(?\DateTimeInterface $dateValid): self
    {
        $this->dateValid = $dateValid;

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
