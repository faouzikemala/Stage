<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailingUnsubscribe
 *
 * @ORM\Table(name="mailing_unsubscribe", uniqueConstraints={@ORM\UniqueConstraint(name="uk_mailing_unsubscribe", columns={"email", "entity", "unsubscribegroup"})})
 * @ORM\Entity
 */
class MailingUnsubscribe
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
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unsubscribegroup", type="string", length=128, nullable=true)
     */
    private $unsubscribegroup = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=128, nullable=true)
     */
    private $ip;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creat", type="datetime", nullable=true)
     */
    private $dateCreat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUnsubscribegroup(): ?string
    {
        return $this->unsubscribegroup;
    }

    public function setUnsubscribegroup(?string $unsubscribegroup): self
    {
        $this->unsubscribegroup = $unsubscribegroup;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getDateCreat(): ?\DateTimeInterface
    {
        return $this->dateCreat;
    }

    public function setDateCreat(?\DateTimeInterface $dateCreat): self
    {
        $this->dateCreat = $dateCreat;

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


}
