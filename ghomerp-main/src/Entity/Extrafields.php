<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extrafields
 *
 * @ORM\Table(name="extrafields", uniqueConstraints={@ORM\UniqueConstraint(name="uk_extrafields_name", columns={"name", "entity", "elementtype"})})
 * @ORM\Entity
 */
class Extrafields
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="elementtype", type="string", length=64, nullable=false, options={"default"="member"})
     */
    private $elementtype = 'member';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=8, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="size", type="string", length=8, nullable=true)
     */
    private $size;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fieldcomputed", type="text", length=65535, nullable=true)
     */
    private $fieldcomputed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fielddefault", type="string", length=255, nullable=true)
     */
    private $fielddefault;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fieldunique", type="integer", nullable=true)
     */
    private $fieldunique = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fieldrequired", type="integer", nullable=true)
     */
    private $fieldrequired = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="perms", type="string", length=255, nullable=true)
     */
    private $perms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enabled", type="string", length=255, nullable=true)
     */
    private $enabled;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pos", type="integer", nullable=true)
     */
    private $pos = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="alwayseditable", type="integer", nullable=true)
     */
    private $alwayseditable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="param", type="text", length=65535, nullable=true)
     */
    private $param;

    /**
     * @var string|null
     *
     * @ORM\Column(name="list", type="string", length=255, nullable=true, options={"default"="1"})
     */
    private $list = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="printable", type="integer", nullable=true)
     */
    private $printable = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="totalizable", type="boolean", nullable=true)
     */
    private $totalizable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="langs", type="string", length=64, nullable=true)
     */
    private $langs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help", type="text", length=65535, nullable=true)
     */
    private $help;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

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

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getElementtype(): ?string
    {
        return $this->elementtype;
    }

    public function setElementtype(string $elementtype): self
    {
        $this->elementtype = $elementtype;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getFieldcomputed(): ?string
    {
        return $this->fieldcomputed;
    }

    public function setFieldcomputed(?string $fieldcomputed): self
    {
        $this->fieldcomputed = $fieldcomputed;

        return $this;
    }

    public function getFielddefault(): ?string
    {
        return $this->fielddefault;
    }

    public function setFielddefault(?string $fielddefault): self
    {
        $this->fielddefault = $fielddefault;

        return $this;
    }

    public function getFieldunique(): ?int
    {
        return $this->fieldunique;
    }

    public function setFieldunique(?int $fieldunique): self
    {
        $this->fieldunique = $fieldunique;

        return $this;
    }

    public function getFieldrequired(): ?int
    {
        return $this->fieldrequired;
    }

    public function setFieldrequired(?int $fieldrequired): self
    {
        $this->fieldrequired = $fieldrequired;

        return $this;
    }

    public function getPerms(): ?string
    {
        return $this->perms;
    }

    public function setPerms(?string $perms): self
    {
        $this->perms = $perms;

        return $this;
    }

    public function getEnabled(): ?string
    {
        return $this->enabled;
    }

    public function setEnabled(?string $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getPos(): ?int
    {
        return $this->pos;
    }

    public function setPos(?int $pos): self
    {
        $this->pos = $pos;

        return $this;
    }

    public function getAlwayseditable(): ?int
    {
        return $this->alwayseditable;
    }

    public function setAlwayseditable(?int $alwayseditable): self
    {
        $this->alwayseditable = $alwayseditable;

        return $this;
    }

    public function getParam(): ?string
    {
        return $this->param;
    }

    public function setParam(?string $param): self
    {
        $this->param = $param;

        return $this;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(?string $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function getPrintable(): ?int
    {
        return $this->printable;
    }

    public function setPrintable(?int $printable): self
    {
        $this->printable = $printable;

        return $this;
    }

    public function getTotalizable(): ?bool
    {
        return $this->totalizable;
    }

    public function setTotalizable(?bool $totalizable): self
    {
        $this->totalizable = $totalizable;

        return $this;
    }

    public function getLangs(): ?string
    {
        return $this->langs;
    }

    public function setLangs(?string $langs): self
    {
        $this->langs = $langs;

        return $this;
    }

    public function getHelp(): ?string
    {
        return $this->help;
    }

    public function setHelp(?string $help): self
    {
        $this->help = $help;

        return $this;
    }

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

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


}
