<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events", indexes={@ORM\Index(name="idx_events_dateevent", columns={"dateevent"})})
 * @ORM\Entity
 */
class Events
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefix_session", type="string", length=255, nullable=true)
     */
    private $prefixSession;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateevent", type="datetime", nullable=true)
     */
    private $dateevent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=250, nullable=false)
     */
    private $ip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=true)
     */
    private $userAgent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_object", type="integer", nullable=true)
     */
    private $fkObject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authentication_method", type="string", length=64, nullable=true)
     */
    private $authenticationMethod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_oauth_token", type="integer", nullable=true)
     */
    private $fkOauthToken;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getPrefixSession(): ?string
    {
        return $this->prefixSession;
    }

    public function setPrefixSession(?string $prefixSession): self
    {
        $this->prefixSession = $prefixSession;

        return $this;
    }

    public function getDateevent(): ?\DateTimeInterface
    {
        return $this->dateevent;
    }

    public function setDateevent(?\DateTimeInterface $dateevent): self
    {
        $this->dateevent = $dateevent;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

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

    public function getAuthenticationMethod(): ?string
    {
        return $this->authenticationMethod;
    }

    public function setAuthenticationMethod(?string $authenticationMethod): self
    {
        $this->authenticationMethod = $authenticationMethod;

        return $this;
    }

    public function getFkOauthToken(): ?int
    {
        return $this->fkOauthToken;
    }

    public function setFkOauthToken(?int $fkOauthToken): self
    {
        $this->fkOauthToken = $fkOauthToken;

        return $this;
    }


}
