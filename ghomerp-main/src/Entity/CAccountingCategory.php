<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CAccountingCategory
 * @ApiResource()
 * @ORM\Table(name="c_accounting_category", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_accounting_category", columns={"code", "entity"})})
 * @ORM\Entity
 */
class CAccountingCategory
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
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="range_account", type="string", length=255, nullable=false)
     */
    private $rangeAccount;

    /**
     * @var bool
     *
     * @ORM\Column(name="sens", type="boolean", nullable=false)
     */
    private $sens = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="category_type", type="boolean", nullable=false)
     */
    private $categoryType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=255, nullable=false)
     */
    private $formula;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry;

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

    public function setEntity(int $entity): self
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

    public function getRangeAccount(): ?string
    {
        return $this->rangeAccount;
    }

    public function setRangeAccount(string $rangeAccount): self
    {
        $this->rangeAccount = $rangeAccount;

        return $this;
    }

    public function getSens(): ?bool
    {
        return $this->sens;
    }

    public function setSens(bool $sens): self
    {
        $this->sens = $sens;

        return $this;
    }

    public function getCategoryType(): ?bool
    {
        return $this->categoryType;
    }

    public function setCategoryType(bool $categoryType): self
    {
        $this->categoryType = $categoryType;

        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): self
    {
        $this->formula = $formula;

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

    public function getFkCountry(): ?int
    {
        return $this->fkCountry;
    }

    public function setFkCountry(?int $fkCountry): self
    {
        $this->fkCountry = $fkCountry;

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
