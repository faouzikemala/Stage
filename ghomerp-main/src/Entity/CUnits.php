<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CUnits
 *
 * @ORM\Table(name="c_units", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_units_code", columns={"code"})})
 * @ORM\Entity
 */
class CUnits
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
     * @ORM\Column(name="code", type="string", length=3, nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scale", type="integer", nullable=true)
     */
    private $scale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_label", type="string", length=5, nullable=true)
     */
    private $shortLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_type", type="string", length=10, nullable=true)
     */
    private $unitType;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getScale(): ?int
    {
        return $this->scale;
    }

    public function setScale(?int $scale): self
    {
        $this->scale = $scale;

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

    public function getShortLabel(): ?string
    {
        return $this->shortLabel;
    }

    public function setShortLabel(?string $shortLabel): self
    {
        $this->shortLabel = $shortLabel;

        return $this;
    }

    public function getUnitType(): ?string
    {
        return $this->unitType;
    }

    public function setUnitType(?string $unitType): self
    {
        $this->unitType = $unitType;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }


}
