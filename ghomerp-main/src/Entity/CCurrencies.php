<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CCurrencies
 * @ApiResource()
 * @ORM\Table(name="c_currencies", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_currencies_code_iso", columns={"code_iso"})})
 * @ORM\Entity
 */
class CCurrencies
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_iso", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeIso;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unicode", type="string", length=32, nullable=true)
     */
    private $unicode;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    public function getCodeIso(): ?string
    {
        return $this->codeIso;
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

    public function getUnicode(): ?string
    {
        return $this->unicode;
    }

    public function setUnicode(?string $unicode): self
    {
        $this->unicode = $unicode;

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


}
