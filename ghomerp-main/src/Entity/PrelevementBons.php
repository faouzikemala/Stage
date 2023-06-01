<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrelevementBons
 *
 * @ORM\Table(name="prelevement_bons", uniqueConstraints={@ORM\UniqueConstraint(name="uk_prelevement_bons_ref", columns={"ref", "entity"})})
 * @ORM\Entity
 */
class PrelevementBons
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
     * @ORM\Column(name="type", type="string", length=16, nullable=true, options={"default"="debit-order"})
     */
    private $type = 'debit-order';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=12, nullable=true)
     */
    private $ref;

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
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="credite", type="smallint", nullable=true)
     */
    private $credite = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_trans", type="datetime", nullable=true)
     */
    private $dateTrans;

    /**
     * @var int|null
     *
     * @ORM\Column(name="method_trans", type="smallint", nullable=true)
     */
    private $methodTrans;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_trans", type="integer", nullable=true)
     */
    private $fkUserTrans;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_credit", type="datetime", nullable=true)
     */
    private $dateCredit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_credit", type="integer", nullable=true)
     */
    private $fkUserCredit;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCredite(): ?int
    {
        return $this->credite;
    }

    public function setCredite(?int $credite): self
    {
        $this->credite = $credite;

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

    public function getDateTrans(): ?\DateTimeInterface
    {
        return $this->dateTrans;
    }

    public function setDateTrans(?\DateTimeInterface $dateTrans): self
    {
        $this->dateTrans = $dateTrans;

        return $this;
    }

    public function getMethodTrans(): ?int
    {
        return $this->methodTrans;
    }

    public function setMethodTrans(?int $methodTrans): self
    {
        $this->methodTrans = $methodTrans;

        return $this;
    }

    public function getFkUserTrans(): ?int
    {
        return $this->fkUserTrans;
    }

    public function setFkUserTrans(?int $fkUserTrans): self
    {
        $this->fkUserTrans = $fkUserTrans;

        return $this;
    }

    public function getDateCredit(): ?\DateTimeInterface
    {
        return $this->dateCredit;
    }

    public function setDateCredit(?\DateTimeInterface $dateCredit): self
    {
        $this->dateCredit = $dateCredit;

        return $this;
    }

    public function getFkUserCredit(): ?int
    {
        return $this->fkUserCredit;
    }

    public function setFkUserCredit(?int $fkUserCredit): self
    {
        $this->fkUserCredit = $fkUserCredit;

        return $this;
    }


}
