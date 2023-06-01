<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Chargesociales
 * @ApiResource()
 * @ORM\Table(name="chargesociales")
 * @ORM\Entity
 */
class Chargesociales
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
     * @ORM\Column(name="ref", type="string", length=16, nullable=true)
     */
    private $ref;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ech", type="datetime", nullable=false)
     */
    private $dateEch;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=80, nullable=false)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
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
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mode_reglement", type="integer", nullable=true)
     */
    private $fkModeReglement;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var int
     *
     * @ORM\Column(name="paye", type="smallint", nullable=false)
     */
    private $paye = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="periode", type="date", nullable=true)
     */
    private $periode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getDateEch(): ?\DateTimeInterface
    {
        return $this->dateEch;
    }

    public function setDateEch(\DateTimeInterface $dateEch): self
    {
        $this->dateEch = $dateEch;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
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

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

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

    public function getFkUserValid(): ?int
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?int $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }

    public function getFkType(): ?int
    {
        return $this->fkType;
    }

    public function setFkType(int $fkType): self
    {
        $this->fkType = $fkType;

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

    public function getFkModeReglement(): ?int
    {
        return $this->fkModeReglement;
    }

    public function setFkModeReglement(?int $fkModeReglement): self
    {
        $this->fkModeReglement = $fkModeReglement;

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

    public function getPaye(): ?int
    {
        return $this->paye;
    }

    public function setPaye(int $paye): self
    {
        $this->paye = $paye;

        return $this;
    }

    public function getPeriode(): ?\DateTimeInterface
    {
        return $this->periode;
    }

    public function setPeriode(?\DateTimeInterface $periode): self
    {
        $this->periode = $periode;

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
