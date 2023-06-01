<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bank
 *
 * @ORM\Table(name="bank", indexes={@ORM\Index(name="idx_bank_dateo", columns={"dateo"}), @ORM\Index(name="idx_bank_rappro", columns={"rappro"}), @ORM\Index(name="idx_bank_datev", columns={"datev"}), @ORM\Index(name="idx_bank_fk_account", columns={"fk_account"}), @ORM\Index(name="idx_bank_num_releve", columns={"num_releve"})})
 * @ORM\Entity
 */
class Bank
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
     * @ORM\Column(name="datev", type="date", nullable=true)
     */
    private $datev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateo", type="date", nullable=true)
     */
    private $dateo;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_rappro", type="integer", nullable=true)
     */
    private $fkUserRappro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_type", type="string", length=6, nullable=true)
     */
    private $fkType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_releve", type="string", length=50, nullable=true)
     */
    private $numReleve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_chq", type="string", length=50, nullable=true)
     */
    private $numChq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_compte", type="string", length=32, nullable=true)
     */
    private $numeroCompte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rappro", type="boolean", nullable=true)
     */
    private $rappro = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_bordereau", type="integer", nullable=true)
     */
    private $fkBordereau = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="banque", type="string", length=255, nullable=true)
     */
    private $banque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emetteur", type="string", length=255, nullable=true)
     */
    private $emetteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author", type="string", length=40, nullable=true)
     */
    private $author;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origin_id", type="integer", nullable=true)
     */
    private $originId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origin_type", type="string", length=64, nullable=true)
     */
    private $originType;

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

    public function getDatev(): ?\DateTimeInterface
    {
        return $this->datev;
    }

    public function setDatev(?\DateTimeInterface $datev): self
    {
        $this->datev = $datev;

        return $this;
    }

    public function getDateo(): ?\DateTimeInterface
    {
        return $this->dateo;
    }

    public function setDateo(?\DateTimeInterface $dateo): self
    {
        $this->dateo = $dateo;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

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

    public function getFkAccount(): ?int
    {
        return $this->fkAccount;
    }

    public function setFkAccount(?int $fkAccount): self
    {
        $this->fkAccount = $fkAccount;

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

    public function getFkUserRappro(): ?int
    {
        return $this->fkUserRappro;
    }

    public function setFkUserRappro(?int $fkUserRappro): self
    {
        $this->fkUserRappro = $fkUserRappro;

        return $this;
    }

    public function getFkType(): ?string
    {
        return $this->fkType;
    }

    public function setFkType(?string $fkType): self
    {
        $this->fkType = $fkType;

        return $this;
    }

    public function getNumReleve(): ?string
    {
        return $this->numReleve;
    }

    public function setNumReleve(?string $numReleve): self
    {
        $this->numReleve = $numReleve;

        return $this;
    }

    public function getNumChq(): ?string
    {
        return $this->numChq;
    }

    public function setNumChq(?string $numChq): self
    {
        $this->numChq = $numChq;

        return $this;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(?string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getRappro(): ?bool
    {
        return $this->rappro;
    }

    public function setRappro(?bool $rappro): self
    {
        $this->rappro = $rappro;

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

    public function getFkBordereau(): ?int
    {
        return $this->fkBordereau;
    }

    public function setFkBordereau(?int $fkBordereau): self
    {
        $this->fkBordereau = $fkBordereau;

        return $this;
    }

    public function getBanque(): ?string
    {
        return $this->banque;
    }

    public function setBanque(?string $banque): self
    {
        $this->banque = $banque;

        return $this;
    }

    public function getEmetteur(): ?string
    {
        return $this->emetteur;
    }

    public function setEmetteur(?string $emetteur): self
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getOriginId(): ?int
    {
        return $this->originId;
    }

    public function setOriginId(?int $originId): self
    {
        $this->originId = $originId;

        return $this;
    }

    public function getOriginType(): ?string
    {
        return $this->originType;
    }

    public function setOriginType(?string $originType): self
    {
        $this->originType = $originType;

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
