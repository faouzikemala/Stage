<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BudgetLines
 *
 * @ORM\Table(name="budget_lines", uniqueConstraints={@ORM\UniqueConstraint(name="uk_budget_lines", columns={"fk_budget", "fk_project_ids"})}, indexes={@ORM\Index(name="IDX_24101960535C9FEB", columns={"fk_budget"})})
 * @ORM\Entity
 */
class BudgetLines
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
     * @ORM\Column(name="fk_project_ids", type="string", length=180, nullable=false)
     */
    private $fkProjectIds;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false)
     */
    private $amount;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_key", type="integer", nullable=true)
     */
    private $importKey;

    /**
     * @var \Budget
     *
     * @ORM\ManyToOne(targetEntity="Budget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_budget", referencedColumnName="rowid")
     * })
     */
    private $fkBudget;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProjectIds(): ?string
    {
        return $this->fkProjectIds;
    }

    public function setFkProjectIds(string $fkProjectIds): self
    {
        $this->fkProjectIds = $fkProjectIds;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

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

    public function getImportKey(): ?int
    {
        return $this->importKey;
    }

    public function setImportKey(?int $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }

    public function getFkBudget(): ?Budget
    {
        return $this->fkBudget;
    }

    public function setFkBudget(?Budget $fkBudget): self
    {
        $this->fkBudget = $fkBudget;

        return $this;
    }


}
