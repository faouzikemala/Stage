<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountingGroupsAccount
 *
 * @ORM\Table(name="accounting_groups_account")
 * @ORM\Entity
 */
class AccountingGroupsAccount
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
     * @ORM\Column(name="fk_accounting_account", type="integer", nullable=false)
     */
    private $fkAccountingAccount;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_c_accounting_category", type="integer", nullable=false)
     */
    private $fkCAccountingCategory;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkAccountingAccount(): ?int
    {
        return $this->fkAccountingAccount;
    }

    public function setFkAccountingAccount(int $fkAccountingAccount): self
    {
        $this->fkAccountingAccount = $fkAccountingAccount;

        return $this;
    }

    public function getFkCAccountingCategory(): ?int
    {
        return $this->fkCAccountingCategory;
    }

    public function setFkCAccountingCategory(int $fkCAccountingCategory): self
    {
        $this->fkCAccountingCategory = $fkCAccountingCategory;

        return $this;
    }


}
