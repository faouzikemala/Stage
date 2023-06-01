<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthToken
 *
 * @ORM\Table(name="oauth_token")
 * @ORM\Entity
 */
class OauthToken
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
     * @ORM\Column(name="service", type="string", length=36, nullable=true)
     */
    private $service;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="text", length=65535, nullable=true)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tokenstring", type="text", length=65535, nullable=true)
     */
    private $tokenstring;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_adherent", type="integer", nullable=true)
     */
    private $fkAdherent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restricted_ips", type="string", length=200, nullable=true)
     */
    private $restrictedIps;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getTokenstring(): ?string
    {
        return $this->tokenstring;
    }

    public function setTokenstring(?string $tokenstring): self
    {
        $this->tokenstring = $tokenstring;

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

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getFkAdherent(): ?int
    {
        return $this->fkAdherent;
    }

    public function setFkAdherent(?int $fkAdherent): self
    {
        $this->fkAdherent = $fkAdherent;

        return $this;
    }

    public function getRestrictedIps(): ?string
    {
        return $this->restrictedIps;
    }

    public function setRestrictedIps(?string $restrictedIps): self
    {
        $this->restrictedIps = $restrictedIps;

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(?int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }


}
