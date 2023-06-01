<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcmFiles
 *
 * @ORM\Table(name="ecm_files", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ecm_files", columns={"filepath", "filename", "entity"})}, indexes={@ORM\Index(name="idx_ecm_files_label", columns={"label"})})
 * @ORM\Entity
 */
class EcmFiles
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
     * @ORM\Column(name="ref", type="string", length=128, nullable=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="share", type="string", length=128, nullable=true)
     */
    private $share;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="src_object_type", type="string", length=64, nullable=true)
     */
    private $srcObjectType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="src_object_id", type="integer", nullable=true)
     */
    private $srcObjectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullpath_orig", type="string", length=750, nullable=true)
     */
    private $fullpathOrig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=750, nullable=true)
     */
    private $keywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover", type="text", length=65535, nullable=true)
     */
    private $cover;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gen_or_uploaded", type="string", length=12, nullable=true)
     */
    private $genOrUploaded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_c", type="datetime", nullable=true)
     */
    private $dateC;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_c", type="integer", nullable=true)
     */
    private $fkUserC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_m", type="integer", nullable=true)
     */
    private $fkUserM;

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
     * @ORM\Column(name="acl", type="text", length=65535, nullable=true)
     */
    private $acl;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getShare(): ?string
    {
        return $this->share;
    }

    public function setShare(?string $share): self
    {
        $this->share = $share;

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

    public function getFilepath(): ?string
    {
        return $this->filepath;
    }

    public function setFilepath(string $filepath): self
    {
        $this->filepath = $filepath;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getSrcObjectType(): ?string
    {
        return $this->srcObjectType;
    }

    public function setSrcObjectType(?string $srcObjectType): self
    {
        $this->srcObjectType = $srcObjectType;

        return $this;
    }

    public function getSrcObjectId(): ?int
    {
        return $this->srcObjectId;
    }

    public function setSrcObjectId(?int $srcObjectId): self
    {
        $this->srcObjectId = $srcObjectId;

        return $this;
    }

    public function getFullpathOrig(): ?string
    {
        return $this->fullpathOrig;
    }

    public function setFullpathOrig(?string $fullpathOrig): self
    {
        $this->fullpathOrig = $fullpathOrig;

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

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(?string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getGenOrUploaded(): ?string
    {
        return $this->genOrUploaded;
    }

    public function setGenOrUploaded(?string $genOrUploaded): self
    {
        $this->genOrUploaded = $genOrUploaded;

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

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->dateC;
    }

    public function setDateC(?\DateTimeInterface $dateC): self
    {
        $this->dateC = $dateC;

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

    public function getFkUserC(): ?int
    {
        return $this->fkUserC;
    }

    public function setFkUserC(?int $fkUserC): self
    {
        $this->fkUserC = $fkUserC;

        return $this;
    }

    public function getFkUserM(): ?int
    {
        return $this->fkUserM;
    }

    public function setFkUserM(?int $fkUserM): self
    {
        $this->fkUserM = $fkUserM;

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

    public function getAcl(): ?string
    {
        return $this->acl;
    }

    public function setAcl(?string $acl): self
    {
        $this->acl = $acl;

        return $this;
    }


}
