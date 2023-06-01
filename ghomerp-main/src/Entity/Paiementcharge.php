<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiementcharge
 *
 * @ORM\Table(name="paiementcharge")
 * @ORM\Entity
 */
class Paiementcharge
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
     * @ORM\Column(name="fk_charge", type="integer", nullable=true)
     */
    private $fkCharge;

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
     * @var int
     *
     * @ORM\Column(name="fk_typepaiement", type="integer", nullable=false)
     */
    private $fkTypepaiement;

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

    public function getFkCharge(): ?int
    {
        return $this->fkCharge;
    }

    public function setFkCharge(?int $fkCharge): self
    {
        $this->fkCharge = $fkCharge;

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

    public function getFkTypepaiement(): ?int
    {
        return $this->fkTypepaiement;
    }

    public function setFkTypepaiement(int $fkTypepaiement): self
    {
        $this->fkTypepaiement = $fkTypepaiement;

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
