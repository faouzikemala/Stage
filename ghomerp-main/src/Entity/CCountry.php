<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * CCountry
 * @ApiResource()
 * @ORM\Table(name="c_country", uniqueConstraints={@ORM\UniqueConstraint(name="idx_c_country_label", columns={"label"}), @ORM\UniqueConstraint(name="idx_c_country_code", columns={"code"}), @ORM\UniqueConstraint(name="idx_c_country_code_iso", columns={"code_iso"})})
 * @ORM\Entity
 */
class CCountry
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
     * @ORM\Column(name="code", type="string", length=2, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_iso", type="string", length=3, nullable=true)
     */
    private $codeIso;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eec", type="integer", nullable=true)
     */
    private $eec;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="favorite", type="boolean", nullable=false)
     */
    private $favorite = '0';

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCodeIso(): ?string
    {
        return $this->codeIso;
    }

    public function setCodeIso(?string $codeIso): self
    {
        $this->codeIso = $codeIso;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getEec(): ?int
    {
        return $this->eec;
    }

    public function setEec(?int $eec): self
    {
        $this->eec = $eec;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFavorite(): ?bool
    {
        return $this->favorite;
    }

    public function setFavorite(bool $favorite): self
    {
        $this->favorite = $favorite;

        return $this;
    }


}
