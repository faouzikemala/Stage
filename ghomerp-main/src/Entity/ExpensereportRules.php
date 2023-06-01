<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpensereportRules
 *
 * @ORM\Table(name="expensereport_rules")
 * @ORM\Entity
 */
class ExpensereportRules
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
     * @var \DateTime
     *
     * @ORM\Column(name="dates", type="datetime", nullable=false)
     */
    private $dates;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datee", type="datetime", nullable=false)
     */
    private $datee;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false)
     */
    private $amount;

    /**
     * @var bool
     *
     * @ORM\Column(name="restrictive", type="boolean", nullable=false)
     */
    private $restrictive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_usergroup", type="integer", nullable=true)
     */
    private $fkUsergroup;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_c_type_fees", type="integer", nullable=false)
     */
    private $fkCTypeFees;

    /**
     * @var string
     *
     * @ORM\Column(name="code_expense_rules_type", type="string", length=50, nullable=false)
     */
    private $codeExpenseRulesType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_for_all", type="boolean", nullable=true)
     */
    private $isForAll = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getDates(): ?\DateTimeInterface
    {
        return $this->dates;
    }

    public function setDates(\DateTimeInterface $dates): self
    {
        $this->dates = $dates;

        return $this;
    }

    public function getDatee(): ?\DateTimeInterface
    {
        return $this->datee;
    }

    public function setDatee(\DateTimeInterface $datee): self
    {
        $this->datee = $datee;

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

    public function getRestrictive(): ?bool
    {
        return $this->restrictive;
    }

    public function setRestrictive(bool $restrictive): self
    {
        $this->restrictive = $restrictive;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getFkUsergroup(): ?int
    {
        return $this->fkUsergroup;
    }

    public function setFkUsergroup(?int $fkUsergroup): self
    {
        $this->fkUsergroup = $fkUsergroup;

        return $this;
    }

    public function getFkCTypeFees(): ?int
    {
        return $this->fkCTypeFees;
    }

    public function setFkCTypeFees(int $fkCTypeFees): self
    {
        $this->fkCTypeFees = $fkCTypeFees;

        return $this;
    }

    public function getCodeExpenseRulesType(): ?string
    {
        return $this->codeExpenseRulesType;
    }

    public function setCodeExpenseRulesType(string $codeExpenseRulesType): self
    {
        $this->codeExpenseRulesType = $codeExpenseRulesType;

        return $this;
    }

    public function getIsForAll(): ?bool
    {
        return $this->isForAll;
    }

    public function setIsForAll(?bool $isForAll): self
    {
        $this->isForAll = $isForAll;

        return $this;
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


}
