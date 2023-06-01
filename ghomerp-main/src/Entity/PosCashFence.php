<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosCashFence
 *
 * @ORM\Table(name="pos_cash_fence")
 * @ORM\Entity
 */
class PosCashFence
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
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=64, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var float|null
     *
     * @ORM\Column(name="opening", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $opening = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cash", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $cash = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="card", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $card = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cheque", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $cheque = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_close", type="integer", nullable=true)
     */
    private $dayClose;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_close", type="integer", nullable=true)
     */
    private $monthClose;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year_close", type="integer", nullable=true)
     */
    private $yearClose;

    /**
     * @var string|null
     *
     * @ORM\Column(name="posmodule", type="string", length=30, nullable=true)
     */
    private $posmodule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="posnumber", type="string", length=30, nullable=true)
     */
    private $posnumber;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

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

    public function getOpening(): ?float
    {
        return $this->opening;
    }

    public function setOpening(?float $opening): self
    {
        $this->opening = $opening;

        return $this;
    }

    public function getCash(): ?float
    {
        return $this->cash;
    }

    public function setCash(?float $cash): self
    {
        $this->cash = $cash;

        return $this;
    }

    public function getCard(): ?float
    {
        return $this->card;
    }

    public function setCard(?float $card): self
    {
        $this->card = $card;

        return $this;
    }

    public function getCheque(): ?float
    {
        return $this->cheque;
    }

    public function setCheque(?float $cheque): self
    {
        $this->cheque = $cheque;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getDateValid(): ?\DateTimeInterface
    {
        return $this->dateValid;
    }

    public function setDateValid(?\DateTimeInterface $dateValid): self
    {
        $this->dateValid = $dateValid;

        return $this;
    }

    public function getDayClose(): ?int
    {
        return $this->dayClose;
    }

    public function setDayClose(?int $dayClose): self
    {
        $this->dayClose = $dayClose;

        return $this;
    }

    public function getMonthClose(): ?int
    {
        return $this->monthClose;
    }

    public function setMonthClose(?int $monthClose): self
    {
        $this->monthClose = $monthClose;

        return $this;
    }

    public function getYearClose(): ?int
    {
        return $this->yearClose;
    }

    public function setYearClose(?int $yearClose): self
    {
        $this->yearClose = $yearClose;

        return $this;
    }

    public function getPosmodule(): ?string
    {
        return $this->posmodule;
    }

    public function setPosmodule(?string $posmodule): self
    {
        $this->posmodule = $posmodule;

        return $this;
    }

    public function getPosnumber(): ?string
    {
        return $this->posnumber;
    }

    public function setPosnumber(?string $posnumber): self
    {
        $this->posnumber = $posnumber;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

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


}
