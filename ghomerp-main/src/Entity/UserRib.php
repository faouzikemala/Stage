<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRib
 *
 * @ORM\Table(name="user_rib")
 * @ORM\Entity
 */
class UserRib
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
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

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
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=true)
     */
    private $label;

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
     * @ORM\Column(name="bic", type="string", length=11, nullable=true)
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

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(int $fkUser): self
    {
        $this->fkUser = $fkUser;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

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


}
