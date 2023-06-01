<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTicketCategory
 *
 * @ORM\Table(name="c_ticket_category", uniqueConstraints={@ORM\UniqueConstraint(name="uk_code", columns={"code", "entity"})})
 * @ORM\Entity
 */
class CTicketCategory
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
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="public", type="integer", nullable=true)
     */
    private $public = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="use_default", type="integer", nullable=true, options={"default"="1"})
     */
    private $useDefault = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=false)
     */
    private $fkParent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="force_severity", type="string", length=32, nullable=true)
     */
    private $forceSeverity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true, options={"default"="1"})
     */
    private $active = 1;

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

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

    public function getPublic(): ?int
    {
        return $this->public;
    }

    public function setPublic(?int $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getUseDefault(): ?int
    {
        return $this->useDefault;
    }

    public function setUseDefault(?int $useDefault): self
    {
        $this->useDefault = $useDefault;

        return $this;
    }

    public function getFkParent(): ?int
    {
        return $this->fkParent;
    }

    public function setFkParent(int $fkParent): self
    {
        $this->fkParent = $fkParent;

        return $this;
    }

    public function getForceSeverity(): ?string
    {
        return $this->forceSeverity;
    }

    public function setForceSeverity(?string $forceSeverity): self
    {
        $this->forceSeverity = $forceSeverity;

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

    public function getPos(): ?int
    {
        return $this->pos;
    }

    public function setPos(int $pos): self
    {
        $this->pos = $pos;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
