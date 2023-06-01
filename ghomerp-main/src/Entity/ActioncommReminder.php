<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActioncommReminder
 *
 * @ORM\Table(name="actioncomm_reminder", uniqueConstraints={@ORM\UniqueConstraint(name="uk_actioncomm_reminder_unique", columns={"fk_actioncomm", "fk_user", "typeremind", "offsetvalue", "offsetunit"})}, indexes={@ORM\Index(name="idx_actioncomm_reminder_dateremind", columns={"dateremind"}), @ORM\Index(name="idx_actioncomm_reminder_status", columns={"status"}), @ORM\Index(name="idx_actioncomm_reminder_fk_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class ActioncommReminder
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateremind", type="datetime", nullable=false)
     */
    private $dateremind;

    /**
     * @var string
     *
     * @ORM\Column(name="typeremind", type="string", length=32, nullable=false)
     */
    private $typeremind;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var int
     *
     * @ORM\Column(name="offsetvalue", type="integer", nullable=false)
     */
    private $offsetvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="offsetunit", type="string", length=1, nullable=false)
     */
    private $offsetunit;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lasterror", type="string", length=128, nullable=true)
     */
    private $lasterror;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_actioncomm", type="integer", nullable=false)
     */
    private $fkActioncomm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_email_template", type="integer", nullable=true)
     */
    private $fkEmailTemplate;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getDateremind(): ?\DateTimeInterface
    {
        return $this->dateremind;
    }

    public function setDateremind(\DateTimeInterface $dateremind): self
    {
        $this->dateremind = $dateremind;

        return $this;
    }

    public function getTyperemind(): ?string
    {
        return $this->typeremind;
    }

    public function setTyperemind(string $typeremind): self
    {
        $this->typeremind = $typeremind;

        return $this;
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

    public function getOffsetvalue(): ?int
    {
        return $this->offsetvalue;
    }

    public function setOffsetvalue(int $offsetvalue): self
    {
        $this->offsetvalue = $offsetvalue;

        return $this;
    }

    public function getOffsetunit(): ?string
    {
        return $this->offsetunit;
    }

    public function setOffsetunit(string $offsetunit): self
    {
        $this->offsetunit = $offsetunit;

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

    public function getLasterror(): ?string
    {
        return $this->lasterror;
    }

    public function setLasterror(?string $lasterror): self
    {
        $this->lasterror = $lasterror;

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

    public function getFkActioncomm(): ?int
    {
        return $this->fkActioncomm;
    }

    public function setFkActioncomm(int $fkActioncomm): self
    {
        $this->fkActioncomm = $fkActioncomm;

        return $this;
    }

    public function getFkEmailTemplate(): ?int
    {
        return $this->fkEmailTemplate;
    }

    public function setFkEmailTemplate(?int $fkEmailTemplate): self
    {
        $this->fkEmailTemplate = $fkEmailTemplate;

        return $this;
    }


}
