<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailcollectorEmailcollector
 *
 * @ORM\Table(name="emailcollector_emailcollector", uniqueConstraints={@ORM\UniqueConstraint(name="uk_emailcollector_emailcollector_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_emailcollector_status", columns={"status"}), @ORM\Index(name="idx_emailcollector_entity", columns={"entity"})})
 * @ORM\Entity
 */
class EmailcollectorEmailcollector
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="host", type="string", length=255, nullable=true)
     */
    private $host;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hostcharset", type="string", length=16, nullable=true, options={"default"="UTF-8"})
     */
    private $hostcharset = 'UTF-8';

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=128, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="source_directory", type="string", length=255, nullable=false)
     */
    private $sourceDirectory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target_directory", type="string", length=255, nullable=true)
     */
    private $targetDirectory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxemailpercollect", type="integer", nullable=true, options={"default"="100"})
     */
    private $maxemailpercollect = 100;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastresult", type="datetime", nullable=true)
     */
    private $datelastresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codelastresult", type="string", length=16, nullable=true)
     */
    private $codelastresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastresult", type="string", length=255, nullable=true)
     */
    private $lastresult;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastok", type="datetime", nullable=true)
     */
    private $datelastok;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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

    public function setRef(string $ref): self
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function getHostcharset(): ?string
    {
        return $this->hostcharset;
    }

    public function setHostcharset(?string $hostcharset): self
    {
        $this->hostcharset = $hostcharset;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSourceDirectory(): ?string
    {
        return $this->sourceDirectory;
    }

    public function setSourceDirectory(string $sourceDirectory): self
    {
        $this->sourceDirectory = $sourceDirectory;

        return $this;
    }

    public function getTargetDirectory(): ?string
    {
        return $this->targetDirectory;
    }

    public function setTargetDirectory(?string $targetDirectory): self
    {
        $this->targetDirectory = $targetDirectory;

        return $this;
    }

    public function getMaxemailpercollect(): ?int
    {
        return $this->maxemailpercollect;
    }

    public function setMaxemailpercollect(?int $maxemailpercollect): self
    {
        $this->maxemailpercollect = $maxemailpercollect;

        return $this;
    }

    public function getDatelastresult(): ?\DateTimeInterface
    {
        return $this->datelastresult;
    }

    public function setDatelastresult(?\DateTimeInterface $datelastresult): self
    {
        $this->datelastresult = $datelastresult;

        return $this;
    }

    public function getCodelastresult(): ?string
    {
        return $this->codelastresult;
    }

    public function setCodelastresult(?string $codelastresult): self
    {
        $this->codelastresult = $codelastresult;

        return $this;
    }

    public function getLastresult(): ?string
    {
        return $this->lastresult;
    }

    public function setLastresult(?string $lastresult): self
    {
        $this->lastresult = $lastresult;

        return $this;
    }

    public function getDatelastok(): ?\DateTimeInterface
    {
        return $this->datelastok;
    }

    public function setDatelastok(?\DateTimeInterface $datelastok): self
    {
        $this->datelastok = $datelastok;

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

    public function getNotePrivate(): ?string
    {
        return $this->notePrivate;
    }

    public function setNotePrivate(?string $notePrivate): self
    {
        $this->notePrivate = $notePrivate;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(int $fkUserCreat): self
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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

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


}
