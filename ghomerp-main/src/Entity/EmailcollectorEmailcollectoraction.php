<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailcollectorEmailcollectoraction
 *
 * @ORM\Table(name="emailcollector_emailcollectoraction", uniqueConstraints={@ORM\UniqueConstraint(name="uk_emailcollector_emailcollectoraction", columns={"fk_emailcollector", "type"})}, indexes={@ORM\Index(name="idx_emailcollector_fk_emailcollector", columns={"fk_emailcollector"})})
 * @ORM\Entity
 */
class EmailcollectorEmailcollectoraction
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
     * @ORM\Column(name="type", type="string", length=128, nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actionparam", type="string", length=255, nullable=true)
     */
    private $actionparam;

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
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position = '0';

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

    /**
     * @var \EmailcollectorEmailcollector
     *
     * @ORM\ManyToOne(targetEntity="EmailcollectorEmailcollector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_emailcollector", referencedColumnName="rowid")
     * })
     */
    private $fkEmailcollector;

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

    public function getActionparam(): ?string
    {
        return $this->actionparam;
    }

    public function setActionparam(?string $actionparam): self
    {
        $this->actionparam = $actionparam;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

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

    public function getFkEmailcollector(): ?EmailcollectorEmailcollector
    {
        return $this->fkEmailcollector;
    }

    public function setFkEmailcollector(?EmailcollectorEmailcollector $fkEmailcollector): self
    {
        $this->fkEmailcollector = $fkEmailcollector;

        return $this;
    }


}
