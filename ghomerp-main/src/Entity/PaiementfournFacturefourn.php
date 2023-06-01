<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementfournFacturefourn
 *
 * @ORM\Table(name="paiementfourn_facturefourn", uniqueConstraints={@ORM\UniqueConstraint(name="uk_paiementfourn_facturefourn", columns={"fk_paiementfourn", "fk_facturefourn"})}, indexes={@ORM\Index(name="idx_paiementfourn_facturefourn_fk_paiement", columns={"fk_paiementfourn"}), @ORM\Index(name="idx_paiementfourn_facturefourn_fk_facture", columns={"fk_facturefourn"})})
 * @ORM\Entity
 */
class PaiementfournFacturefourn
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
     * @ORM\Column(name="fk_paiementfourn", type="integer", nullable=true)
     */
    private $fkPaiementfourn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facturefourn", type="integer", nullable=true)
     */
    private $fkFacturefourn;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_tx", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $multicurrencyTx = 1.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyAmount = 0.00000000;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkPaiementfourn(): ?int
    {
        return $this->fkPaiementfourn;
    }

    public function setFkPaiementfourn(?int $fkPaiementfourn): self
    {
        $this->fkPaiementfourn = $fkPaiementfourn;

        return $this;
    }

    public function getFkFacturefourn(): ?int
    {
        return $this->fkFacturefourn;
    }

    public function setFkFacturefourn(?int $fkFacturefourn): self
    {
        $this->fkFacturefourn = $fkFacturefourn;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getMulticurrencyCode(): ?string
    {
        return $this->multicurrencyCode;
    }

    public function setMulticurrencyCode(?string $multicurrencyCode): self
    {
        $this->multicurrencyCode = $multicurrencyCode;

        return $this;
    }

    public function getMulticurrencyTx(): ?float
    {
        return $this->multicurrencyTx;
    }

    public function setMulticurrencyTx(?float $multicurrencyTx): self
    {
        $this->multicurrencyTx = $multicurrencyTx;

        return $this;
    }

    public function getMulticurrencyAmount(): ?float
    {
        return $this->multicurrencyAmount;
    }

    public function setMulticurrencyAmount(?float $multicurrencyAmount): self
    {
        $this->multicurrencyAmount = $multicurrencyAmount;

        return $this;
    }


}
