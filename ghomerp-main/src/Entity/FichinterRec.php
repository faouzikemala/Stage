<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichinterRec
 *
 * @ORM\Table(name="fichinter_rec", uniqueConstraints={@ORM\UniqueConstraint(name="idx_fichinter_rec_uk_titre", columns={"titre", "entity"})}, indexes={@ORM\Index(name="idx_fichinter_rec_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_fichinter_rec_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_fichinter_rec_fk_projet", columns={"fk_projet"})})
 * @ORM\Entity
 */
class FichinterRec
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
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contrat", type="integer", nullable=true)
     */
    private $fkContrat = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="duree", type="float", precision=10, scale=0, nullable=true)
     */
    private $duree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modelpdf", type="string", length=50, nullable=true)
     */
    private $modelpdf;

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
     * @var int|null
     *
     * @ORM\Column(name="frequency", type="integer", nullable=true)
     */
    private $frequency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_frequency", type="string", length=2, nullable=true, options={"default"="m"})
     */
    private $unitFrequency = 'm';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_when", type="datetime", nullable=true)
     */
    private $dateWhen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_last_gen", type="datetime", nullable=true)
     */
    private $dateLastGen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_gen_done", type="integer", nullable=true)
     */
    private $nbGenDone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_gen_max", type="integer", nullable=true)
     */
    private $nbGenMax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="auto_validate", type="integer", nullable=true)
     */
    private $autoValidate;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_projet", referencedColumnName="rowid")
     * })
     */
    private $fkProjet;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_author", referencedColumnName="rowid")
     * })
     */
    private $fkUserAuthor;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getFkSoc(): ?int
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?int $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

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

    public function getFkContrat(): ?int
    {
        return $this->fkContrat;
    }

    public function setFkContrat(?int $fkContrat): self
    {
        $this->fkContrat = $fkContrat;

        return $this;
    }

    public function getDuree(): ?float
    {
        return $this->duree;
    }

    public function setDuree(?float $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getModelpdf(): ?string
    {
        return $this->modelpdf;
    }

    public function setModelpdf(?string $modelpdf): self
    {
        $this->modelpdf = $modelpdf;

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

    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getUnitFrequency(): ?string
    {
        return $this->unitFrequency;
    }

    public function setUnitFrequency(?string $unitFrequency): self
    {
        $this->unitFrequency = $unitFrequency;

        return $this;
    }

    public function getDateWhen(): ?\DateTimeInterface
    {
        return $this->dateWhen;
    }

    public function setDateWhen(?\DateTimeInterface $dateWhen): self
    {
        $this->dateWhen = $dateWhen;

        return $this;
    }

    public function getDateLastGen(): ?\DateTimeInterface
    {
        return $this->dateLastGen;
    }

    public function setDateLastGen(?\DateTimeInterface $dateLastGen): self
    {
        $this->dateLastGen = $dateLastGen;

        return $this;
    }

    public function getNbGenDone(): ?int
    {
        return $this->nbGenDone;
    }

    public function setNbGenDone(?int $nbGenDone): self
    {
        $this->nbGenDone = $nbGenDone;

        return $this;
    }

    public function getNbGenMax(): ?int
    {
        return $this->nbGenMax;
    }

    public function setNbGenMax(?int $nbGenMax): self
    {
        $this->nbGenMax = $nbGenMax;

        return $this;
    }

    public function getAutoValidate(): ?int
    {
        return $this->autoValidate;
    }

    public function setAutoValidate(?int $autoValidate): self
    {
        $this->autoValidate = $autoValidate;

        return $this;
    }

    public function getFkProjet(): ?Projet
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?Projet $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

        return $this;
    }

    public function getFkUserAuthor(): ?User
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?User $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }


}
