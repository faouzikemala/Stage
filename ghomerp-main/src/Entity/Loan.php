<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loan
 *
 * @ORM\Table(name="loan")
 * @ORM\Entity
 */
class Loan
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
     * @ORM\Column(name="label", type="string", length=80, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
     */
    private $fkBank;

    /**
     * @var float
     *
     * @ORM\Column(name="capital", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $capital = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="insurance_amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $insuranceAmount = 0.00000000;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datestart", type="date", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateend", type="date", nullable=true)
     */
    private $dateend;

    /**
     * @var float|null
     *
     * @ORM\Column(name="nbterm", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbterm;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate;

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
     * @var float|null
     *
     * @ORM\Column(name="capital_position", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $capitalPosition = 0.00000000;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_position", type="date", nullable=true)
     */
    private $datePosition;

    /**
     * @var int
     *
     * @ORM\Column(name="paid", type="smallint", nullable=false)
     */
    private $paid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_account_capital", type="string", length=32, nullable=true)
     */
    private $accountancyAccountCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_account_insurance", type="string", length=32, nullable=true)
     */
    private $accountancyAccountInsurance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_account_interest", type="string", length=32, nullable=true)
     */
    private $accountancyAccountInterest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getFkBank(): ?int
    {
        return $this->fkBank;
    }

    public function setFkBank(?int $fkBank): self
    {
        $this->fkBank = $fkBank;

        return $this;
    }

    public function getCapital(): ?float
    {
        return $this->capital;
    }

    public function setCapital(float $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getInsuranceAmount(): ?float
    {
        return $this->insuranceAmount;
    }

    public function setInsuranceAmount(?float $insuranceAmount): self
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    public function getDatestart(): ?\DateTimeInterface
    {
        return $this->datestart;
    }

    public function setDatestart(?\DateTimeInterface $datestart): self
    {
        $this->datestart = $datestart;

        return $this;
    }

    public function getDateend(): ?\DateTimeInterface
    {
        return $this->dateend;
    }

    public function setDateend(?\DateTimeInterface $dateend): self
    {
        $this->dateend = $dateend;

        return $this;
    }

    public function getNbterm(): ?float
    {
        return $this->nbterm;
    }

    public function setNbterm(?float $nbterm): self
    {
        $this->nbterm = $nbterm;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

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

    public function getCapitalPosition(): ?float
    {
        return $this->capitalPosition;
    }

    public function setCapitalPosition(?float $capitalPosition): self
    {
        $this->capitalPosition = $capitalPosition;

        return $this;
    }

    public function getDatePosition(): ?\DateTimeInterface
    {
        return $this->datePosition;
    }

    public function setDatePosition(?\DateTimeInterface $datePosition): self
    {
        $this->datePosition = $datePosition;

        return $this;
    }

    public function getPaid(): ?int
    {
        return $this->paid;
    }

    public function setPaid(int $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    public function getAccountancyAccountCapital(): ?string
    {
        return $this->accountancyAccountCapital;
    }

    public function setAccountancyAccountCapital(?string $accountancyAccountCapital): self
    {
        $this->accountancyAccountCapital = $accountancyAccountCapital;

        return $this;
    }

    public function getAccountancyAccountInsurance(): ?string
    {
        return $this->accountancyAccountInsurance;
    }

    public function setAccountancyAccountInsurance(?string $accountancyAccountInsurance): self
    {
        $this->accountancyAccountInsurance = $accountancyAccountInsurance;

        return $this;
    }

    public function getAccountancyAccountInterest(): ?string
    {
        return $this->accountancyAccountInterest;
    }

    public function setAccountancyAccountInterest(?string $accountancyAccountInterest): self
    {
        $this->accountancyAccountInterest = $accountancyAccountInterest;

        return $this;
    }

    public function getFkProjet(): ?int
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?int $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

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


}
