<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentLoan
 *
 * @ORM\Table(name="payment_loan")
 * @ORM\Entity
 */
class PaymentLoan
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
     * @ORM\Column(name="fk_loan", type="integer", nullable=true)
     */
    private $fkLoan;

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
     * @ORM\Column(name="amount_capital", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountCapital = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_insurance", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountInsurance = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount_interest", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amountInterest = 0.00000000;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_typepayment", type="integer", nullable=false)
     */
    private $fkTypepayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_payment", type="string", length=50, nullable=true)
     */
    private $numPayment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=false)
     */
    private $fkBank;

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

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkLoan(): ?int
    {
        return $this->fkLoan;
    }

    public function setFkLoan(?int $fkLoan): self
    {
        $this->fkLoan = $fkLoan;

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

    public function getAmountCapital(): ?float
    {
        return $this->amountCapital;
    }

    public function setAmountCapital(?float $amountCapital): self
    {
        $this->amountCapital = $amountCapital;

        return $this;
    }

    public function getAmountInsurance(): ?float
    {
        return $this->amountInsurance;
    }

    public function setAmountInsurance(?float $amountInsurance): self
    {
        $this->amountInsurance = $amountInsurance;

        return $this;
    }

    public function getAmountInterest(): ?float
    {
        return $this->amountInterest;
    }

    public function setAmountInterest(?float $amountInterest): self
    {
        $this->amountInterest = $amountInterest;

        return $this;
    }

    public function getFkTypepayment(): ?int
    {
        return $this->fkTypepayment;
    }

    public function setFkTypepayment(int $fkTypepayment): self
    {
        $this->fkTypepayment = $fkTypepayment;

        return $this;
    }

    public function getNumPayment(): ?string
    {
        return $this->numPayment;
    }

    public function setNumPayment(?string $numPayment): self
    {
        $this->numPayment = $numPayment;

        return $this;
    }

    public function getNotePrivate(): ?string
    {
        return $this->notePrivate;
    }

    public function setNotePrivate(?string $notePrivate): self
    {
        $this->notePrivate = $notePrivate;

        return $this;
    }

    public function getNotePublic(): ?string
    {
        return $this->notePublic;
    }

    public function setNotePublic(?string $notePublic): self
    {
        $this->notePublic = $notePublic;

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


}
