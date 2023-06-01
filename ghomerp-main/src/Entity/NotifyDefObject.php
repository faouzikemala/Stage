<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotifyDefObject
 *
 * @ORM\Table(name="notify_def_object")
 * @ORM\Entity
 */
class NotifyDefObject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objet_type", type="string", length=16, nullable=true)
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
     * @ORM\Column(name="type_notif", type="string", length=16, nullable=true, options={"default"="browser"})
     */
    private $typeNotif = 'browser';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_notif", type="datetime", nullable=true)
     */
    private $dateNotif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moreparam", type="string", length=255, nullable=true)
     */
    private $moreparam;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getObjetType(): ?string
    {
        return $this->objetType;
    }

    public function setObjetType(?string $objetType): self
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

    public function getTypeNotif(): ?string
    {
        return $this->typeNotif;
    }

    public function setTypeNotif(?string $typeNotif): self
    {
        $this->typeNotif = $typeNotif;

        return $this;
    }

    public function getDateNotif(): ?\DateTimeInterface
    {
        return $this->dateNotif;
    }

    public function setDateNotif(?\DateTimeInterface $dateNotif): self
    {
        $this->dateNotif = $dateNotif;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getMoreparam(): ?string
    {
        return $this->moreparam;
    }

    public function setMoreparam(?string $moreparam): self
    {
        $this->moreparam = $moreparam;

        return $this;
    }


}
