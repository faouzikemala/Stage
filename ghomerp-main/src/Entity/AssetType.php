<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetType
 *
 * @ORM\Table(name="asset_type", uniqueConstraints={@ORM\UniqueConstraint(name="uk_asset_type_label", columns={"label", "entity"})})
 * @ORM\Entity
 */
class AssetType
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_asset", type="string", length=32, nullable=true)
     */
    private $accountancyCodeAsset;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_depreciation_asset", type="string", length=32, nullable=true)
     */
    private $accountancyCodeDepreciationAsset;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_depreciation_expense", type="string", length=32, nullable=true)
     */
    private $accountancyCodeDepreciationExpense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

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

    public function getAccountancyCodeAsset(): ?string
    {
        return $this->accountancyCodeAsset;
    }

    public function setAccountancyCodeAsset(?string $accountancyCodeAsset): self
    {
        $this->accountancyCodeAsset = $accountancyCodeAsset;

        return $this;
    }

    public function getAccountancyCodeDepreciationAsset(): ?string
    {
        return $this->accountancyCodeDepreciationAsset;
    }

    public function setAccountancyCodeDepreciationAsset(?string $accountancyCodeDepreciationAsset): self
    {
        $this->accountancyCodeDepreciationAsset = $accountancyCodeDepreciationAsset;

        return $this;
    }

    public function getAccountancyCodeDepreciationExpense(): ?string
    {
        return $this->accountancyCodeDepreciationExpense;
    }

    public function setAccountancyCodeDepreciationExpense(?string $accountancyCodeDepreciationExpense): self
    {
        $this->accountancyCodeDepreciationExpense = $accountancyCodeDepreciationExpense;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }


}
