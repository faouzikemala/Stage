<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CRevenuestamp
 *
 * @ORM\Table(name="c_revenuestamp")
 * @ORM\Entity
 */
class CRevenuestamp
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
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=false)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="revenuestamp_type", type="string", length=16, nullable=false, options={"default"="fixed"})
     */
    private $revenuestampType = 'fixed';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=128, nullable=true)
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkPays(): ?int
    {
        return $this->fkPays;
    }

    public function setFkPays(int $fkPays): self
    {
        $this->fkPays = $fkPays;

        return $this;
    }

    public function getTaux(): ?float
    {
        return $this->taux;
    }

    public function setTaux(float $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getRevenuestampType(): ?string
    {
        return $this->revenuestampType;
    }

    public function setRevenuestampType(string $revenuestampType): self
    {
        $this->revenuestampType = $revenuestampType;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAccountancyCodeSell(): ?string
    {
        return $this->accountancyCodeSell;
    }

    public function setAccountancyCodeSell(?string $accountancyCodeSell): self
    {
        $this->accountancyCodeSell = $accountancyCodeSell;

        return $this;
    }

    public function getAccountancyCodeBuy(): ?string
    {
        return $this->accountancyCodeBuy;
    }

    public function setAccountancyCodeBuy(?string $accountancyCodeBuy): self
    {
        $this->accountancyCodeBuy = $accountancyCodeBuy;

        return $this;
    }


}
