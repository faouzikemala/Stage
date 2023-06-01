<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notify
 *
 * @ORM\Table(name="notify")
 * @ORM\Entity
 */
class Notify
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
     * @ORM\Column(name="daten", type="datetime", nullable=true)
     */
    private $daten;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_action", type="integer", nullable=false)
     */
    private $fkAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contact", type="integer", nullable=true)
     */
    private $fkContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=true, options={"default"="email"})
     */
    private $type = 'email';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_target", type="string", length=16, nullable=true)
     */
    private $typeTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_type", type="string", length=24, nullable=false)
     */
    private $objetType;

    /**
     * @var int
     *
     * @ORM\Column(name="objet_id", type="integer", nullable=false)
     */
    private $objetId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

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

    public function getDaten(): ?\DateTimeInterface
    {
        return $this->daten;
    }

    public function setDaten(?\DateTimeInterface $daten): self
    {
        $this->daten = $daten;

        return $this;
    }

    public function getFkAction(): ?int
    {
        return $this->fkAction;
    }

    public function setFkAction(int $fkAction): self
    {
        $this->fkAction = $fkAction;

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

    public function getFkContact(): ?int
    {
        return $this->fkContact;
    }

    public function setFkContact(?int $fkContact): self
    {
        $this->fkContact = $fkContact;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTypeTarget(): ?string
    {
        return $this->typeTarget;
    }

    public function setTypeTarget(?string $typeTarget): self
    {
        $this->typeTarget = $typeTarget;

        return $this;
    }

    public function getObjetType(): ?string
    {
        return $this->objetType;
    }

    public function setObjetType(string $objetType): self
    {
        $this->objetType = $objetType;

        return $this;
    }

    public function getObjetId(): ?int
    {
        return $this->objetId;
    }

    public function setObjetId(int $objetId): self
    {
        $this->objetId = $objetId;

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


}
