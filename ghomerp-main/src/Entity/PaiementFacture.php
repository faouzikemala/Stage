<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementFacture
 *
 * @ORM\Table(name="paiement_facture", uniqueConstraints={@ORM\UniqueConstraint(name="uk_paiement_facture", columns={"fk_paiement", "fk_facture"})}, indexes={@ORM\Index(name="idx_paiement_facture_fk_paiement", columns={"fk_paiement"}), @ORM\Index(name="idx_paiement_facture_fk_facture", columns={"fk_facture"})})
 * @ORM\Entity
 */
class PaiementFacture
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

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_facture", referencedColumnName="rowid")
     * })
     */
    private $fkFacture;

    /**
     * @var \Paiement
     *
     * @ORM\ManyToOne(targetEntity="Paiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_paiement", referencedColumnName="rowid")
     * })
     */
    private $fkPaiement;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getFkFacture(): ?Facture
    {
        return $this->fkFacture;
    }

    public function setFkFacture(?Facture $fkFacture): self
    {
        $this->fkFacture = $fkFacture;

        return $this;
    }

    public function getFkPaiement(): ?Paiement
    {
        return $this->fkPaiement;
    }

    public function setFkPaiement(?Paiement $fkPaiement): self
    {
        $this->fkPaiement = $fkPaiement;

        return $this;
    }


}
