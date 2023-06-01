<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocieteRib
 *
 * @ORM\Table(name="societe_rib", uniqueConstraints={@ORM\UniqueConstraint(name="uk_societe_rib", columns={"label", "fk_soc"})}, indexes={@ORM\Index(name="societe_rib_fk_societe", columns={"fk_soc"})})
 * @ORM\Entity
 */
class SocieteRib
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
     * @ORM\Column(name="type", type="string", length=32, nullable=false, options={"default"="ban"})
     */
    private $type = 'ban';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=true)
     */
    private $label;

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
     * @var string|null
     *
     * @ORM\Column(name="bank", type="string", length=255, nullable=true)
     */
    private $bank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_banque", type="string", length=128, nullable=true)
     */
    private $codeBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_guichet", type="string", length=6, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_rib", type="string", length=5, nullable=true)
     */
    private $cleRib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bic", type="string", length=20, nullable=true)
     */
    private $bic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iban_prefix", type="string", length=34, nullable=true)
     */
    private $ibanPrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domiciliation", type="string", length=255, nullable=true)
     */
    private $domiciliation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proprio", type="string", length=60, nullable=true)
     */
    private $proprio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner_address", type="string", length=255, nullable=true)
     */
    private $ownerAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="default_rib", type="smallint", nullable=false)
     */
    private $defaultRib = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rum", type="string", length=32, nullable=true)
     */
    private $rum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rum", type="date", nullable=true)
     */
    private $dateRum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="frstrecur", type="string", length=16, nullable=true, options={"default"="FRST"})
     */
    private $frstrecur = 'FRST';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_four", type="string", length=4, nullable=true)
     */
    private $lastFour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_type", type="string", length=255, nullable=true)
     */
    private $cardType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cvn", type="string", length=255, nullable=true)
     */
    private $cvn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_date_month", type="integer", nullable=true)
     */
    private $expDateMonth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_date_year", type="integer", nullable=true)
     */
    private $expDateYear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=10, nullable=true)
     */
    private $countryCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="approved", type="integer", nullable=true)
     */
    private $approved = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ending_date", type="date", nullable=true)
     */
    private $endingDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="max_total_amount_of_all_payments", type="float", precision=24, scale=8, nullable=true)
     */
    private $maxTotalAmountOfAllPayments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preapproval_key", type="string", length=255, nullable=true)
     */
    private $preapprovalKey;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="starting_date", type="date", nullable=true)
     */
    private $startingDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_amount_of_all_payments", type="float", precision=24, scale=8, nullable=true)
     */
    private $totalAmountOfAllPayments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_card_ref", type="string", length=128, nullable=true)
     */
    private $stripeCardRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stripe_account", type="string", length=128, nullable=true)
     */
    private $stripeAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ipaddress", type="string", length=68, nullable=true)
     */
    private $ipaddress;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

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

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getCodeBanque(): ?string
    {
        return $this->codeBanque;
    }

    public function setCodeBanque(?string $codeBanque): self
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    public function getCodeGuichet(): ?string
    {
        return $this->codeGuichet;
    }

    public function setCodeGuichet(?string $codeGuichet): self
    {
        $this->codeGuichet = $codeGuichet;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getCleRib(): ?string
    {
        return $this->cleRib;
    }

    public function setCleRib(?string $cleRib): self
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getIbanPrefix(): ?string
    {
        return $this->ibanPrefix;
    }

    public function setIbanPrefix(?string $ibanPrefix): self
    {
        $this->ibanPrefix = $ibanPrefix;

        return $this;
    }

    public function getDomiciliation(): ?string
    {
        return $this->domiciliation;
    }

    public function setDomiciliation(?string $domiciliation): self
    {
        $this->domiciliation = $domiciliation;

        return $this;
    }

    public function getProprio(): ?string
    {
        return $this->proprio;
    }

    public function setProprio(?string $proprio): self
    {
        $this->proprio = $proprio;

        return $this;
    }

    public function getOwnerAddress(): ?string
    {
        return $this->ownerAddress;
    }

    public function setOwnerAddress(?string $ownerAddress): self
    {
        $this->ownerAddress = $ownerAddress;

        return $this;
    }

    public function getDefaultRib(): ?int
    {
        return $this->defaultRib;
    }

    public function setDefaultRib(int $defaultRib): self
    {
        $this->defaultRib = $defaultRib;

        return $this;
    }

    public function getRum(): ?string
    {
        return $this->rum;
    }

    public function setRum(?string $rum): self
    {
        $this->rum = $rum;

        return $this;
    }

    public function getDateRum(): ?\DateTimeInterface
    {
        return $this->dateRum;
    }

    public function setDateRum(?\DateTimeInterface $dateRum): self
    {
        $this->dateRum = $dateRum;

        return $this;
    }

    public function getFrstrecur(): ?string
    {
        return $this->frstrecur;
    }

    public function setFrstrecur(?string $frstrecur): self
    {
        $this->frstrecur = $frstrecur;

        return $this;
    }

    public function getLastFour(): ?string
    {
        return $this->lastFour;
    }

    public function setLastFour(?string $lastFour): self
    {
        $this->lastFour = $lastFour;

        return $this;
    }

    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    public function setCardType(?string $cardType): self
    {
        $this->cardType = $cardType;

        return $this;
    }

    public function getCvn(): ?string
    {
        return $this->cvn;
    }

    public function setCvn(?string $cvn): self
    {
        $this->cvn = $cvn;

        return $this;
    }

    public function getExpDateMonth(): ?int
    {
        return $this->expDateMonth;
    }

    public function setExpDateMonth(?int $expDateMonth): self
    {
        $this->expDateMonth = $expDateMonth;

        return $this;
    }

    public function getExpDateYear(): ?int
    {
        return $this->expDateYear;
    }

    public function setExpDateYear(?int $expDateYear): self
    {
        $this->expDateYear = $expDateYear;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getApproved(): ?int
    {
        return $this->approved;
    }

    public function setApproved(?int $approved): self
    {
        $this->approved = $approved;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEndingDate(): ?\DateTimeInterface
    {
        return $this->endingDate;
    }

    public function setEndingDate(?\DateTimeInterface $endingDate): self
    {
        $this->endingDate = $endingDate;

        return $this;
    }

    public function getMaxTotalAmountOfAllPayments(): ?float
    {
        return $this->maxTotalAmountOfAllPayments;
    }

    public function setMaxTotalAmountOfAllPayments(?float $maxTotalAmountOfAllPayments): self
    {
        $this->maxTotalAmountOfAllPayments = $maxTotalAmountOfAllPayments;

        return $this;
    }

    public function getPreapprovalKey(): ?string
    {
        return $this->preapprovalKey;
    }

    public function setPreapprovalKey(?string $preapprovalKey): self
    {
        $this->preapprovalKey = $preapprovalKey;

        return $this;
    }

    public function getStartingDate(): ?\DateTimeInterface
    {
        return $this->startingDate;
    }

    public function setStartingDate(?\DateTimeInterface $startingDate): self
    {
        $this->startingDate = $startingDate;

        return $this;
    }

    public function getTotalAmountOfAllPayments(): ?float
    {
        return $this->totalAmountOfAllPayments;
    }

    public function setTotalAmountOfAllPayments(?float $totalAmountOfAllPayments): self
    {
        $this->totalAmountOfAllPayments = $totalAmountOfAllPayments;

        return $this;
    }

    public function getStripeCardRef(): ?string
    {
        return $this->stripeCardRef;
    }

    public function setStripeCardRef(?string $stripeCardRef): self
    {
        $this->stripeCardRef = $stripeCardRef;

        return $this;
    }

    public function getStripeAccount(): ?string
    {
        return $this->stripeAccount;
    }

    public function setStripeAccount(?string $stripeAccount): self
    {
        $this->stripeAccount = $stripeAccount;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getIpaddress(): ?string
    {
        return $this->ipaddress;
    }

    public function setIpaddress(?string $ipaddress): self
    {
        $this->ipaddress = $ipaddress;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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

    public function getFkSoc(): ?Societe
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?Societe $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
    }


}
