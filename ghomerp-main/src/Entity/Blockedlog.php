<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blockedlog
 *
 * @ORM\Table(name="blockedlog", indexes={@ORM\Index(name="entity_action", columns={"entity", "action"}), @ORM\Index(name="entity_action_certified", columns={"entity", "action", "certified"}), @ORM\Index(name="fk_object_element", columns={"fk_object", "element"}), @ORM\Index(name="entity", columns={"entity"}), @ORM\Index(name="fk_user", columns={"fk_user"}), @ORM\Index(name="signature", columns={"signature"})})
 * @ORM\Entity
 */
class Blockedlog
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=true)
     */
    private $action;

    /**
     * @var float
     *
     * @ORM\Column(name="amounts", type="float", precision=24, scale=8, nullable=false)
     */
    private $amounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="element", type="string", length=50, nullable=true)
     */
    private $element;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_fullname", type="string", length=255, nullable=true)
     */
    private $userFullname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_object", type="integer", nullable=true)
     */
    private $fkObject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_object", type="string", length=255, nullable=true)
     */
    private $refObject;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_object", type="datetime", nullable=true)
     */
    private $dateObject;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=100, nullable=false)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_line", type="string", length=100, nullable=false)
     */
    private $signatureLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="object_data", type="text", length=16777215, nullable=true)
     */
    private $objectData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="object_version", type="string", length=32, nullable=true)
     */
    private $objectVersion = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="certified", type="integer", nullable=true)
     */
    private $certified;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
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

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getAmounts(): ?float
    {
        return $this->amounts;
    }

    public function setAmounts(float $amounts): self
    {
        $this->amounts = $amounts;

        return $this;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function setElement(?string $element): self
    {
        $this->element = $element;

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

    public function getUserFullname(): ?string
    {
        return $this->userFullname;
    }

    public function setUserFullname(?string $userFullname): self
    {
        $this->userFullname = $userFullname;

        return $this;
    }

    public function getFkObject(): ?int
    {
        return $this->fkObject;
    }

    public function setFkObject(?int $fkObject): self
    {
        $this->fkObject = $fkObject;

        return $this;
    }

    public function getRefObject(): ?string
    {
        return $this->refObject;
    }

    public function setRefObject(?string $refObject): self
    {
        $this->refObject = $refObject;

        return $this;
    }

    public function getDateObject(): ?\DateTimeInterface
    {
        return $this->dateObject;
    }

    public function setDateObject(?\DateTimeInterface $dateObject): self
    {
        $this->dateObject = $dateObject;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getSignatureLine(): ?string
    {
        return $this->signatureLine;
    }

    public function setSignatureLine(string $signatureLine): self
    {
        $this->signatureLine = $signatureLine;

        return $this;
    }

    public function getObjectData(): ?string
    {
        return $this->objectData;
    }

    public function setObjectData(?string $objectData): self
    {
        $this->objectData = $objectData;

        return $this;
    }

    public function getObjectVersion(): ?string
    {
        return $this->objectVersion;
    }

    public function setObjectVersion(?string $objectVersion): self
    {
        $this->objectVersion = $objectVersion;

        return $this;
    }

    public function getCertified(): ?int
    {
        return $this->certified;
    }

    public function setCertified(?int $certified): self
    {
        $this->certified = $certified;

        return $this;
    }


}
