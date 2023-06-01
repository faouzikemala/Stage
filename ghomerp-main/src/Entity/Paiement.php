<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity
 */
class Paiement
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
     * @ORM\Column(name="ref", type="string", length=30, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep", type="datetime", nullable=true)
     */
    private $datep;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyAmount = 0.00000000;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_paiement", type="integer", nullable=false)
     */
    private $fkPaiement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_paiement", type="string", length=50, nullable=true)
     */
    private $numPaiement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_payment_id", type="string", length=128, nullable=true)
     */
    private $extPaymentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_payment_site", type="string", length=128, nullable=true)
     */
    private $extPaymentSite;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=false)
     */
    private $fkBank = '0';

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
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_export_compta", type="integer", nullable=false)
     */
    private $fkExportCompta = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="pos_change", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $posChange = 0.00000000;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getRefExt(): ?string
    {
        return $this->refExt;
    }

    public function setRefExt(?string $refExt): self
    {
        $this->refExt = $refExt;

        return $this;
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

    public function getDatep(): ?\DateTimeInterface
    {
        return $this->datep;
    }

    public function setDatep(?\DateTimeInterface $datep): self
    {
        $this->datep = $datep;

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

    public function getMulticurrencyAmount(): ?float
    {
        return $this->multicurrencyAmount;
    }

    public function setMulticurrencyAmount(?float $multicurrencyAmount): self
    {
        $this->multicurrencyAmount = $multicurrencyAmount;

        return $this;
    }

    public function getFkPaiement(): ?int
    {
        return $this->fkPaiement;
    }

    public function setFkPaiement(int $fkPaiement): self
    {
        $this->fkPaiement = $fkPaiement;

        return $this;
    }

    public function getNumPaiement(): ?string
    {
        return $this->numPaiement;
    }

    public function setNumPaiement(?string $numPaiement): self
    {
        $this->numPaiement = $numPaiement;

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

    public function getExtPaymentId(): ?string
    {
        return $this->extPaymentId;
    }

    public function setExtPaymentId(?string $extPaymentId): self
    {
        $this->extPaymentId = $extPaymentId;

        return $this;
    }

    public function getExtPaymentSite(): ?string
    {
        return $this->extPaymentSite;
    }

    public function setExtPaymentSite(?string $extPaymentSite): self
    {
        $this->extPaymentSite = $extPaymentSite;

        return $this;
    }

    public function getFkBank(): ?int
    {
        return $this->fkBank;
    }

    public function setFkBank(int $fkBank): self
    {
        $this->fkBank = $fkBank;

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

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getFkExportCompta(): ?int
    {
        return $this->fkExportCompta;
    }

    public function setFkExportCompta(int $fkExportCompta): self
    {
        $this->fkExportCompta = $fkExportCompta;

        return $this;
    }

    public function getPosChange(): ?float
    {
        return $this->posChange;
    }

    public function setPosChange(?float $posChange): self
    {
        $this->posChange = $posChange;

        return $this;
    }


}
