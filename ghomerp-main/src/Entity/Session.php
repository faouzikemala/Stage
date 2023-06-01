<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_variable", type="text", length=65535, nullable=true)
     */
    private $sessionVariable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_accessed", type="datetime", nullable=false)
     */
    private $lastAccessed;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_ip", type="string", length=64, nullable=true)
     */
    private $remoteIp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_agent", type="string", length=128, nullable=true)
     */
    private $userAgent;

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function getSessionVariable(): ?string
    {
        return $this->sessionVariable;
    }

    public function setSessionVariable(?string $sessionVariable): self
    {
        $this->sessionVariable = $sessionVariable;

        return $this;
    }

    public function getLastAccessed(): ?\DateTimeInterface
    {
        return $this->lastAccessed;
    }

    public function setLastAccessed(\DateTimeInterface $lastAccessed): self
    {
        $this->lastAccessed = $lastAccessed;

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

    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }

    public function setRemoteIp(?string $remoteIp): self
    {
        $this->remoteIp = $remoteIp;

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


}
