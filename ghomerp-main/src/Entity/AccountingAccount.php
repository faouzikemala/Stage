<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountingAccount
 *
 * @ORM\Table(name="accounting_account", uniqueConstraints={@ORM\UniqueConstraint(name="uk_accounting_account", columns={"account_number", "entity", "fk_pcg_version"})}, indexes={@ORM\Index(name="idx_accounting_account_fk_pcg_version", columns={"fk_pcg_version"}), @ORM\Index(name="idx_accounting_account_account_parent", columns={"account_parent"})})
 * @ORM\Entity
 */
class AccountingAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="bigint", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="pcg_type", type="string", length=20, nullable=false)
     */
    private $pcgType;

    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=32, nullable=false)
     */
    private $accountNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="account_parent", type="integer", nullable=true)
     */
    private $accountParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="labelshort", type="string", length=255, nullable=true)
     */
    private $labelshort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_accounting_category", type="integer", nullable=true)
     */
    private $fkAccountingCategory = '0';

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
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="reconcilable", type="boolean", nullable=false)
     */
    private $reconcilable = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var \AccountingSystem
     *
     * @ORM\ManyToOne(targetEntity="AccountingSystem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_pcg_version", referencedColumnName="pcg_version")
     * })
     */
    private $fkPcgVersion;

    public function getRowid(): ?string
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

    public function getPcgType(): ?string
    {
        return $this->pcgType;
    }

    public function setPcgType(string $pcgType): self
    {
        $this->pcgType = $pcgType;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getAccountParent(): ?int
    {
        return $this->accountParent;
    }

    public function setAccountParent(?int $accountParent): self
    {
        $this->accountParent = $accountParent;

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

    public function getLabelshort(): ?string
    {
        return $this->labelshort;
    }

    public function setLabelshort(?string $labelshort): self
    {
        $this->labelshort = $labelshort;

        return $this;
    }

    public function getFkAccountingCategory(): ?int
    {
        return $this->fkAccountingCategory;
    }

    public function setFkAccountingCategory(?int $fkAccountingCategory): self
    {
        $this->fkAccountingCategory = $fkAccountingCategory;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getReconcilable(): ?bool
    {
        return $this->reconcilable;
    }

    public function setReconcilable(bool $reconcilable): self
    {
        $this->reconcilable = $reconcilable;

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

    public function getExtraparams(): ?string
    {
        return $this->extraparams;
    }

    public function setExtraparams(?string $extraparams): self
    {
        $this->extraparams = $extraparams;

        return $this;
    }

    public function getFkPcgVersion(): ?AccountingSystem
    {
        return $this->fkPcgVersion;
    }

    public function setFkPcgVersion(?AccountingSystem $fkPcgVersion): self
    {
        $this->fkPcgVersion = $fkPcgVersion;

        return $this;
    }


}
