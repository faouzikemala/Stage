<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankUrl
 *
 * @ORM\Table(name="bank_url", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bank_url", columns={"fk_bank", "url_id", "type"})})
 * @ORM\Entity
 */
class BankUrl
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
     * @var int|null
     *
     * @ORM\Column(name="fk_bank", type="integer", nullable=true)
     */
    private $fkBank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="url_id", type="integer", nullable=true)
     */
    private $urlId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=24, nullable=false)
     */
    private $type;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkBank(): ?int
    {
        return $this->fkBank;
    }

    public function setFkBank(?int $fkBank): self
    {
        $this->fkBank = $fkBank;

        return $this;
    }

    public function getUrlId(): ?int
    {
        return $this->urlId;
    }

    public function setUrlId(?int $urlId): self
    {
        $this->urlId = $urlId;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

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


}
