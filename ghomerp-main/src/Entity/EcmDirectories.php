<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EcmDirectories
 *
 * @ORM\Table(name="ecm_directories", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ecm_directories", columns={"label", "fk_parent", "entity"})}, indexes={@ORM\Index(name="idx_ecm_directories_fk_user_c", columns={"fk_user_c"}), @ORM\Index(name="idx_ecm_directories_fk_user_m", columns={"fk_user_m"})})
 * @ORM\Entity
 */
class EcmDirectories
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
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=true)
     */
    private $fkParent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="cachenbofdoc", type="integer", nullable=false)
     */
    private $cachenbofdoc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullpath", type="string", length=750, nullable=true)
     */
    private $fullpath;

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

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_c", referencedColumnName="rowid")
     * })
     */
    private $fkUserC;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_m", referencedColumnName="rowid")
     * })
     */
    private $fkUserM;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getFkParent(): ?int
    {
        return $this->fkParent;
    }

    public function setFkParent(?int $fkParent): self
    {
        $this->fkParent = $fkParent;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCachenbofdoc(): ?int
    {
        return $this->cachenbofdoc;
    }

    public function setCachenbofdoc(int $cachenbofdoc): self
    {
        $this->cachenbofdoc = $cachenbofdoc;

        return $this;
    }

    public function getFullpath(): ?string
    {
        return $this->fullpath;
    }

    public function setFullpath(?string $fullpath): self
    {
        $this->fullpath = $fullpath;

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

    public function getFkUserC(): ?User
    {
        return $this->fkUserC;
    }

    public function setFkUserC(?User $fkUserC): self
    {
        $this->fkUserC = $fkUserC;

        return $this;
    }

    public function getFkUserM(): ?User
    {
        return $this->fkUserM;
    }

    public function setFkUserM(?User $fkUserM): self
    {
        $this->fkUserM = $fkUserM;

        return $this;
    }


}
