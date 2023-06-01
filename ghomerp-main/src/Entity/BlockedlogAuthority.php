<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlockedlogAuthority
 *
 * @ORM\Table(name="blockedlog_authority", indexes={@ORM\Index(name="signature", columns={"signature"})})
 * @ORM\Entity
 */
class BlockedlogAuthority
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
     * @var string
     *
     * @ORM\Column(name="blockchain", type="text", length=0, nullable=false)
     */
    private $blockchain;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=100, nullable=false)
     */
    private $signature;

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

    public function getBlockchain(): ?string
    {
        return $this->blockchain;
    }

    public function setBlockchain(string $blockchain): self
    {
        $this->blockchain = $blockchain;

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
