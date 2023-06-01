<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdherentType
 *
 * @ORM\Table(name="adherent_type", uniqueConstraints={@ORM\UniqueConstraint(name="uk_adherent_type_libelle", columns={"libelle", "entity"})})
 * @ORM\Entity
 */
class AdherentType
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
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="morphy", type="string", length=3, nullable=false)
     */
    private $morphy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration", type="string", length=6, nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription", type="string", length=3, nullable=false, options={"default"="1"})
     */
    private $subscription = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="vote", type="string", length=3, nullable=false, options={"default"="1"})
     */
    private $vote = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_valid", type="text", length=65535, nullable=true)
     */
    private $mailValid;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

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

    public function getMorphy(): ?string
    {
        return $this->morphy;
    }

    public function setMorphy(string $morphy): self
    {
        $this->morphy = $morphy;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getSubscription(): ?string
    {
        return $this->subscription;
    }

    public function setSubscription(string $subscription): self
    {
        $this->subscription = $subscription;

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

    public function getVote(): ?string
    {
        return $this->vote;
    }

    public function setVote(string $vote): self
    {
        $this->vote = $vote;

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

    public function getMailValid(): ?string
    {
        return $this->mailValid;
    }

    public function setMailValid(?string $mailValid): self
    {
        $this->mailValid = $mailValid;

        return $this;
    }


}
