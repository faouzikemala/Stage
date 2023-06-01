<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table(name="subscription", uniqueConstraints={@ORM\UniqueConstraint(name="uk_subscription", columns={"fk_adherent", "dateadh"})})
 * @ORM\Entity
 */
class Subscription
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
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_adherent", type="integer", nullable=true)
     */
    private $fkAdherent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=true)
     */
    private $fkType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateadh", type="datetime", nullable=true)
     */
    private $dateadh;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datef", type="datetime", nullable=true)
     */
    private $datef;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subscription", type="float", precision=24, scale=8, nullable=true)
     */
    private $subscription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
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
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getFkAdherent(): ?int
    {
        return $this->fkAdherent;
    }

    public function setFkAdherent(?int $fkAdherent): self
    {
        $this->fkAdherent = $fkAdherent;

        return $this;
    }

    public function getFkType(): ?int
    {
        return $this->fkType;
    }

    public function setFkType(?int $fkType): self
    {
        $this->fkType = $fkType;

        return $this;
    }

    public function getDateadh(): ?\DateTimeInterface
    {
        return $this->dateadh;
    }

    public function setDateadh(?\DateTimeInterface $dateadh): self
    {
        $this->dateadh = $dateadh;

        return $this;
    }

    public function getDatef(): ?\DateTimeInterface
    {
        return $this->datef;
    }

    public function setDatef(?\DateTimeInterface $datef): self
    {
        $this->datef = $datef;

        return $this;
    }

    public function getSubscription(): ?float
    {
        return $this->subscription;
    }

    public function setSubscription(?float $subscription): self
    {
        $this->subscription = $subscription;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserValid(): ?int
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?int $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

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


}
